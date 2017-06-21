<?php
/**
 * TargetAttribute
 *
 * target attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Form;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * TargetAttribute
 * <p>
 * The target attribute specifies a name or a keyword that indicates where to display the response that is received after submitting the form.<br>
 * The target attribute defines a name of, or keyword for, a browsing context (e.g tab, window, or inline frame).<br>
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
class TargetAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "target"
	 */
	protected $KEY = "target";

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