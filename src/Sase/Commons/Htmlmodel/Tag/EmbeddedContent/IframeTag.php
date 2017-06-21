<?php
/**
 * IframeTag
 *
 * iframe element representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Tag\EmbeddedContent;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\AbstractTag;

/**
 * IframeTag
 * <p>
 * The &lt;iframe&gt; tag specifies an inline frame.<br>
 * An inline frame is used to embed another document within the current HTML document.<br>
 * Tip: To deal with browsers that do not support &lt;iframe&gt;, add a text between the opening &lt;iframe&gt; tag and the closing &lt;/iframe&gt; tag.<br>
 * Tip: Use CSS to style the &lt;iframe&gt; (even to include scrollbars).
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>iframe:focus {
 * outline: none;
 * }
 * iframe[seamless] {
 * display: block;
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
class IframeTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "iframe"
	 */
	protected $NAME = "iframe";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return IframeTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}