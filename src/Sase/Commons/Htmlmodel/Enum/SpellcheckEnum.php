<?php
/**
 * SpellcheckEnum
 *
 * Enumeration used to validate values of spellcheck Attribute's value
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
 * SpellcheckEnum
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class SpellcheckEnum extends Enum
{

	const __default = self::false;

	/**
	 * The element is not to be checked
	 *
	 * @var string false = "false"
	 */
	const false = "false";

	/**
	 * The element is to have its spelling and grammar checked
	 *
	 * @var string true = "true"
	 */
	const true = "true";
}