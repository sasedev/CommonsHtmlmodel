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
namespace Sase\Commons\Htmlmodel\Attribute\Progress;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * ValueAttribute
 * <p>
 * The value attribute specifies how much of the task has been completed.
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
	 * Set $value
	 *
	 * @param float $value
	 *
	 * @return ValueAttribute
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
			'progress'
		);

		return $coveredElements;
	}
}