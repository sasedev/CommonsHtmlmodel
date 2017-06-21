<?php
/**
 * OptimumAttribute
 *
 * optimum attribute representation Class
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
 * OptimumAttribute
 * <p>
 * The optimum attribute specifies the range where the gauge's value is considered to be an optimal value.
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
class OptimumAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "optimum"
	 */
	protected $KEY = "optimum";

	/**
	 * Set $value
	 *
	 * @param float $value
	 *
	 * @return OptimumAttribute
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