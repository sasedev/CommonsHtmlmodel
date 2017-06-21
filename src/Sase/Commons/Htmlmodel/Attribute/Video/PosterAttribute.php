<?php
/**
 * PosterAttribute
 *
 * poster attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Video;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * PosterAttribute
 * <p>
 * The poster attribute specifies an image to be shown while the video is downloading, or until the user hits the play button.<br>
 * If this is not included, the first frame of the video will be used instead.
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 4.0</li>
 * <li>Internet Explorer: 9.0</li>
 * <li>Firefox: 3.6</li>
 * <li>Opera: 10.5</li>
 * <li>Safari: 4.0</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class PosterAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "poster"
	 */
	protected $KEY = "poster";

	/**
	 * check the list of html elements that can add this Attribute
	 *
	 * @return string[]
	 */
	public function getAppliesTo()
	{
		$coveredElements = array(
			'video'
		);

		return $coveredElements;
	}
}