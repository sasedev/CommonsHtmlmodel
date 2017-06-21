<?php
/**
 * OnstalledAttribute
 *
 * onstalled attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Event\Media;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * OnstalledAttribute
 * <p>
 * The onstalled attribute defines a script to run when the browser is trying to get media data, but data is not available.<br>
 * Tip: Related events that occurs when there is some kind of disturbance to the media loading process, are:
 * <ul>
 * <li>onabort</li>
 * <li>onemptied</li>
 * <li>onerror</li>
 * <li>onsuspend</li>
 * </ul>
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: Yes</li>
 * <li>Internet Explorer: 9.0</li>
 * <li>Firefox: Yes</li>
 * <li>Opera: Yes</li>
 * <li>Safari: Yes</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class OnstalledAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "onstalled"
	 */
	protected $KEY = "onstalled";

	/**
	 * check the list of html elements that can add this Attribute
	 *
	 * @return string[]
	 */
	public function getAppliesTo()
	{
		$coveredElements = array(
			'event',
			'eventmedia'
		);

		return $coveredElements;
	}
}