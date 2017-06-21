<?php
/**
 * OlTag
 *
 * ol element representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Tag\TextContent;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\AbstractTag;

/**
 * OlTag
 * <p>
 * The &lt;ol&gt; tag defines an ordered list.<br>
 * An ordered list can be numerical or alphabetical.<br>
 * Use the &lt;li&gt; tag to define list items.<br>
 * Tip: For unordered list, use the &lt;ul&gt; tag.<br>
 * Tip: Use CSS to style lists.
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>ol {
 * display: block;
 * list-style-type: decimal;
 * margin-top: 1em;
 * margin-bottom: 1em;
 * margin-left: 0;
 * margin-right: 0;
 * padding-left: 40px;
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
class OlTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "ol"
	 */
	protected $NAME = "ol";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return OlTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}