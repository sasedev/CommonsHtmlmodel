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
namespace Sase\Commons\Htmlmodel\Attribute\Button;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * NameAttribute
 * <p>
 * The name attribute specifies the name for a &lt;button&gt; element.<br>
 * The name attribute is used to reference form-data after the form has been submitted, or to reference the element in a JavaScript.<br>
 * Tip: Several &lt;button&gt; elements can share the same name. This allows you to have several buttons with equal names, which can submit different values when used in a form.
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
			'button'
		);

		return $coveredElements;
	}
}