<?php
/**
 * FieldsetTag
 *
 * fieldset element representation Class
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
 * FieldsetTag
 * <p>
 * The &lt;fieldset&gt; tag is used to group related elements in a form.<br>
 * The &lt;fieldset&gt; tag draws a box around the related elements.<br>
 * Tip: The &lt;legend&gt; tag defines a caption for the &lt;fieldset&gt; element.
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>fieldset {
 * display: block;
 * margin-left: 2px;
 * margin-right: 2px;
 * padding-top: 0.35em;
 * padding-bottom: 0.625em;
 * padding-left: 0.75em;
 * padding-right: 0.75em;
 * border: 2px groove (internal value);
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
class FieldsetTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "fieldset"
	 */
	protected $NAME = "fieldset";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return FieldsetTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}