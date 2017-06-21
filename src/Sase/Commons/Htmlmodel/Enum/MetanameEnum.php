<?php
/**
 * MetanameEnum
 *
 * Enumeration used to validate values of button Attribute's value
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
 * MetanameEnum
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class MetanameEnum extends Enum
{

	/**
	 * Specifies the name of the Web application that the page represents
	 *
	 * @var string applicationname = "application-name"
	 */
	const applicationname = "application-name";

	/**
	 * Specifies the name of the author of the document.
	 *
	 * @var author = "author"
	 */
	const author = "author";

	/**
	 * Specifies a description of the page.<br>
	 * Search engines can pick up this description to show with the results of searches.
	 *
	 * @var string description = "description"
	 */
	const description = "description";

	/**
	 * Specifies one of the software packages used to generate the document (not used on hand-authored pages).
	 *
	 * @var generator = "generator"
	 */
	const generator = "generator";

	/**
	 * Specifies a comma-separated list of keywords - relevant to the page (Informs search engines what the page is about).<br>
	 * Tip: Always specify keywords (needed by search engines to catalogize the page).
	 *
	 * @var keywords = "keywords"
	 */
	const keywords = "keywords";

	/**
	 * Controls the viewport (the user's visible area of a web page).<br>
	 * The viewport varies with the device, and will be smaller on a mobile phone than on a computer screen.<br>
	 * You should include the following &lt;meta&gt; viewport element in all your web pages:<br>
	 * <code>&lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;</code><br>
	 * A &lt;meta&gt; viewport element gives the browser instructions on how to control the page's dimensions and scaling.<br>
	 * The width=device-width part sets the width of the page to follow the screen-width of the device (which will vary depending on the device).<br>
	 * The initial-scale=1.0 part sets the initial zoom level when the page is first loaded by the browse
	 *
	 * @var viewport = "viewport"
	 */
	const viewport = "viewport";
}