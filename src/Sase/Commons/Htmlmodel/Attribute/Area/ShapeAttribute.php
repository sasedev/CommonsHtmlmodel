<?php
/**
 * ShapeAttribute
 *
 * shape attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Area;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\Enum\ShapeEnum;

/**
 * ShapeAttribute
 * <p>
 * The shape attribute specifies the coordinates of an area in an image-map.<br>
 * The shape attribute is used together with the shape attribute to specify the size, shape, and placement of an area.
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
class ShapeAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "shape"
	 */
	protected $KEY = "shape";

	/**
	 * Set $value
	 *
	 * @param ShapeEnum $value
	 *
	 * @return ShapeAttribute
	 */
	public function setValue($value)
	{
		if (!$value instanceof ShapeEnum) {
			throw new \Exception("use Sase\Commons\Htmlmodel\Enum\ShapeEnum value");
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
			'area'
		);

		return $coveredElements;
	}
}