<?php
/**
 * OnbeforeunloadAttribute
 *
 * onbeforeunload attribute representation Class
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
 * OnbeforeunloadAttribute
 * <p>
 * The onbeforeunload event fires when the document is about to be unloaded.<br>
 * This event allows you to display a message in a confirmation dialog box to inform the user whether he/she wants to stay or leave the current page.<br>
 * The default message that appears in the confirmation box, is different in different browsers. However, the standard message is something like "Are you sure you want to leave this page?". You cannot remove this message.<br>
 * However, you can write a custom message together with the default message. See the first example on this page.<br>
 * Note: In Firefox, only the default message will be displayed (not the custom message (if any)).
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: Yes</li>
 * <li>Internet Explorer: Yes</li>
 * <li>Firefox: Yes</li>
 * <li>Opera: 15.0</li>
 * <li>Safari: Yes</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class OnbeforeunloadAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "onbeforeunload"
	 */
	protected $KEY = "onbeforeunload";

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