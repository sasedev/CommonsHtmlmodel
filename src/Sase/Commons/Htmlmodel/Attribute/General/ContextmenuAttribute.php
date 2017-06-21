<?php
/**
 * ContextmenuAttribute
 *
 * contextmenu attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\General;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * ContextmenuAttribute
 * <p>
 * The contextmenu attribute specifies a context menu for an element.<br>
 * The context menu appears when a user right-clicks on the element.<br>
 * The value of the contextmenu attribute is the id of the &lt;menu&gt; element to open.
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: No</li>
 * <li>Internet Explorer: No</li>
 * <li>Firefox: Yes</li>
 * <li>Opera: No</li>
 * <li>Safari: No</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class ContextmenuAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "contextmenu"
	 */
	protected $KEY = "contextmenu";

	/**
	 * check the list of html elements that can add this Attribute
	 *
	 * @return string[]
	 */
	public function getAppliesTo()
	{
		$coveredElements = array(
			'general'
		);

		return $coveredElements;
	}
}