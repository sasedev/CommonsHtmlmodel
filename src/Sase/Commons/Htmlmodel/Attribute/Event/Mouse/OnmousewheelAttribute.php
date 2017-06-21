<?php
/**
 * OnmousewheelAttribute
 *
 * onmousewheel attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Event\Mouse;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * OnmousewheelAttribute
 * <p>
 * The onmousewheel attribute fires when the mouse wheel is rolled up or down over an element.<br>
 * Tip: The onmousewheel attribute is @deprecated, you should use the onwheel attribute instead.
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: Yes</li>
 * <li>Internet Explorer: Yes</li>
 * <li>Firefox: Not Supported</li>
 * <li>Opera: Yes</li>
 * <li>Safari: Yes</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class OnmousewheelAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "onmousewheel"
	 */
	protected $KEY = "onmousewheel";

	/**
	 * check the list of html elements that can add this Attribute
	 *
	 * @return string[]
	 */
	public function getAppliesTo()
	{
		$coveredElements = array(
			'event',
			'eventmouse'
		);

		return $coveredElements;
	}
}