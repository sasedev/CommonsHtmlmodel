<?php
/**
 * OnloadstartAttribute
 *
 * onloadstart attribute representation Class
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
 * OnloadstartAttribute
 * <p>
 * The onloadstart event occurs when the browser starts looking for the specified audio/video.<br>
 * This is when the loading process starts.<br>
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
class OnloadstartAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "onloadstart"
	 */
	protected $KEY = "onloadstart";

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