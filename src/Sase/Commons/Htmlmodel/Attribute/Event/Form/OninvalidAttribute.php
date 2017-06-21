<?php
/**
 * OninvalidAttribute
 *
 * oninvalid attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Event\Form;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * OninvalidAttribute
 * <p>
 * The oninvalid event occurs when a submittable &lt;input&gt; element is invalid.<br>
 * For example, the input field is invalid if the required attribute is set and the field is empty (the required attribute specifies that the input field must be filled out before submitting the form).
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: Yes</li>
 * <li>Internet Explorer: 10.0</li>
 * <li>Firefox: Yes</li>
 * <li>Opera: Yes</li>
 * <li>Safari: Not supported</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class OninvalidAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "oninvalid"
	 */
	protected $KEY = "oninvalid";

	/**
	 * check the list of html elements that can add this Attribute
	 *
	 * @return string[]
	 */
	public function getAppliesTo()
	{
		$coveredElements = array(
			'event',
			'eventform'
		);

		return $coveredElements;
	}
}