<?php
/**
 * HeightAttribute
 *
 * height attribute representation Class
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
 * HeightAttribute
 * <p>
 * The height attribute specifies the height of a video player, in pixels.<br>
 * Tip: Always specify both the height and width attributes for videos.<br>
 * If height and width are set, the space required for the video is reserved when the page is loaded.<br>
 * However, without these attributes, the browser does not know the size of the video, and cannot reserve the appropriate space to it.<br>
 * The effect will be that the page layout will change during loading (while the video loads).<br>
 * Note: Do not rescale video with the height and width attributes!<br>
 * Downsizing a large video with the height and width attributes forces a user to download the original video (even if it looks small on the page). The correct way to rescale a video is with a program, before using it on a page.
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
class HeightAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "height"
	 */
	protected $KEY = "height";

	/**
	 * Set $value
	 *
	 * @param int $value
	 *
	 * @return HeightAttribute
	 */
	public function setValue($value)
	{
		if (!\is_numeric($value) || $value != \round($value, 0) || $value < 0) {
			throw new \Exception('the value must be an integer greater than or equal to 0');
		}

		return parent::setValue(\intval($value));
	}

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