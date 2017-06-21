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
namespace Sase\Commons\Htmlmodel\Attribute\Option;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * ValueAttribute
 * <p>
 * The value attribute specifies the value to be sent to a server when a form is submitted<br>
 * The content between the opening &lt;option&gt;> and closing &lt;/option&gt; tags is what the browsers will display in a drop-down list.<br>
 * However, the value of the value attribute is what will be sent to the server when a form is submitted.<br>
 * Note: If the value attribute is not specified, the content will be passed as a value instead.
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
			'option'
		);

		return $coveredElements;
	}
}