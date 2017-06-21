<?php
/**
 * PreloadEnum
 *
 * Enumeration used to validate values of preload Attribute's value
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
 * PreloadEnum
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class PreloadEnum extends Enum
{

	/**
	 * Default Value
	 *
	 * @var string __default = self::none
	 */
	const __default = self::none;

	/**
	 * The author thinks that the browser should NOT load the audio file when the page loads
	 *
	 * @var string none= "none"
	 */
	const none = "none";

	/**
	 * The author thinks that the browser should load only metadata when the page loads
	 *
	 * @var string metadata = "metadata"
	 */
	const metadata = "metadata";

	/**
	 * The author thinks that the browser should load the entire audio file when the page loads
	 *
	 * @var string auto = "auto"
	 */
	const auto = "auto";
}