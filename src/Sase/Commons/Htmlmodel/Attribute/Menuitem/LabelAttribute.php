<?php
/**
 * LabelAttribute
 *
 * label attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Input;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * LabelAttribute
 * <p>
 * The required label attribute specifies the name of the command/menu item, as shown to the user.
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: Not supported</li>
 * <li>Internet Explorer: Not supported</li>
 * <li>Firefox: 8.0</li>
 * <li>Opera: Not supported</li>
 * <li>Safari: Not supported</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class LabelAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "label"
	 */
	protected $KEY = "label";

	/**
	 * check the list of html elements that can add this Attribute
	 *
	 * @return string[]
	 */
	public function getAppliesTo()
	{
		$coveredElements = array(
			'menuitem'
		);

		return $coveredElements;
	}
}