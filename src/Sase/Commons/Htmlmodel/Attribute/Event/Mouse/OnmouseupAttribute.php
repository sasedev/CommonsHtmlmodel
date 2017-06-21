<?php
/**
 * OnmouseupAttribute
 *
 * onmouseup attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Event\Mouse;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * OnmouseupAttribute
 * <p>
 * The onmouseup attribute fires when a mouse button is released over the element.<br>
 * Tip: The order of events related to the onmousedown event (for the left/middle mouse button):
 * <ol>
 * <li>onmousedown</li>
 * <li>onmouseup</li>
 * <li>onclick</li>
 * </ol>
 * The order of events related to the onmousedown event (for the right mouse button):
 * <ol>
 * <li>onmousedown</li>
 * <li>onmouseup</li>
 * <li>oncontextmenu</li>
 * </ol>
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
class OnmouseupAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "onmouseup"
	 */
	protected $KEY = "onmouseup";

	/**
	 * check the list of html elements that can add this Attribute
	 *
	 * @return string[]
	 */
	public function getAppliesTo()
	{
		$coveredElements = array(
			'event',
			'eventmouse'
		);

		return $coveredElements;
	}
}