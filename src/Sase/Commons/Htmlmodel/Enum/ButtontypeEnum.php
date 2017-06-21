<?php
/**
 * ButtontypeEnum
 *
 * Enumeration used to validate values of button Attribute's value
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
 * ButtontypeEnum
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class ButtontypeEnum extends Enum
{

	/**
	 * Default Value
	 *
	 * @var string __default = self::button
	 */
	const __default = self::button;

	/**
	 * Default.
	 * The button is a clickable button
	 *
	 * @var string button = "button"
	 */
	const button = "button";

	/**
	 * The button is a submit button (submits form-data)
	 *
	 * @var submit = "submit"
	 */
	const submit = "submit";

	/**
	 * The button is a reset button (resets the form-data to its initial values)
	 *
	 * @var string reset = "reset"
	 */
	const reset = "reset";
}