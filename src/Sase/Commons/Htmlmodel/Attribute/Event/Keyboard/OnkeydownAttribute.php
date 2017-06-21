<?php
/**
 * OnkeydownAttribute
 *
 * onkeydown attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Event\Keyboard;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * OnkeydownAttribute
 * <p>
 * The onkeydown attribute fires when the user is pressing a key (on the keyboard).<br>
 * Tip: The order of events related to the onkeydown event:
 * <ul>
 * <li>onkeydown</li>
 * <li>onkeypress</li>
 * <li>onkeyup</li>
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
class OnkeydownAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "onkeydown"
	 */
	protected $KEY = "onkeydown";

	/**
	 * check the list of html elements that can add this Attribute
	 *
	 * @return string[]
	 */
	public function getAppliesTo()
	{
		$coveredElements = array(
			'event',
			'eventkeyboard'
		);

		return $coveredElements;
	}
}