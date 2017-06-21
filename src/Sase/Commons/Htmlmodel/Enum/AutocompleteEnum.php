<?php
/**
 * AutocompleteEnum
 *
 * Enumeration used to validate values of autocomplete Attribute's value
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
 * AutocompleteEnum
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class AutocompleteEnum extends Enum
{

	/**
	 * Default Value
	 *
	 * @var string __default = self::on
	 */
	const __default = self::on;

	/**
	 * Default.
	 * Specifies that autocomplete is on (enabled)
	 *
	 * @var string on = "on"
	 */
	const on = "on";

	/**
	 * Specifies that autocomplete is off (disabled)
	 *
	 * @var string off = "off"
	 */
	const off = "off";
}