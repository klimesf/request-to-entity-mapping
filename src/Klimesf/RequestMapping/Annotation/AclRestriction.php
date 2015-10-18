<?php


namespace Klimesf\RequestMapping\Annotation;

/**
 * Specifies ACL resource and privilege of the column.
 * If the user doesn't have permission for the privilege on the resource, authorization exception shall be thrown by
 * the mapper.
 * @package   Klimesf\RequestMapping\Annotation
 * @author    Filip Klimes <filip@filipklimes.cz>
 * @Annotation
 * @Target({"PROPERTY"})
 */
class AclRestriction
{

	/**
	 * Name/id of the resource.
	 * @var string
	 */
	public $resource;

	/**
	 * Name/id of the privilege on the resource.
	 * @var string
	 */
	public $privilege;

}
