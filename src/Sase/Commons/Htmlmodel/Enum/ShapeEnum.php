<?php
/**
 * ShapeEnum
 *
 * Enumeration used to validate values of shape Attribute's value
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Enum;

use MyCLabs\Enum\Enum;

/**
 * ShapeEnum
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class ShapeEnum extends Enum
{

	/**
	 * Default Value
	 *
	 * @var string __default = self::default
	 */
	const __default = self::default;

	/**
	 * Specifies the entire region
	 *
	 * @var string default= "default"
	 */
	const default = "default";

	/**
	 * Defines a rectangular region
	 *
	 * @var string rect = "rect"
	 */
	const rect = "rect";

	/**
	 * Defines a circular region
	 *
	 * @var string circ = "circ"
	 */
	const circ = "circ";

	/**
	 * Defines a polygonal region
	 *
	 * @var string poly = "poly"
	 */
	const poly = "poly";
}