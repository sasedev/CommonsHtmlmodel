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
namespace Sase\Commons\Htmlmodel\Attribute\Img;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * SizesAttribute
 * <p>
 * Specifies image sizes for different page layouts
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 55.0</li>
 * <li>Internet Explorer: 12.0</li>
 * <li>Firefox: 50.0</li>
 * <li>Opera: 41.0</li>
 * <li>Safari: 9.0</li>
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
			'img'
		);

		return $coveredElements;
	}
}