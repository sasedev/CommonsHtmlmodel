<?php
/**
 * OnscrollAttribute
 *
 * onscroll attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @scrollright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Event\Drag;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * OnscrollAttribute
 * <p>
 * The onscroll attribute fires when an element's scrollbar is being scrolled.<br>
 * Tip: use the CSS overflow style property to create a scrollbar for an element.
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
class OnscrollAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "onscroll"
	 */
	protected $KEY = "onscroll";

	/**
	 * check the list of html elements that can add this Attribute
	 *
	 * @return string[]
	 */
	public function getAppliesTo()
	{
		$coveredElements = array(
			'event',
			'eventdrag'
		);

		return $coveredElements;
	}
}