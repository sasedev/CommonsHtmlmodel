<?php
/**
 * SizesAttribute
 *
 * sizes attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Link;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * SizesAttribute
 * <p>
 * The sizes attribute specifies the sizes of icons for visual media.<br>
 * This attribute is only used if rel="icon".<br>
 * Attribute Values:
 * <ul>
 * <li>HeightxWidth: Specifies one or more sizes for the linked icon (&lt;link rel="icon" href="favicon.png" sizes="16x16 32x32" type="image/png"&gt;)</li>
 * <li>any: Specifies that the icon is scalable (&lt;link rel="icon" href="icon.svg" sizes="any" type="image/svg+xml"&gt;)</li>
 * </ul>
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: Not supported</li>
 * <li>Internet Explorer: Not supported</li>
 * <li>Firefox: Not supported</li>
 * <li>Opera: Not supported</li>
 * <li>Safari: Not supported</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class SizesAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "sizes"
	 */
	protected $KEY = "sizes";

	/**
	 * check the list of html elements that can add this Attribute
	 *
	 * @return string[]
	 */
	public function getAppliesTo()
	{
		$coveredElements = array(
			'link'
		);

		return $coveredElements;
	}
}