<?php
/**
 * TranslateEnum
 *
 * Enumeration used to validate values of translate Attribute's value
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
 * TranslateEnum
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class TranslateEnum extends Enum
{

	/**
	 * Specifies that the content of the element should not be translated
	 *
	 * @var string no = "no"
	 */
	const no = "no";

	/**
	 * Specifies that the content of the element should be translated
	 *
	 * @var string yes = "yes"
	 */
	const yes = "yes";
}