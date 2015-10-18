<?php


namespace Klimesf\RequestMapping;

/**
 * @package   Klimesf\RequestMapping\Annotation
 * @author    Filip Klimes <filip@filipklimes.cz>
 */
class EntityMetadata
{

	/** @var array|string[] */
	protected $required = [];

	/** @var array|string[] */
	protected $restricted = [];

	/** @var array|string[] */
	protected $aclRestricted = [];

	/** @var array|string[] */
	protected $columns = [];

	/** @var array */
	protected $columnsRules = [];

	/** @var array|string[] */
	protected $manyToOnes = [];

	/** @var array */
	protected $manyToOnesDescription = [];

	/** @var array|string[] */
	protected $manyToManies = [];

	/** @var array */
	protected $manyToManiesDescription = [];

}
