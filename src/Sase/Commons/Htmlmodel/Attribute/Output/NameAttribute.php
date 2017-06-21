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
namespace Sase\Commons\Htmlmodel\Attribute\Output;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * NameAttribute
 * <p>
 * The name attribute specifies the name of an &lt;output&gt; element.<br>
 * The name attribute is used to reference form data after it has been submitted, or to reference the element in a JavaScript.<br>
 * For form elements it is also used as a reference when the data is submitted,<br>
 * For iframe element it can be used to target a form submission.<br>
 * For the map element, the name attribute is associated with the &lt;img&gt;'s usemap attribute and creates a relationship between the image and the map.<br>
 * For the meta element, the name attribute specifies a name for the information/value of the content attribute.<br>
 * For the param element, the name attribute is used together with the value attribute to specify parameters for the plugin specified with the &lt;object&gt; tag.
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 10.0</li>
 * <li>Internet Explorer: 13.0</li>
 * <li>Firefox: 4.0</li>
 * <li>Opera: 11.0</li>
 * <li>Safari: 5.1</li>
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
			'output'
		);

		return $coveredElements;
	}
}