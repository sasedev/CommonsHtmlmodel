<?php
/**
 * OncanplayAttribute
 *
 * oncanplay attribute representation Class
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
 * OncanplayAttribute
 * <p>
 * The oncanplay attribute defines a script to run when the browser can start playing the specified media (when it has buffered enough to begin).<br>
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
 * <li>Chrome: Yes/ Not supported</li>
 * <li>Internet Explorer: 9.0/ Not supported</li>
 * <li>Firefox: Yes/ Not supported</li>
 * <li>Opera: Yes/ Not supported</li>
 * <li>Safari: Yes/ Not supported</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class OncanplayAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "oncanplay"
	 */
	protected $KEY = "oncanplay";

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