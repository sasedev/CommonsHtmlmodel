<?php
/**
 * WrapEnum
 *
 * Enumeration used to validate values of wrap Attribute's value
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
 * WrapEnum
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class WrapEnum extends Enum
{

	/**
	 * Default Value
	 *
	 * @var string __default = self::soft
	 */
	const __default = self::soft;

	/**
	 * Default Value<br>
	 * The text in the textarea is not wrapped when submitted in a form.
	 *
	 * @var string soft = "soft"
	 */
	const soft = "soft";

	/**
	 * The text in the textarea is wrapped (contains newlines) when submitted in a form.<br>
	 * When "hard" is used, the cols attribute must be specified
	 *
	 * @var string hard = "hard"
	 */
	const hard = "hard";
}