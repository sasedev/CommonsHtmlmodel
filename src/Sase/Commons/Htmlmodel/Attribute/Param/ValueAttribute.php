<?php
/**
 * ValueAttribute
 *
 * value attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Param;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * ValueAttribute
 * <p>
 * For button, input and option elements, the value attribute specifies the initial value of the element.<br>
 * For li elements, the value attribute sets the value of an ordered list item.
 * The following list items will increment from that number.<br>
 * For progress elements, the value attribute specifies how much of the task has been completed.<br>
 * For param elements, the value attribute specifies the value of a &lt;param&gt; element.
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 8.0</li>
 * <li>Internet Explorer: 10.0</li>
 * <li>Firefox: 16.0</li>
 * <li>Opera: 11.0</li>
 * <li>Safari: 6.0</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class ValueAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "value"
	 */
	protected $KEY = "value";

	/**
	 * check the list of html elements that can add this Attribute
	 *
	 * @return string[]
	 */
	public function getAppliesTo()
	{
		$coveredElements = array(
			'param'
		);

		return $coveredElements;
	}
}