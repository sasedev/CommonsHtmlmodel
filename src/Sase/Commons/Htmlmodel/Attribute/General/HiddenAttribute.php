<?php
/**
 * HiddenAttribute
 *
 * hidden attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\General;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * HiddenAttribute
 * <p>
 * The hidden attribute is a boolean attribute.<br>
 * When present, it specifies that an element is not yet, or is no longer, relevant.<br>
 * Browsers should not display elements that have the hidden attribute specified.<br>
 * The hidden attribute can also be used to keep a user from seeing an element until some other condition has been met (like selecting a checkbox, etc.). Then, a JavaScript could remove the hidden attribute, and make the element visible.
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 6.0</li>
 * <li>Internet Explorer: 11.0</li>
 * <li>Firefox: 4.0</li>
 * <li>Opera: 11.1</li>
 * <li>Safari: 5.1</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class HiddenAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "hidden"
	 */
	protected $KEY = "hidden";

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
	 * Default string representation
	 */
	public function __toString()
	{
		return $this->getKey();
	}

	/**
	 * check the list of html elements that can add this Attribute
	 *
	 * @return string[]
	 */
	public function getAppliesTo()
	{
		$coveredElements = array(
			'general'
		);

		return $coveredElements;
	}
}