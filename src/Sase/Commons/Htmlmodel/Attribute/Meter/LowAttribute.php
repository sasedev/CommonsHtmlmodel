<?php
/**
 * LowAttribute
 *
 * low attribute representation Class
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
 * LowAttribute
 * <p>
 * The low attribute specifies the range where the gauge's value is considered to be a low value.<br>
 * The low attribute value must be greater than the min attribute value, and it also must be less than the high and max attribute values.
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
class LowAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "low"
	 */
	protected $KEY = "low";

	/**
	 * Set $value
	 *
	 * @param float $value
	 *
	 * @return LowAttribute
	 */
	public function setValue($value)
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