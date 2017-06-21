<?php
/**
 * MaxAttribute
 *
 * max attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Input;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * MaxAttribute
 * <p>
 * The max attribute specifies the maximum value of an &lt;input&gt; element.<br>
 * Tip: Use the max attribute together with the min attribute to create a range of legal values.<br>
 * Note: The max and min attributes works with the following input types: number, range, date, datetime, datetime-local, month, time and week.
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 5.0</li>
 * <li>Internet Explorer: 10.0</li>
 * <li>Firefox: 16.0</li>
 * <li>Opera: 10.6</li>
 * <li>Safari: 5.1</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class MaxAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "max"
	 */
	protected $KEY = "max";

	/**
	 * check the list of html elements that can add this Attribute
	 *
	 * @return string[]
	 */
	public function getAppliesTo()
	{
		$coveredElements = array(
			'input'
		);

		return $coveredElements;
	}
}