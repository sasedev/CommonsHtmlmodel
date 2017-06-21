<?php
/**
 * OnpauseAttribute
 *
 * onpause attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @pauseright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Event\Media;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * OnpauseAttribute
 * <p>
 * The onpause attribute defines a script to be run when the audio/video is paused either by the user or programmatically.<br>
 * Tip: The onplay attribute is used to define a script to run when the audio/video has been started or is no longer paused.
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
class OnpauseAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "onabort"
	 */
	protected $KEY = "onpause";

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