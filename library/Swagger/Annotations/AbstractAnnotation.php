<?php
namespace Swagger\Annotations;

/**
 * @package
 * @category
 * @subpackage
 */
use \Doctrine\Common\Annotations\AnnotationException;

/**
 * @package
 * @category
 * @subpackage
 *
 * @Annotation
 * @Target({"ALL"})
 */
abstract class AbstractAnnotation
{
    const REGEX = '/(:?|\[|\{)\s{0,}\'(:?|\]|\})/';
    const REPLACE = '$1"$2';
    const NEWLINES = '/(?>\r\n|\n|\r|\f|\x0b|\x85|\x{2028}|\x{2029})/u';
    const PREAMBLE = '/^\s+\*\s{0,1}/';

    /**
     * @param array $values
     */
    public function __construct(array $values = array())
    {
        foreach ($values as $k => $v) {
            if (property_exists($this, $k)) {
                $this->{$k} = $v;
            }
        }
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $members =  array_filter((array) $this);
        foreach ($members as $k => $m) {
            if ($m instanceof AbstractAnnotation) {
                $members[$k] = $m->toArray();
            }
        }
        if (isset($members['value'])) {
            foreach ($members['value'] as $k => $m) {
                if ($m instanceof AbstractAnnotation) {
                    $members['value'][$k] = $m->toArray();
                }
            }
            if ($members['value'] instanceof AbstractAnnotation) {
                $members['value'] = $members['value']->toArray();
            }
        }
        return $members;
    }
    /**
     * @param $json
     * @throws \Doctrine\Common\Annotations\AnnotationException
     *
     * @return mixed
     */
    public function decode($json)
    {
        $json = preg_replace(self::REGEX, self::REPLACE, $json);
        $json = json_decode($json);
        if ($error = json_last_error()) {
            throw new AnnotationException(sprintf('json decode error [%s]', $error));
        }
        return $json;
    }

    /**
     * @param $string
     *
     * @return string
     */
    public function removePreamble($string)
    {
        $string = preg_replace(self::NEWLINES, PHP_EOL, $string);
        $values = explode(PHP_EOL, $string);
        foreach ($values as $key => $value) {
            $values[$key] = preg_replace(self::PREAMBLE, null, $value);
        }
        return implode(PHP_EOL, $values);
    }
}

