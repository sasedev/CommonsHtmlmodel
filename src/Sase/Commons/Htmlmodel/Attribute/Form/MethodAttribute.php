<?php
/**
 * MethodAttribute
 *
 * method attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Form;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\Enum\MethodEnum;

/**
 * MethodAttribute
 * <p>
 * The method attribute specifies how to send form-data (the form-data is sent to the page specified in the action attribute).<br>
 * The form-data can be sent as URL variables (with method="get") or as HTTP post transaction (with method="post").
 * </p>
 * <p>
 * Notes on GET:
 * <ul>
 * <li>Appends form-data into the URL in name/value pairs</li>
 * <li>The length of a URL is limited (about 3000 characters)</li>
 * <li>Never use GET to send sensitive data! (will be visible in the URL)</li>
 * <li>Useful for form submissions where a user want to bookmark the result</li>
 * <li>GET is better for non-secure data, like query strings in Google</li>
 * </ul>
 * </p>
 * <p>
 * Notes on POST:
 * <ul>
 * <li>Appends form-data inside the body of the HTTP request (data is not shown is in URL)</li>
 * <li>Has no size limitations</li>
 * <li>Form submissions with POST cannot be bookmarked</li>
 * </ul>
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
class MethodAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "method"
	 */
	protected $KEY = "method";

	/**
	 * Set $value
	 *
	 * @param MethodEnum $value
	 *
	 * @return MethodAttribute
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
			'form'
		);

		return $coveredElements;
	}
}