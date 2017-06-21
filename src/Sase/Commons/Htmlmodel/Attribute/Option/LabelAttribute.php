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
namespace Sase\Commons\Htmlmodel\Attribute\Option;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * LabelAttribute
 * <p>
 * The label attribute specifies a shorter version of an option.<br>
 * The shorter version will be displayed in the drop-down list.
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: Yes</li>
 * <li>Internet Explorer: 8.0</li>
 * <li>Firefox: Not supported</li>
 * <li>Opera: Yes</li>
 * <li>Safari: Yes</li>
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
			'option'
		);

		return $coveredElements;
	}
}