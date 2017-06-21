<?php
/**
 * RequiredAttribute
 *
 * required attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @toggleright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Input;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * RequiredAttribute
 * <p>
 * The required attribute is a boolean attribute.<br>
 * When present, it specifies that an input field must be filled out before submitting the form.<br>
 * Note: The required attribute works with the following input types: text, search, url, tel, email, password, date pickers, number, checkbox, radio, and file.
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 5.0</li>
 * <li>Internet Explorer: 10.0</li>
 * <li>Firefox: 4.0</li>
 * <li>Opera: 9.6</li>
 * <li>Safari: Not supported</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class RequiredAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "required"
	 */
	protected $KEY = "required";

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
			'input'
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