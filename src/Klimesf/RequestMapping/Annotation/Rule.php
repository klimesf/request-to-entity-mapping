<?php


namespace Klimesf\RequestMapping\Annotation;

/**
 * Adds a rule to annotated property. The value assigned to the property by the mapper is validated with the rule.
 * @package   Klimesf\RequestMapping\Annotation
 * @author    Filip Klimes <filip@filipklimes.cz>
 * @Annotation
 * @Target({"PROPERTY"})
 */
class Rule implements Annotation
{

	const TYPE_EMAIL = "email";

	/**
	 * @var string
	 */
	public $type;

}
