<?php
/**
 * OnvolumechangeAttribute
 *
 * onvolumechange attribute representation Class
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
 * OnvolumechangeAttribute
 * <p>
 * The onvolumechange attribute defines a script to run each time the volume of a video/audio has been changed.<br>
 * This event is invoked by:
 * <ul>
 * <li>Increasing or decreasing the volume</li>
 * <li>Muting or unmuting the media player</li>
 * </ul>
 * Tip: Use the volume property of the Audio/Video Object to set or return the audio volume of an audio/video.
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
class OnvolumechangeAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "onvolumechange"
	 */
	protected $KEY = "onvolumechange";

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