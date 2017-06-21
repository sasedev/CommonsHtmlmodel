<?php
/**
 * RelAttribute
 *
 * rel attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @toggleright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Link;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\Enum\RelEnum;

/**
 * RelAttribute
 * <p>
 * The rel attribute specifies the relationship between the current document and the linked document.<br>
 * Tip: Search engines can use this attribute to get more information about a link.<br>
 * Possibles values are:
 * <ul>
 * <li>alternate : Provides a link to an alternate representation of the document (i.e. print page, translated or mirror)</li>
 * <li>author : Provides a link to the author of the document</li>
 * <li>bookmark : Permanent URL used for bookmarking</li>
 * <li>external : Indicates that the referenced document is not part of the same site as the current document</li>
 * <li>help : Provides a link to a help document</li>
 * <li>license : Provides a link to copyright information for the document</li>
 * <li>next : Provides a link to the next document in the series</li>
 * <li>nofollow : Links to an unendorsed document, like a paid link. ("nofollow" is used by Google, to specify that the Google search spider should not follow that link)</li>
 * <li>noreferrer : Requires that the browser should not send an HTTP referer header if the user follows the hyperlink</li>
 * <li>noopener : Requires that any browsing context created by following the hyperlink must not have an opener browsing context</li>
 * <li>prev : The previous document in a selection</li>
 * <li>search : Links to a search tool for the document</li>
 * <li>tag : A tag (keyword) for the current document</li>
 * </ul>
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: Yes</li>
 * <li>Internet Explorer: Yes</li>
 * <li>Firefox: Yes</li>
 * <li>Opera: Yes</li>
 * <li>Safari: Yes</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class RelAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "rel"
	 */
	protected $KEY = "rel";

	/**
	 * Set $value
	 *
	 * @param RelEnum $value
	 *
	 * @return RelAttribute
	 */
	public function setValue(RelEnum $value)
	{
		$this->value = $value;

		return $this;
	}

	/**
	 * check the list of html elements that can add this Attribute
	 *
	 * @return string[]
	 */
	public function getAppliesTo()
	{
		$coveredElements = array(
			'link'
		);

		return $coveredElements;
	}
}