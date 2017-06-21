<?php

/**
 * MetaTag
 *
 * meta element representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Tag\Metadata;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\AbstractTag;

/**
 * MetaTag
 * <p>
 * Metadata is data (information) about data.
 * The &lt;meta&gt; tag provides metadata about the HTML document. Metadata will not be displayed on the page, but will be machine parsable.<br>
 * Meta elements are typically used to specify page description, keywords, author of the document, last modified, and other metadata.
 * The metadata can be used by browsers (how to display content or reload page), search engines (keywords), or other web services.<br>
 * HTML5 introduced a method to let web designers take control over the viewport (the user's visible area of a web page), through the &lt;meta&gt; tag<br>
 * Note: &lt;meta&gt; tags always go inside the &lt;head&gt; element.<br>
 * Note: Metadata is always passed as name/value pairs.<br>
 * Note: The content attribute MUST be defined if the name or the http-equiv attribute is defined. If none of these are defined, the content attribute CANNOT be defined.<br>
 * Note: This element goes only in the head section, but it can appear any number of times.
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * None.
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
class MetaTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "meta"
	 */
	protected $NAME = "meta";

	/**
	 * Self closing html element
	 *
	 * @var bool
	 */
	protected $IS_EMPTYtrue;

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return MetaTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}