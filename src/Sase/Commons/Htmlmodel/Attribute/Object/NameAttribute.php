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
namespace Sase\Commons\Htmlmodel\Attribute\Object;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * NameAttribute
 * <p>
 * The name attribute specifies a name for the element.<br>
 * This name attribute can be used to reference the element in a JavaScript.<br>
 * For form elements it is also used as a reference when the data is submitted,<br>
 * For iframe element it can be used to target a form submission.<br>
 * For the map element, the name attribute is associated with the &lt;img&gt;'s usemap attribute and creates a relationship between the image and the map.<br>
 * For the meta element, the name attribute specifies a name for the information/value of the content attribute.<br>
 * For the param element, the name attribute is used together with the value attribute to specify parameters for the plugin specified with the &lt;object&gt; tag.
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
			'object'
		);

		return $coveredElements;
	}
}