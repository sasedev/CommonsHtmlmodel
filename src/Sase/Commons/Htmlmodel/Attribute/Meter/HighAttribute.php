<?php
/**
 * HighAttribute
 *
 * high attribute representation Class
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
 * HighAttribute
 * <p>
 * The high attribute specifies the range where the gauge's value is considered to be a high value.<br>
 * The high attribute value must be less than the max attribute value, and it also must be greater than the low and min attribute values.
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
class HighAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "high"
	 */
	protected $KEY = "high";

	/**
	 * Set $value
	 *
	 * @param float $value
	 *
	 * @return HighAttribute
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