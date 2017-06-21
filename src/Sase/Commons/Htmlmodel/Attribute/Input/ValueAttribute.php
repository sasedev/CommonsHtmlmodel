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
namespace Sase\Commons\Htmlmodel\Attribute\Input;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * ValueAttribute
 * <p>
 * The value attribute specifies the value of an &lt;input&gt; element.<br>
 * The value attribute is used differently for different input types:
 * <ul>
 * <li>For "button", "reset", and "submit" - it defines the text on the button</li>
 * <li>For "text", "password", and "hidden" - it defines the initial (default) value of the input field</li>
 * <li>For "checkbox", "radio", "image" - it defines the value associated with the input (this is also the value that is sent on submit)</li>
 * </ul>
 * Note: The value attribute cannot be used with &lt;input type="file"&gt;.
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
class ValueAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "value"
	 */
	protected $KEY = "value";

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
}