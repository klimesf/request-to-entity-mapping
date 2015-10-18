<?php


namespace Klimesf\RequestMapping\Annotation;

/**
 * Annotates property which is restricted for editing within specified HTTP methods.
 * @package   Klimesf\RequestMapping\Annotation
 * @author    Filip Klimes <filip@filipklimes.cz>
 * @Annotation
 * @Target({"PROPERTY"})
 */
class Restricted implements Annotation
{

	public $methods = ["POST", "PUT", "PATCH"];

}
