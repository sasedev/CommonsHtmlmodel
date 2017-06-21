<?php
/**
 * NameAttribute
 *
 * name attribute representation Class
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
 * NameAttribute
 * <p>
 * The name attribute specifies the name of an &lt;input&gt; element.<br>
 * The name attribute is used to reference elements in a JavaScript, or to reference form data after a form is submitted.<br>
 * Note: Only form elements with a name attribute will have their values passed when submitting a form.
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
class NameAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "name"
	 */
	protected $KEY = "name";

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