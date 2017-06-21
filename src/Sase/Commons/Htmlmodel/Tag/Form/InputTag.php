<?php
/**
 * InputTag
 *
 * input element representation Class
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
 * InputTag
 * <p>
 * The &lt;input&gt; tag specifies an input field where the user can enter data.<br>
 * &lt;input&gt; elements are used within a &lt;form&gt; element to declare input controls that allow users to input data.<br>
 * An input field can vary in many ways, depending on the type attribute.<br>
 * Note: The &lt;input&gt; element is empty, it contains attributes only.<br>
 * Tip: Use the &lt;label&gt; element to define labels for &lt;input&gt; elements.
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
class InputTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "input"
	 */
	protected $NAME = "input";

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
	 * @return InputTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}