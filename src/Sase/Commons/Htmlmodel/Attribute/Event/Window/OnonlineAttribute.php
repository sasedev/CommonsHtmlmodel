<?php
/**
 * OnonlineAttribute
 *
 * ononline attribute representation Class
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
 * OnonlineAttribute
 * <p>
 * The ononline attribute fires when the browser starts to work online.<br>
 * Tip: The ononline attribute is the opposite of the onoffline attribute.
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: Not supported</li>
 * <li>Internet Explorer: 8.0/Deprecated as of IE11</li>
 * <li>Firefox: 3.0</li>
 * <li>Opera: Not supported</li>
 * <li>Safari: Not supported</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class OnonlineAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "ononline"
	 */
	protected $KEY = "ononline";

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