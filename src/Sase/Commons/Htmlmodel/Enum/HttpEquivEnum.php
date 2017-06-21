<?php
/**
 * HttpEquivEnum
 *
 * Enumeration used to validate values of http-equiv Attribute's value
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
 * HttpEquivEnum
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class HttpEquivEnum extends Enum
{

	/**
	 * Specifies the character encoding for the document.
	 *
	 * @var string contenttype = "content-type"
	 */
	const contenttype = "content-type";

	/**
	 * Specified the preferred style sheet to use.
	 *
	 * @var defaultstyle = "default-style"
	 */
	const defaultstyle = "default-style";

	/**
	 * Defines a time interval for the document to refresh itself.<br>
	 * Note: The value "refresh" should be used carefully, as it takes the control of a page away from the user.<br>
	 * Using "refresh" will cause a failure in W3C's Web Content Accessibility Guidelines.
	 *
	 * @var string refresh = "refresh"
	 */
	const refresh = "refresh";
}