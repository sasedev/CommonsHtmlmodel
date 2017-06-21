<?php
/**
 * CheckedAttribute
 *
 * checked attribute representation Class
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
 * CheckedAttribute
 * <p>
 * The checked attribute is a boolean attribute.<br>
 * When present, it specifies that an &lt;input&gt; element should be pre-selected (checked) when the page loads.<br>
 * The checked attribute can be used with &lt;input type="checkbox"&gt; and &lt;input type="radio"&gt;.<br>
 * The checked attribute can also be set after the page load, with a JavaScript.
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 1.0</li>
 * <li>Internet Explorer: 2.0</li>
 * <li>Firefox: 1.0</li>
 * <li>Opera: 1.0</li>
 * <li>Safari: 1.0</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class CheckedAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "checked"
	 */
	protected $KEY = "checked";

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