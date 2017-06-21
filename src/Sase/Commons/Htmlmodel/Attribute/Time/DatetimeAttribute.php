<?php
/**
 * DatetimeAttribute
 *
 * datetime attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Time;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * DatetimeAttribute
 * <p>
 * The datetime attribute represent the machine-readable date/time of the &lt;time&gt; element.
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
class DatetimeAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "datetime"
	 */
	protected $KEY = "datetime";

	/**
	 * Set $value
	 *
	 * @param string $value
	 *
	 * @throws \Exception
	 *
	 * @return DatetimeAttribute
	 */
	public function setValue(string $value)
	{
		if (\preg_match('/^([\+-]?\d{4}(?!\d{2}\b))((-?)((0[1-9]|1[0-2])(\3([12]\d|0[1-9]|3[01]))?|W([0-4]\d|5[0-2])(-?[1-7])?|(00[1-9]|0[1-9]\d|[12]\d{2}|3([0-5]\d|6[1-6])))([T\s]((([01]\d|2[0-3])((:?)[0-5]\d)?|24\:?00)([\.,]\d+(?!:))?)?(\17[0-5]\d([\.,]\d+)?)?([zZ]|([\+-])([01]\d|2[0-3]):?([0-5]\d)?)?)?)?$/', $value)) {
			throw new \Exception('the value must be a valid iso 8601 date/datetime');
		}
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
			'time'
		);

		return $coveredElements;
	}
}