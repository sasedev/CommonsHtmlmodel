<?php
/**
 * ContenteditableEnum
 *
 * Enumeration used to validate values of contenteditable Attribute's value
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
 * ContenteditableEnum
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class ContenteditableEnum extends Enum
{

	/**
	 * Default Value
	 *
	 * @var string __default = self::false
	 */
	const __default = self::false;

	/**
	 * Default.
	 * Specifies that the element is not editable
	 *
	 * @var string false = "false"
	 */
	const false = "false";

	/**
	 * Specifies that the element is editable
	 *
	 * @var string true = "true"
	 */
	const true = "true";
}