<?php
/**
 * OntimeupdateAttribute
 *
 * ontimeupdate attribute representation Class
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
 * OntimeupdateAttribute
 * <p>
 * The ontimeupdate attribute defines a script to run when the playing position of an audio/video has changed.<br>
 * This event is invoked by:
 * <ul>
 * <li>Playing the audio/video</li>
 * <li>Moving the playback position (like when the user fast forwards to a different point in the audio/video)</li>
 * </ul>
 * Tip: This timeupdate event is often used together with the currentTime property of the Audio/Video Object, which returns the current position of the audio/video playback, in seconds.
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
class OntimeupdateAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "ontimeupdate"
	 */
	protected $KEY = "ontimeupdate";

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