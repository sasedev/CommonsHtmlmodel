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
namespace Sase\Commons\Htmlmodel\Attribute\Input;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * WidthAttribute
 * <p>
 * The width attribute specifies the width of the &lt;input&gt; element.<br>
 * Note: The width attribute is used only with &lt;input type="image"&gt;.<br>
 * Tip: Always specify both the height and width attributes for images.<br>
 * If height and width are set, the space required for the image is reserved when the page is loaded.<br>
 * However, without these attributes, the browser does not know the size of the image, and cannot reserve the appropriate space to it. The effect will be that the page layout will change during loading (while the images load).
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 1.0</li>
 * <li>Internet Explorer: Yes</li>
 * <li>Firefox: 16.0</li>
 * <li>Opera: 1.0</li>
 * <li>Safari: Yes</li>
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
			'input'
		);

		return $coveredElements;
	}
}