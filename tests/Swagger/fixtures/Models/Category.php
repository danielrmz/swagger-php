<?php
namespace SwaggerTests\Fixtures\Models;

/**
 * @package
 * @category
 * @subpackage
 */
use Swagger\Annotations\Property;
use Swagger\Annotations\AllowableValues;
use Swagger\Annotations\Model;

/**
 * @package
 * @category
 * @subpackage
 *
 * @Model(id="Category", description="")
 */
class Category
{
    /**
     * @var int
     * @Property(type="long")
     */
    protected $id;

    /**
     * @var string
     * @Property(type="string")
     */
    protected $name;
}

