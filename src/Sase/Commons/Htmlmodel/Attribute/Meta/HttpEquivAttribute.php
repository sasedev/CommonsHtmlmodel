<?php
/**
 * HttpEquivAttribute
 *
 * http-equiv attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Meta;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\Enum\HttpEquivEnum;

/**
 * HttpEquivAttribute
 * <p>
 * The http-equiv attribute provides an HTTP header for the information/value of the content attribute.<br>
 * The http-equiv attribute can be used to simulate an HTTP response header.
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
class HttpEquivAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "http-equiv"
	 */
	protected $KEY = "http-equiv";

	/**
	 * Set $value
	 *
	 * @param HttpEquivEnum $value
	 *
	 * @return HttpEquivAttribute
	 */
	public function setValue($value)
	{
		if (!$value instanceof HttpEquivEnum) {
			throw new \Exception("use Sase\Commons\Htmlmodel\Enum\HttpEquivEnum value");
		}

		return parent::setValue($value->getValue());
	}

	/**
	 * check the list of html elements that can add this Attribute
	 *
	 * @return string[]
	 */
	public function getAppliesTo()
	{
		$coveredElements = array(
			'meta'
		);

		return $coveredElements;
	}
}