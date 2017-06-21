<?php
/**
 * CoordsAttribute
 *
 * coords attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Area;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * CoordsAttribute
 * <p>
 * The coords attribute specifies the coordinates of an area in an image-map.<br>
 * The coords attribute is used together with the shape attribute to specify the size, shape, and placement of an area.<br>
 * Tip: The coordinates of the top-left corner of an area are 0,0.
 * </p>
 * <p>
 * Attribute Values:
 * <ul>
 * <li><b>x1,y1,x2,y2</b>: Specifies the coordinates of the left, top, right, bottom corner of the rectangle (for shape="rect")</li>
 * <li><b>x,y,radius</b>: Specifies the coordinates of the circle center and the radius (for shape="circle")</li>
 * <li><b>x1,y1,x2,y2,..,xn,yn</b>: Specifies the coordinates of the edges of the polygon. If the first and last coordinate pairs are not the same, the browser will add the last coordinate pair to close the polygon (for shape="poly")</li>
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
class CoordsAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "coords"
	 */
	protected $KEY = "coords";

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