<?php
/**
 * MaxlengthAttribute
 *
 * maxlength attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Textarea;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * MaxlengthAttribute
 * <p>
 * The maxlength attribute specifies the maximum length (in characters) of a text area.
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: Yes</li>
 * <li>Internet Explorer: 10.0</li>
 * <li>Firefox: 4.0</li>
 * <li>Opera: 15.0</li>
 * <li>Safari: Yes</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class MaxlengthAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "maxlength"
	 */
	protected $KEY = "maxlength";

	/**
	 * Set $value
	 *
	 * @param int $value
	 *
	 * @return MaxlengthAttribute
	 */
	public function setValue($value)
	{
		if (!\is_numeric($value) || $value != \round($value, 0)) {
			throw new \Exception('the value must be an integer');
		}

		return parent::setValue(\intval($value));
	}

	/**
	 * check the list of html elements that can add this Attribute
	 *
	 * @return string[]
	 */
	public function getAppliesTo()
	{
		$coveredElements = array(
			'textarea'
		);

		return $coveredElements;
	}
}