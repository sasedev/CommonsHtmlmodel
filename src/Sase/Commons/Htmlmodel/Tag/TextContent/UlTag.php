<?php
/**
 * UlTag
 *
 * ul element representation Class
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
 * UlTag
 * <p>
 * The &lt;ul&gt; tag defines an unordered (bulleted) list.<br>
 * Use the &lt;ul&gt; tag together with the &lt;li&gt; tag to create unordered lists.<br>
 * Tip: Use CSS to style lists.<br>
 * Tip: To create ordered lists, use the &lt;ol&gt; tag.
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>ul {
 * display: block;
 * list-style-type: disc;
 * margin-top: 1em;
 * margin-bottom: 1 em;
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
class UlTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "ul"
	 */
	protected $NAME = "ul";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return UlTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}