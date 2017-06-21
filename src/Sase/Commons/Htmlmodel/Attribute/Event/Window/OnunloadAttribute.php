<?php
/**
 * OnunloadAttribute
 *
 * onunload attribute representation Class
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
 * OnunloadAttribute
 * <p>
 * The onunload attribute fires once a page has unloaded (or the browser window has been closed).<br>
 * onunload occurs when the user navigates away from the page (by clicking on a link, submitting a form, closing the browser window, etc.)<br>
 * Note: If you reload a page, you will also trigger the onunload event (and the onload event).
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
class OnunloadAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "onunload"
	 */
	protected $KEY = "onunload";

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