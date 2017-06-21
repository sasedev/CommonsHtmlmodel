<?php
/**
 * MenutypeEnum
 *
 * Enumeration used to validate values of type Attribute's value for menu element
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
 * MenutypeEnum
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class MenutypeEnum extends Enum
{

	/**
	 * Default Value
	 *
	 * @var string __default = self::list
	 */
	const __default = self::list;

	/**
	 * Default.<br>
	 * Specifies a list menu.<br>
	 * A list of commands (li elements), that the user can perform or activate
	 *
	 * @var string list = "list"
	 */
	const list = "list";

	/**
	 * Specifies a context menu.<br>
	 * The menu must be activated before the user can interact with the commands
	 *
	 * @var string context = "context"
	 */
	const context = "context";

	/**
	 * Specifies a toolbar menu.<br>
	 * Active commands, allows the user to interact with the commands immediately
	 *
	 * @var string toolbar = "toolbar"
	 */
	const toolbar = "toolbar";
}