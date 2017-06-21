<?php
/**
 * OnloadedmetadataAttribute
 *
 * onloadedmetadata attribute representation Class
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
 * OnloadedmetadataAttribute
 * <p>
 * The onloadedmetadata event occurs when meta data for the specified audio/video has been loaded.<br>
 * Meta data for audio/video consists of: duration, dimensions (video only) and text tracks.<br>
 * During the loading process of an audio/video, the following events occur, in this order:
 * <ol>
 * <li>onloadstart</li>
 * <li>ondurationchange</li>
 * <li>onloadedmetadata</li>
 * <li>onloadeddata</li>
 * <li>onprogress</li>
 * <li>oncanplay</li>
 * <li>oncanplaythrough</li>
 * </ol>
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
class OnloadedmetadataAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "onloadedmetadata"
	 */
	protected $KEY = "onloadedmetadata";

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