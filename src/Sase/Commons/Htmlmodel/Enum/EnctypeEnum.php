<?php
/**
 * EnctypeEnum
 *
 * Enumeration used to validate values of enctype/formenctype Attribute's value
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
 * EnctypeEnum
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class EnctypeEnum extends Enum
{

	/**
	 * Default Value
	 *
	 * @var string __default = self::application
	 */
	const __default = self::application;

	/**
	 * Default.
	 * All characters will be encoded before sent
	 *
	 * @var string application = "application/x-www-form-urlencoded"
	 */
	const application = "application/x-www-form-urlencoded";

	/**
	 * No characters are encoded (use this when you are using forms that have a file upload control)
	 *
	 * @var string multipart = "multipart/form-data"
	 */
	const multipart = "multipart/form-data";

	/**
	 * Spaces are converted to "+" symbols, but no characters are encoded
	 *
	 * @var string text = "text/plain"
	 */
	const text = "text/plain";
}