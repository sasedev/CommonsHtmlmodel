<?php
/**
 * FormnovalidateAttribute
 *
 * formnovalidate attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Button;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * FormnovalidateAttribute
 * <p>
 * The formnovalidate attribute is a boolean attribute.<br>
 * When present, it specifies that the form-data should not be validated on submission.<br>
 * This attribute overrides the form's novalidate attribute.<br>
 * The formnovalidate attribute is only used for buttons with type="submit".
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 6.0</li>
 * <li>Internet Explorer: 10.0</li>
 * <li>Firefox: 4.0</li>
 * <li>Opera: 10.6</li>
 * <li>Safari: Not supported</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class FormnovalidateAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "formnovalidate"
	 */
	protected $KEY = "formnovalidate";

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
			'button'
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