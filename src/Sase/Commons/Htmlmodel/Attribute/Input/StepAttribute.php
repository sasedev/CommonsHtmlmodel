<?php
/**
 * StepAttribute
 *
 * step attribute representation Class
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
 * StepAttribute
 * <p>
 * The step attribute specifies the legal number intervals for an &lt;input&gt; element.<br>
 * Example: if step="3", legal numbers could be -3, 0, 3, 6, etc.<br>
 * Tip: The step attribute can be used together with the max and min attributes to create a range of legal values.<br>
 * Note: The step attribute works with the following input types: number, range, date, datetime, datetime-local, month, time and week.
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
class StepAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "accept"
	 */
	protected $KEY = "step";

	/**
	 * Set $value
	 *
	 * @param int|float $value
	 *
	 * @return StepAttribute
	 */
	public function setValue($value)
	{
		$this->value = $value;

		return $this;
	}

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