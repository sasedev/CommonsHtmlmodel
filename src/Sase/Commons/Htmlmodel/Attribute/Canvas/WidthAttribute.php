<?php
/**
 * WidthAttribute
 *
 * width attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Canvas;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * WidthAttribute
 * <p>
 * The width attribute specifies the width of the &lt;canvas&gt; element, in pixels.<br>
 * Tip: Use the height attribute to specify the height of the &lt;canvas&gt; element, in pixels.<br>
 * Tip: Each time the height or width of a canvas is re-set, the canvas content will be cleared
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 4.0</li>
 * <li>Internet Explorer: 9.0</li>
 * <li>Firefox: 2.0</li>
 * <li>Opera: 9.0</li>
 * <li>Safari: 3.1</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class WidthAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "width"
	 */
	protected $KEY = "width";

	/**
	 * Set $value
	 *
	 * @param int $value
	 *
	 * @return WidthAttribute
	 */
	public function setValue($value)
	{
		if (!\is_numeric($value) || $value != \round($value, 0) || $value < 0) {
			throw new \Exception('the value must be an integer greater than or equal to 0');
		}

		return parent::setValue(\intval($value));
	}

	/**
	 * check the list of html elements that can add this Attribute
	 *
	 * @return string[]
	 */
	public function getAppliesTo()
	{
		$coveredElements = array(
			'canvas'
		);

		return $coveredElements;
	}
}