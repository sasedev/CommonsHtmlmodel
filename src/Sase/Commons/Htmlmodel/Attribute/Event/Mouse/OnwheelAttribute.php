<?php
/**
 * OnwheelAttribute
 *
 * onwheel attribute representation Class
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
 * OnwheelAttribute
 * <p>
 * The onwheel attribute fires when the wheel of a pointing device is rolled up or down over an element.<br>
 * The onwheel attribute also fires when the user scrolls or zooms on an element by using a touchpad (like the "mouse" of a laptop).
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 31.0</li>
 * <li>Internet Explorer: Not Supported</li>
 * <li>Firefox: 17.0</li>
 * <li>Opera: 18.0</li>
 * <li>Safari: Not Supported</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class OnwheelAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "onwheel"
	 */
	protected $KEY = "onwheel";

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