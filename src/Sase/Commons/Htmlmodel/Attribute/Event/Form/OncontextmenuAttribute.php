<?php
/**
 * OncontextmenuAttribute
 *
 * oncontextmenu attribute representation Class
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
 * OncontextmenuAttribute
 * <p>
 * The oncontextmenu attribute fires when the user right-clicks on an element to open the context menu.<br>
 * Note: Although the oncontextmenu event is supported in all browsers, the contextmenu attribute is currently only supported in Firefox.
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
class OncontextmenuAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "oncontextmenu"
	 */
	protected $KEY = "oncontextmenu";

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