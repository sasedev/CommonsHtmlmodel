<?php
/**
 * OnbeforeprintAttribute
 *
 * onbeforeprint attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Event\Window;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * OnbeforeprintAttribute
 * <p>
 * The onbeforeprint attribute fires when a page is about to be printed (before the print dialogue box appears).<br>
 * Tip: The onbeforeprint attribute is often used together with the onafterprint attribute.
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: Not supported</li>
 * <li>Internet Explorer: Yes</li>
 * <li>Firefox: Yes</li>
 * <li>Opera: Not supported</li>
 * <li>Safari: Not supported</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class OnbeforeprintAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "onbeforeprint"
	 */
	protected $KEY = "onbeforeprint";

	/**
	 * check the list of html elements that can add this Attribute
	 *
	 * @return string[]
	 */
	public function getAppliesTo()
	{
		$coveredElements = array(
			'event',
			'eventwindow'
		);

		return $coveredElements;
	}
}