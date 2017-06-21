<?php
/**
 * SandboxEnum
 *
 * Enumeration used to validate values of sandbox Attribute's value for iframe element
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
 * SandboxEnum
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class SandboxEnum extends Enum
{

	/**
	 * Default Value
	 *
	 * @var string __default = self::none
	 */
	const __default = self::none;

	/**
	 * Default.
	 * (no value) Applies all restrictions
	 *
	 * @var string none = ""
	 */
	const none = "";

	/**
	 * Re-enables form submission
	 *
	 * @var string allowforms = "allow-forms"
	 */
	const allowforms = "allow-forms";

	/**
	 * Re-enables APIs
	 *
	 * @var string allowpointerlock = "allow-pointer-lock"
	 */
	const allowpointerlock = "allow-pointer-lock";

	/**
	 * Re-enables popups
	 *
	 * @var string allowpopups = "allow-popups"
	 */
	const allowpopups = "allow-popups";

	/**
	 * Allows the iframe content to be treated as being from the same origin
	 *
	 * @var string allowsameorigin = "allow-same-origin"
	 */
	const allowsameorigin = "allow-same-origin";

	/**
	 * Re-enables scripts
	 *
	 * @var string allowscripts = "allow-scripts"
	 */
	const allowscripts = "allow-scripts";

	/**
	 * Allows the iframe content to navigate its top-level browsing context
	 *
	 * @var string allowtopnavigation = "allow-top-navigation"
	 */
	const allowtopnavigation = "allow-top-navigation";
}