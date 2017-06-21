<?php
/**
 * OutputTag
 *
 * output element representation Class
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
 * OutputTag
 * <p>
 * The &lt;output&gt; tag represents the result of a calculation (like one performed by a script).
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>output {
 * display: inline;
 * }
 * </pre>
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 10.0</li>
 * <li>Internet Explorer: 13.0</li>
 * <li>Firefox: 4.0</li>
 * <li>Opera: 11.0</li>
 * <li>Safari: 5.1</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class OutputTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "output"
	 */
	protected $NAME = "output";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return OutputTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}