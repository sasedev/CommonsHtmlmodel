<?php
/**
 * DatalistTag
 *
 * datalist element representation Class
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
 * DatalistTag
 * <p>
 * The &lt;datalist&gt; tag specifies a list of pre-defined options for an &lt;input&gt; element.<br>
 * The &lt;datalist&gt; tag is used to provide an "autocomplete" feature on &lt;input&gt; elements.
 * Users will see a drop-down list of pre-defined options as they input data.<br>
 * Use the &lt;input&gt; element's list attribute to bind it together with a &lt;datalist&gt; element.
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>datalist {
 * display: none;
 * }
 * </pre>
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 20.0</li>
 * <li>Internet Explorer: 10.0</li>
 * <li>Firefox: 4.0</li>
 * <li>Opera: 9.0</li>
 * <li>Safari: Not supported</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class DatalistTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "datalist"
	 */
	protected $NAME = "datalist";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return DatalistTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}