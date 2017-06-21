<?php
/**
 * OnhashchangeAttribute
 *
 * onhashchange attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Event\Window;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * OnhashchangeAttribute
 * <p>
 * The onhashchange attribute fires when there has been changes to the anchor part (begins with a '#' symbol) of the current URL.<br>
 * An example of what an anchor part actually is: Assume that the current URL is http://www.example.com/test.htm#part2 - The anchor part of this URL would be #part2.<br>
 * To invoke this event, you can:
 * <ul>
 * <li>Change the anchor part by setting the location.hash or location.href property of the Location Object</li>
 * <li>Navigate to the current page with a different bookmark (Use the "back" or "forward" buttons)</li>
 * <li>Click on a link to a bookmark anchor</li>
 * <ul>
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 5.0</li>
 * <li>Internet Explorer: 8.0</li>
 * <li>Firefox: 3.6</li>
 * <li>Opera: 10.6</li>
 * <li>Safari: 5.0</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class OnhashchangeAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "onhashchange"
	 */
	protected $KEY = "onhashchange";

	/**
	 * check the list of html elements that can add this Attribute
	 *
	 * @return string[]
	 */
	public function getAppliesTo()
	{
		$coveredElements = array(
			'event',
			'eventwindow'
		);

		return $coveredElements;
	}
}