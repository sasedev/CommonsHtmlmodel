<?php
/**
 * PlaceholderAttribute
 *
 * placeholder attribute representation Class
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
 * PlaceholderAttribute
 * <p>
 * The placeholder attribute specifies a short hint that describes the expected value of an input field (e.g a sample value or a short description of the expected format).<br>
 * The short hint is displayed in the input field before the user enters a value.<br>
 * Note: The placeholder attribute works with the following input types: text, search, url, tel, email, and password.
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 10.0</li>
 * <li>Internet Explorer: 10.0</li>
 * <li>Firefox: 4.0</li>
 * <li>Opera: 11.0</li>
 * <li>Safari: 5.0</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class PlaceholderAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "placeholder"
	 */
	protected $KEY = "placeholder";

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