<?php
/**
 * MinAttribute
 *
 * min attribute representation Class
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
 * MinAttribute
 * <p>
 * The min attribute specifies the lower bound of the gauge.<br>
 * The min attribute value must be less than the max attribute value.<br>
 * If unspecified, the default value is 0.<br>
 * Tip: The min attribute, together with the max attribute, specifies the full range of the gauge.
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
class MinAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "min"
	 */
	protected $KEY = "min";

	/**
	 * Set $value
	 *
	 * @param float $value
	 *        	= 0
	 * @return MinAttribute
	 */
	public function setValue($value = 0)
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