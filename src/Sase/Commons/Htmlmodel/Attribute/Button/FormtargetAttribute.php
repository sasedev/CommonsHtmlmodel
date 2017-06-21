<?php
/**
 * FormtargetAttribute
 *
 * formtarget attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Button;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * FormtargetAttribute
 * <p>
 * The formtarget attribute specifies where to display the response after submitting the form.<br>
 * This attribute overrides the form's target attribute.<br>
 * The formtarget attribute is only used for buttons with type="submit".<br>
 * Possibles values are:
 * <ul>
 * <li>_blank : Opens the linked document in a new window or tab</li>
 * <li>_self : Opens the linked document in the same frame as it was clicked (this is default)</li>
 * <li>_parent : Opens the linked document in the parent frame</li>
 * <li>_top : Opens the linked document in the full body of the window</li>
 * <li>framename : Opens the linked document in a named frame</li>
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
class FormtargetAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "formtarget"
	 */
	protected $KEY = "formtarget";

	/**
	 * check the list of html elements that can add this Attribute
	 *
	 * @return string[]
	 */
	public function getAppliesTo()
	{
		$coveredElements = array(
			'button'
		);

		return $coveredElements;
	}
}