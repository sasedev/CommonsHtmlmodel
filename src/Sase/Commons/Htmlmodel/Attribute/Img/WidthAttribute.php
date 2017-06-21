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
namespace Sase\Commons\Htmlmodel\Attribute\Img;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * WidthAttribute
 * <p>
 * The width attribute specifies the width of the &lt;img"&gt;, in pixels.<br>
 * Tip: Always specify both the height and width attributes for images.<br>
 * If height and width are set, the space required for the image is reserved when the page is loaded. However, without these attributes, the browser does not know the size of the image, and cannot reserve the appropriate space to it. The effect will be that the page layout will change during loading (while the images load).<br>
 * Tip: Downsizing a large image with the height and width attributes forces a user to download the large image (even if it looks small on the page). To avoid this, rescale the image with a program before using it on a page.
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
			'img'
		);

		return $coveredElements;
	}
}