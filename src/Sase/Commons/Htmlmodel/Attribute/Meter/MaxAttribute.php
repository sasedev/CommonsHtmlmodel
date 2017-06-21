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
namespace Sase\Commons\Htmlmodel\Attribute\Meter;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * MaxAttribute
 * <p>
 * The max attribute specifies the upper bound of the gauge.<br>
 * The max attribute value must be greater than the min attribute value.<br>
 * If unspecified, the default value is 1.<br>
 * Tip: The max attribute, together with the min attribute, specifies the full range of the gauge.
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 8.0</li>
 * <li>Internet Explorer: Not supported</li>
 * <li>Firefox: 6.0</li>
 * <li>Opera: 11.0</li>
 * <li>Safari: 6.0</li>
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
	 * Set $value
	 *
	 * @param float $value
	 *        	= 1.0
	 * @return MaxAttribute
	 */
	public function setValue($value = 1.0)
	{
		if (!\is_numeric($value)) {
			throw new \Exception('the value must be an number');
		}

		return parent::setValue(\floatval($value));
	}

	/**
	 * check the list of html elements that can add this Attribute
	 *
	 * @return string[]
	 */
	public function getAppliesTo()
	{
		$coveredElements = array(
			'meter'
		);

		return $coveredElements;
	}
}