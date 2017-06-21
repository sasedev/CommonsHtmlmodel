<?php
/**
 * ButtonTag
 *
 * button element representation Class
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
 * ButtonTag
 * <p>
 * The &lt;button&gt; tag defines a clickable button.<br>
 * Inside a &lt;button&gt; element you can put content, like text or images.<br>
 * This is the difference between this element and buttons created with the &lt;input&gt; element.<br>
 * Tip: Always specify the type attribute for a &lt;button&gt; element. Different browsers use different default types for the &lt;button&gt; element.<br>
 * Note: If you use the &lt;button&gt; element in an HTML form, different browsers may submit different values.<br>
 * Use &lt;input&gt; to create buttons in an HTML form.
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
class ButtonTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "button"
	 */
	protected $NAME = "button";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return ButtonTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}