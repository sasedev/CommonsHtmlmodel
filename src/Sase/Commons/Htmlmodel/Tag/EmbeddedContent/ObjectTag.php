<?php
/**
 * ObjectTag
 *
 * object element representation Class
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
 * ObjectTag
 * <p>
 * The &lt;object&gt; tag defines an embedded object within an HTML document.<br>
 * Use this element to embed multimedia (like audio, video, Java applets, ActiveX, PDF, and Flash) in your web pages.<br>
 * You can also use the &lt;object&gt; tag to embed another webpage into your HTML document.<br>
 * You can use the &lt;param&gt; tag to pass parameters to plugins that have been embedded with the &lt;object&gt; tag<br>
 * Note: An &lt;object&gt; element must appear inside the &lt;body&gt; element.<br>
 * The text between the &lt;object&gt; and &lt;/object&gt; is an alternate text, for browsers that do not support this tag.<br>
 * Tip: For images use the &lt;img&gt; tag instead of the &lt;object&gt; tag.<br>
 * Tip: At least one of the "data" or "type" attribute MUST be defined.
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>object:focus {
 * outline: none;
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
class ObjectTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "object"
	 */
	protected $NAME = "object";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return ObjectTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}