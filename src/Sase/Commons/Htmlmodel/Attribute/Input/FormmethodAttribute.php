<?php
/**
 * FormmethodAttribute
 *
 * formmethod attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Input;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\Enum\MethodEnum;

/**
 * FormmethodAttribute
 * <p>
 * The formmethod attribute specifies which HTTP method to use when sending the form-data.<br>
 * This attribute overrides the form's method attribute.<br>
 * Note: The formmethod attribute can be used with type="submit" and type="image".<br>
 * The form-data can be sent as URL variables (method="get") or as an HTTP post transaction (method="post").
 * </p>
 * <p>
 * Notes on GET:
 * <ul>
 * <li>This method appends the form-data to the URL in name/value pairs</li>
 * <li>This method is useful for form submissions where a user want to bookmark the result</li>
 * <li>There is a limit to how much data you can place in a URL (varies between browsers), therefore, you cannot be sure that all of the form-data will be correctly transferred</li>
 * <li>Never use the "get" method to pass sensitive information! (password or other sensitive information will be visible in the browser's address bar)</li>
 * </ul>
 * </p>
 * <p>
 * Notes on POST:
 * <ul>
 * <li>This method sends the form-data as an HTTP post transaction</li>
 * <li>Form submissions with the "post" method cannot be bookmarked</li>
 * <li>The "post" method is more robust and secure than "get", and "post" does not have size limitations</li>
 * </ul>
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 9.0</li>
 * <li>Internet Explorer: 10.0</li>
 * <li>Firefox: 4.0</li>
 * <li>Opera: 10.6</li>
 * <li>Safari: 5.1</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class FormmethodAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "formmethod"
	 */
	protected $KEY = "formmethod";

	/**
	 * Set $value
	 *
	 * @param MethodEnum $value
	 *
	 * @return FormmethodAttribute
	 */
	public function setValue($value)
	{
		if (!$value instanceof MethodEnum) {
			throw new \Exception("use Sase\Commons\Htmlmodel\Enum\MethodEnum value");
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
			'input'
		);

		return $coveredElements;
	}
}