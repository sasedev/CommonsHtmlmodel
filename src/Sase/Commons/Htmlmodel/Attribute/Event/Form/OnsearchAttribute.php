<?php
/**
 * OnsearchAttribute
 *
 * onsearch attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @searchright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Event\Form;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * OnsearchAttribute
 * <p>
 * The onsearch attribute fires when a user presses the "ENTER" key or clicks the "x" button in an &lt;input&gt; element with type="search".
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: Yes</li>
 * <li>Internet Explorer: Not Supported</li>
 * <li>Firefox: Not Supported</li>
 * <li>Opera: 15.0</li>
 * <li>Safari: Yes</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class OnsearchAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "onsearch"
	 */
	protected $KEY = "onsearch";

	/**
	 * check the list of html elements that can add this Attribute
	 *
	 * @return string[]
	 */
	public function getAppliesTo()
	{
		$coveredElements = array(
			'event',
			'eventform'
		);

		return $coveredElements;
	}
}