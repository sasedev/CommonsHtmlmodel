<?php
/**
 * FormTag
 *
 * form element representation Class
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
 * FormTag
 * <p>
 * The &lt;form&gt; tag is used to create an HTML form for user input.<br>
 * The &lt;form&gt; element can contain one or more of the following form elements:
 * <ul>
 * <li>&lt;input&gt;</li>
 * <li>&lt;textarea&gt;</li>
 * <li>&lt;button&gt;</li>
 * <li>&lt;select&gt;</li>
 * <li>&lt;option&gt;</li>
 * <li>&lt;optgroup&gt;</li>
 * <li>&lt;fieldset&gt;</li>
 * <li>&lt;label&gt;</li>
 * </ul>
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>form {
 * display: block;
 * margin-top: 0em;
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
class FormTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "form"
	 */
	protected $NAME = "form";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return FormTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}