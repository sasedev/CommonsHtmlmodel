<?php
/**
 * MultipleAttribute
 *
 * multiple attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Select;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * MultipleAttribute
 * <p>
 * The multiple attribute is a boolean attribute.<br>
 * When present, it specifies that multiple options can be selected at once.<br>
 * Selecting multiple options vary in different operating systems and browsers:
 * <ul>
 * <li>For windows: Hold down the control (ctrl) button to select multiple options</li>
 * <li>For Mac: Hold down the command button to select multiple options</li>
 * </ul>
 * Because of the different ways of doing this, and because you have to inform the user that multiple selection is available, it is more user-friendly to use checkboxes instead.
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
class MultipleAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "multiple"
	 */
	protected $KEY = "multiple";

	/**
	 * Contructor
	 */
	public function __construct()
	{
	}

	/**
	 * Set $value
	 *
	 * @param mixed $value
	 *
	 * @throws \Exception
	 */
	public function setValue($value)
	{
		throw new \Exception('No values are accepted for this attribute');
	}

	/**
	 * check the list of html elements that can add this Attribute
	 *
	 * @return string[]
	 */
	public function getAppliesTo()
	{
		$coveredElements = array(
			'select'
		);

		return $coveredElements;
	}

	/**
	 * Default string representation
	 */
	public function __toString()
	{
		return $this->getKey();
	}
}