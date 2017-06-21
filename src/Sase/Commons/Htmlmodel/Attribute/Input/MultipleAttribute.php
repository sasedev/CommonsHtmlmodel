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
namespace Sase\Commons\Htmlmodel\Attribute\Input;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * MultipleAttribute
 * <p>
 * The multiple attribute is a boolean attribute.<br>
 * When present, it specifies that the user is allowed to enter more than one value in the &lt;input&gt; element.<br>
 * Note: The multiple attribute works with the following input types: email, and file.
 * Tip: For &lt;input type="file"&gt: to select multiple files, hold down the CTRL or SHIFT key while selecting.
 * Tip: For &lt;input type="email"&gt: separate each email with a comma, like: mail@example.com, mail2@example.com, mail3@example.com in the email field.
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 6.0</li>
 * <li>Internet Explorer: 10.0</li>
 * <li>Firefox: 3.6</li>
 * <li>Opera: 11.0</li>
 * <li>Safari: 5.0</li>
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