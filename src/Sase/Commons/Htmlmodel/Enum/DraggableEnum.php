<?php
/**
 * DraggableEnum
 *
 * Enumeration used to validate values of draggable Attribute's value
 *
 * \Enum
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Enum;

use MyCLabs\Enum\Enum;

/**
 * DraggableEnum
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class DraggableEnum extends Enum
{

	/**
	 * Default Value
	 *
	 * @var string __default = self::false
	 */
	const __default = self::false;

	/**
	 * Default.
	 * Specifies that the element in not draggable
	 *
	 * @var string false = "false"
	 */
	const false = "false";

	/**
	 * Uses the default behavior of the browser
	 *
	 * @var string auto = "auto"
	 */
	const auto = "auto";

	/**
	 * Specifies that the element is draggable
	 *
	 * @var string true = "true"
	 */
	const true = "true";
}