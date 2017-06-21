<?php
/**
 * TitleTag
 *
 * title element representation Class
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
 * TitleTag
 * <p>
 * The &lt;title&gt; tag is required in all HTML documents and it defines the title of the document.<br>
 * The &lt;title&gt; element :
 * <ul>
 * <li>defines a title in the browser toolbar</li>
 * <li>provides a title for the page when it is added to favorites</li>
 * <li>displays a title for the page in search-engine results</li>
 * </ul>
 * Note: You can NOT have more than one &lt;title&gt; element in an HTML document.<br>
 * Tip: If you omit the &lt;title&gt; tag, the document will not validate as HTML.
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>title {
 * display: none;
 * }
 * </pre>
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
class TitleTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "title"
	 */
	protected $NAME = "title";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return TitleTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}