<?php
/**
 * DraggableAttribute
 *
 * draggable attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\General;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\Enum\DraggableEnum;

/**
 * DraggableAttribute
 * <p>
 * The draggable attribute specifies whether an element is draggable or not.<br>
 * Tip: Links and images are draggable by default.<br>
 * Tip: The draggable attribute is often used in drag and drop operations. @see <a href="https://www.w3schools.com/html/html5_draganddrop.asp">https://www.w3schools.com/html/html5_draganddrop.asp</a>
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 4.0</li>
 * <li>Internet Explorer: 9.0</li>
 * <li>Firefox: 3.5</li>
 * <li>Opera: 12.0</li>
 * <li>Safari: 6.0</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class DraggableAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "draggable"
	 */
	protected $KEY = "draggable";

	/**
	 * Set $value
	 *
	 * @param DraggableEnum $value
	 *
	 * @return DraggableAttribute
	 */
	public function setValue($value)
	{
		if (!$value instanceof DraggableEnum) {
			throw new \Exception("use Sase\Commons\Htmlmodel\Enum\DraggableEnum value");
		}

		return parent::setValue($value->getValue());
	}

	/**
	 * check the list of html elements that can add this Attribute
	 *
	 * @return string[]
	 */
	public function getAppliesTo()
	{
		$coveredElements = array(
			'general'
		);

		return $coveredElements;
	}
}