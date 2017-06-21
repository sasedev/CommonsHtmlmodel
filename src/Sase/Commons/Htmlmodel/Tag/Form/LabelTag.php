<?php
/**
 * LabelTag
 *
 * label element representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Tag\Form;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\AbstractTag;

/**
 * LabelTag
 * <p>
 * The &lt;label&gt; tag defines a label for an &lt;input&gt; element.<br>
 * The &lt;label&gt; element does not render as anything special for the user.<br>
 * However, it provides a usability improvement for mouse users, because if the user clicks on the text within the &lt;label&gt; element, it toggles the control.<br>
 * The for attribute of the &lt;label&gt; tag should be equal to the id attribute of the related element to bind them together.<br>
 * Tip: A label can be bound to an element either by using the "for" attribute, or by placing the element inside the &lt;label&gt; element.
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>label {
 * cursor: default;
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
class LabelTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "label"
	 */
	protected $NAME = "label";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return LabelTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}