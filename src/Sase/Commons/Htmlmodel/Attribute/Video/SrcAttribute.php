<?php
/**
 * SrcAttribute
 *
 * src attribute representation Class
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
 * SrcAttribute
 * <p>
 * The src attribute specifies the location (URL) of the video file.<br>
 * The example above uses an Ogg file, and will work in Firefox, Opera and Chrome.<br>
 * To play the video in Internet Explorer and Safari, we must use an MPEG4 file.<br>
 * To make it work in all browsers - use &lt;source&gt; elements inside the &lt;video&gt; element.<br>
 * &lt;source&gt; elements can link to different video files.
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 4.0</li>
 * <li>Internet Explorer: 9.0</li>
 * <li>Firefox: 3.5</li>
 * <li>Opera: 10.5</li>
 * <li>Safari: 4.0</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class SrcAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "src"
	 */
	protected $KEY = "src";

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