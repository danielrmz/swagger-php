<?php
namespace SwaggerTests\Fixtures\Resources;

/**
 * @package
 * @category
 * @subpackage
 */
use Swagger\Annotations\Operation;
use Swagger\Annotations\Operations;
use Swagger\Annotations\Parameter;
use Swagger\Annotations\Parameters;
use Swagger\Annotations\Api;
use Swagger\Annotations\ErrorResponse;
use Swagger\Annotations\ErrorResponses;
use Swagger\Annotations\Resource;
use Swagger\Annotations\AllowableValues;

/**
 * @package
 * @category
 * @subpackage
 *
 * @Resource(
 *  apiVersion="0.2",
 *  swaggerVersion="1.1",
 *  basePath="http://petstore.swagger.wordnik.com/api",
 *  resourcePath="/pet"
 * )
 */
class Pet
{

    /**
     *
     * @Api(
     *   resourcePath="/pet",
     *   path="/pet.{format}/{petId}",
     *   description="Operations about pets",
     *   @operations(
     *     @operation(
     *       httpMethod="GET",
     *       summary="Find pet by ID",
     *       notes="Returns a pet based on ID",
     *       responseClass="Pet",
     *       nickname="getOrderById",
     *       @parameters(
     *         @parameter(
     *           name="petId",
     *           description="ID of pet that needs to be fetched",
     *           paramType="path",
     *           required="true",
     *           allowMultiple=false,
     *           dataType="string"
     *         )
     *       ),
     *       @errorResponses(
     *          @errorResponse(
     *            code="400",
     *            reason="Invalid ID supplied"
     *          ),
     *          @errorResponse(
     *            code="404",
     *            reason="Pet not found"
     *          )
     *       )
     *     )
     *   )
     * )
     */
    public function getPetById()
    {
    }

    /**
     *
     * @Api(
     *   resourcePath="/pet",
     *   path="/pet.{format}",
     *   description="Operations about pets",
     *   @operations(
     *     @operation(
     *       httpMethod="GET",
     *       summary="dd a new pet to the store",
     *       responseClass="void",
     *       nickname="addPet",
     *       @parameters(
     *         @parameter(
     *           description="Pet object that needs to be added to the store",
     *           paramType="body",
     *           required="true",
     *           allowMultiple=false,
     *           dataType="Pet"
     *         )
     *       ),
     *       @errorResponses(
     *          @errorResponse(
     *            code="405",
     *            reason="Invalid input"
     *          )
     *       )
     *     )
     *   )
     * )
     */
    public function addPet()
    {
    }

    /**
     *
     * @Api(
     *   resourcePath="/pet",
     *   path="/pet.{format}",
     *   description="Operations about pets",
     *   @operations(
     *     @operation(
     *       httpMethod="PUT",
     *       summary="Update an existing pet",
     *       responseClass="void",
     *       nickname="updatePet",
     *       @parameters(
     *         @parameter(
     *           description="Pet object that needs to be updated to the store",
     *           paramType="body",
     *           required="true",
     *           allowMultiple=false,
     *           dataType="Pet"
     *         )
     *       ),
     *       @errorResponses(
     *          @errorResponse(
     *            code="405",
     *            reason="Invalid input"
     *          ),
     *          @errorResponse(
     *            code="400",
     *            reason="Invalid ID supplied"
     *          ),
     *          @errorResponse(
     *            code="404",
     *            reason="Pet not found"
     *          )
     *       )
     *     )
     *   )
     * )
     */
    public function updatePet()
    {
    }

    /**
     *
     * @Api(
     *   resourcePath="/pet",
     *   path="/pet.{format}/findByStatus",
     *   description="Operations about pets",
     *   @operations(
     *     @operation(
     *       httpMethod="GET",
     *       summary="Finds Pets by status",
     *       notes="Multiple status values can be provided with comma seperated strings",
     *       responseClass="List[Pet]",
     *       nickname="findPetsByStatus",
     *       @parameters(
     *         @parameter(
     *           name="status",
     *           description="Status values that need to be considered for filter",
     *           paramType="query",
     *           defaultValue="available",
     *           @allowableValues(valueType="LIST", values="['available', 'pending', 'sold']"),
     *           required="true",
     *           allowMultiple=true,
     *           dataType="string"
     *         )
     *       ),
     *       @errorResponses(
     *          @errorResponse(
     *            code="400",
     *            reason="Invalid status value"
     *          )
     *       )
     *     )
     *   )
     * )
     */
    public function findPetsByStatus()
    {
    }

    /**
     *
     * @Api(
     *   resourcePath="/pet",
     *   path="/pet.{format}/findByTags",
     *   description="Operations about pets",
     *   @operations(
     *     @operation(
     *       httpMethod="GET",
     *       summary="Finds Pets by tags",
     *       notes="Muliple tags can be provided with comma seperated strings. Use tag1, tag2, tag3 for testing.",
     *       deprecated=true,
     *       responseClass="List[Pet]",
     *       nickname="List[Pet]",
     *       @parameters(
     *         @parameter(
     *           name="tags",
     *           description="Tags to filter by",
     *           paramType="query",
     *           required=true,
     *           allowMultiple=true,
     *           dataType="string"
     *         )
     *       ),
     *       @errorResponses(
     *          @errorResponse(
     *            code="400",
     *            reason="Invalid status value"
     *          )
     *       )
     *     )
     *   )
     * )
     */
    public function findPetsByTags()
    {
    }
}

