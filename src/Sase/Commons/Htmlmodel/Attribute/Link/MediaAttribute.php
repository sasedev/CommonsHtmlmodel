<?php
/**
 * MediaAttribute
 *
 * media attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Link;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * MediaAttribute
 * <p>
 * The media attribute specifies what media/device the linked document is optimized for.<br>
 * This attribute is used to specify that the target URL is designed for special devices (like iPhone) , speech or print media.<br>
 * This attribute can accept several values.<br>
 * Possibles values are:
 * <ul>
 * <li>Possible Operators:
 * <ul>
 * <li>and : Specifies an AND operator</li>
 * <li>not : Specifies a NOT operator</li>
 * <li>, : Specifies an OR operator</li>
 * </ul>
 * </li>
 * <li>Devices:
 * <ul>
 * <li>all : Default. Suitable for all devices</li>
 * <li>aural : Speech synthesizers</li>
 * <li>braille : Braille feedback devices</li>
 * <li>handheld : Handheld devices (small screen, limited bandwidth)</li>
 * <li>projection : Projectors</li>
 * <li>print : Print preview mode/printed pages</li>
 * <li>screen : Computer screens</li>
 * <li>tty : Teletypes and similar media using a fixed-pitch character grid</li>
 * <li>tv : Television type devices (low resolution, limited scroll ability)</li>
 * </ul>
 * </li>
 * <li>Values:
 * <ul>
 * <li>width : Specifies the width of the targeted display area. "min-" and "max-" prefixes can be used. Example: media="screen and (min-width:500px)"</li>
 * <li>height : Specifies the height of the targeted display area.
 * "min-" and "max-" prefixes can be used.
 * Example: media="screen and (max-height:700px)"</li>
 * <li>device-width : Specifies the width of the target display/paper.
 * "min-" and "max-" prefixes can be used.
 * Example: media="screen and (device-width:500px)"</li>
 * <li>device-height : Specifies the height of the target display/paper.
 * "min-" and "max-" prefixes can be used.
 * Example: media="screen and (device-height:500px)"</li>
 * <li>orientation : Specifies the orientation of the target display/paper.
 * Possible values: "portrait" or "landscape"
 * Example: media="all and (orientation: landscape)"</li>
 * <li>aspect-ratio : Specifies the width/height ratio of the targeted display area.
 * "min-" and "max-" prefixes can be used.
 * Example: media="screen and (aspect-ratio:16/9)"</li>
 * <li>device-aspect-ratio : Specifies the device-width/device-height ratio of the target display/paper.
 * "min-" and "max-" prefixes can be used.
 * Example: media="screen and (aspect-ratio:16/9)"</li>
 * <li>color : Specifies the bits per color of target display.
 * "min-" and "max-" prefixes can be used.
 * Example: media="screen and (color:3)"</li>
 * <li>color-index : Specifies the number of colors the target display can handle.
 * "min-" and "max-" prefixes can be used.
 * Example: media="screen and (min-color-index:256)"</li>
 * <li>monochrome : Specifies the bits per pixel in a monochrome frame buffer.
 * "min-" and "max-" prefixes can be used.
 * Example: media="screen and (monochrome:2)"</li>
 * <li>resolution : Specifies the pixel density (dpi or dpcm) of the target display/paper.
 * "min-" and "max-" prefixes can be used.
 * Example: media="print and (resolution:300dpi)"</li>
 * <li>scan : Specifies scanning method of a tv display.
 * Possible values are "progressive" and "interlace".
 * Example: media="tv and (scan:interlace)"</li>
 * <li>grid : Specifies if the output device is grid or bitmap.
 * Possible values are "1" for grid, and "0" otherwise.
 * Example: media="handheld and (grid:1)"</li>
 * </ul>
 * </li>
 * </ul>
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: Yes</li>
 * <li>Internet Explorer: Yes</li>
 * <li>Firefox: Yes</li>
 * <li>Opera: Yes</li>
 * <li>Safari: Yes</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class MediaAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "media"
	 */
	protected $KEY = "media";

	/**
	 * check the list of html elements that can add this Attribute
	 *
	 * @return string[]
	 */
	public function getAppliesTo()
	{
		$coveredElements = array(
			'link'
		);

		return $coveredElements;
	}
}