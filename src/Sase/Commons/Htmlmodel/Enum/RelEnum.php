<?php
/**
 * RelEnum
 *
 * Enumeration used to validate values of rel Attribute's value (link)
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
 * RelEnum
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class RelEnum extends Enum
{

	/**
	 * Provides a link to an alternate version of the document (i.e.
	 * print page, translated or mirror).
	 *
	 * @var string alternate = "alternate"
	 */
	const alternate = "alternate";

	/**
	 * Provides a link to the author of the document
	 *
	 * @var string author = "author"
	 */
	const author = "author";

	/**
	 * Specifies that the browser should preemptively perform DNS resolution for the target resource's origin
	 *
	 * @var string dnsprefetch = "dns-prefetch"
	 */
	const dnsprefetch = "dns-prefetch";

	/**
	 * Provides a link to a help document.<br>
	 * Example: &lt;link rel="help" href="/help/"&gt;
	 *
	 * @var string help = "help"
	 */
	const help = "help";

	/**
	 * Imports an icon to represent the document.<br>
	 * Example: &lt;link rel="icon" href="/favicon.ico" type="image/x-icon"&gt;
	 *
	 * @var string icon = "icon"
	 */
	const icon = "icon";

	/**
	 * Provides a link to copyright information for the document
	 *
	 * @var string license = "license"
	 */
	const license = "license";

	/**
	 * Provides a link to the next document in the series
	 *
	 * @var string next = "next"
	 */
	const next = "next";

	/**
	 * Provides the address of the pingback server that handles pingbacks to the current document
	 *
	 * @var string pingback = "pingback"
	 */
	const pingback = "pingback";

	/**
	 * Specifies that the browser should preemptively connect to the target resource's origin.
	 *
	 * @var string preconnect = "preconnect"
	 */
	const preconnect = "preconnect";

	/**
	 * Specifies that the browser should preemptively fetch and cache the target resource as it is likely to be required for a follow-up navigation
	 *
	 * @var string prefetch = "prefetch"
	 */
	const prefetch = "prefetch";

	/**
	 * Specifies that the browser agent must preemptively fetch and cache the target resource for current navigation according to the destination given by the "as" attribute (and the priority associated with that destination).
	 *
	 * @var string preload = "preload"
	 */
	const preload = "preload";

	/**
	 * Indicates that the document is a part of a series, and that the previous document in the series is the referenced document
	 *
	 * @var string prev = "prev"
	 */
	const prev = "prev";

	/**
	 * Provides a link to a resource that can be used to search through the current document and its related pages.
	 *
	 * @var string search = "search"
	 */
	const search = "search";

	/**
	 * Imports a style sheet
	 *
	 * @var string stylesheet = "stylesheet"
	 */
	const stylesheet = "stylesheet";
}