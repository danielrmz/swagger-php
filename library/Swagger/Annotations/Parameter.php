<?php
namespace Swagger\Annotations;

/**
 * @package
 * @category
 * @subpackage
 */
/**
 * @package
 * @category
 * @subpackage
 *
 * @Annotation
 */
class Parameter extends AbstractAnnotation
{
    /**
     * @var string
     */
    public $description;
    /**
     * @var bool
     */
    public $require = false;
    /**
     * @var bool
     */
    public $allowMultiple = true;
    /**
     * @var string
     */
    public $dataType;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $paramType;

    /**
     * @var bool
     */
    public $required;

    /**
     * @var string
     */
    public $type;

    /**
     * @var mixed
     */
    public $value;

    /**
     * @var mixed
     */
    public $defaultValue;
}

