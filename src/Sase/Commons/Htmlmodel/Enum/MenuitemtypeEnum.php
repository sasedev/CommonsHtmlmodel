<?php
/**
 * MenuitemtypeEnum
 *
 * Enumeration used to validate values of type Attribute's value for menuitem element
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
 * MenuitemtypeEnum
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class MenuitemtypeEnum extends Enum
{

	/**
	 * Default Value
	 *
	 * @var string __default = self::command
	 */
	const __default = self::command;

	/**
	 * Default.<br>
	 * Specifies a normal command with an action
	 *
	 * @var string command = "command"
	 */
	const command = "command";

	/**
	 * Specifies a command that can be toggled using a checkbox
	 *
	 * @var string checkbox = "checkbox"
	 */
	const checkbox = "checkbox";

	/**
	 * Specifies a command that can be toggled using a radio button
	 *
	 * @var string radio = "radio"
	 */
	const radio = "radio";
}