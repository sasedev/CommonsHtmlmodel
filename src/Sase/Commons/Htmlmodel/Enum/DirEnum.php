<?php
/**
 * DirEnum
 *
 * Enumeration used to validate values of dir Attribute's value
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
 * DirEnum
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class DirEnum extends Enum
{

	/**
	 * Default Value
	 *
	 * @var string __default = self::ltr
	 */
	const __default = self::ltr;

	/**
	 * Let the browser figure out the text direction, based on the content (only recommended if the text direction is unknown)
	 *
	 * @var string auto = "auto"
	 */
	const auto = "auto";

	/**
	 * Default.
	 * Left-to-right text direction
	 *
	 * @var string ltr = "ltr"
	 */
	const ltr = "ltr";

	/**
	 * Right-to-left text direction
	 *
	 * @var string ltr = "ltr"
	 */
	const rtl = "rtl";
}