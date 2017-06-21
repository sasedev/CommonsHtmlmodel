<?php
/**
 * OptionTag
 *
 * option element representation Class
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
 * OptionTag
 * <p>
 * The &lt;option&gt; tag defines an option in a select list.<br>
 * &lt;option&gt; elements go inside a &lt;select&gt; or &lt;datalist&gt; element.<br>
 * Note: The &lt;option&gt; tag can be used without any attributes, but you usually need the value attribute, which indicates what is sent to the server.<br>
 * Tip: If you have a long list of options, you can group related options with the &lt;optgroup&gt; tag.
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
class OptionTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "option"
	 */
	protected $NAME = "option";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return OptionTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}