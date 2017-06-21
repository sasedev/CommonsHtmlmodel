<?php
/**
 * OltypeEnum
 *
 * Enumeration used to validate values of type Attribute's value
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
 * OltypeEnum
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class OltypeEnum extends Enum
{

	/**
	 * Default Value
	 *
	 * @var string __default = self::number
	 */
	const __default = self::number;

	/**
	 * Default.
	 * Decimal numbers (1, 2, 3, 4)
	 *
	 * @var string number = "1"
	 */
	const number = "1";

	/**
	 * Alphabetically ordered list, lowercase (a, b, c, d)
	 *
	 * @var string lowercase = "a"
	 */
	const lowercase = "a";

	/**
	 * Alphabetically uppercase list, uppercase (A, B, C, D)
	 *
	 * @var string uppercase = "A"
	 */
	const uppercase = "A";

	/**
	 * Roman numbers, lowercase (i, ii, iii, iv)
	 *
	 * @var string roman_lowercase = "a"
	 */
	const roman_lowercase = "a";

	/**
	 * Roman numbers, uppercase (I, II, III, IV)
	 *
	 * @var string roman_uppercase = "A"
	 */
	const roman_uppercase = "A";
}