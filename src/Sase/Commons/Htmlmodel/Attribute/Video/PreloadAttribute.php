<?php
/**
 * PreloadAttribute
 *
 * preload attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Video;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\Enum\PreloadEnum;

/**
 * PreloadAttribute
 * <p>
 * The preload attribute specifies if and how the author thinks that the video should be loaded when the page loads.<br>
 * The preload attribute allows the author to provide a hint to the browser about what he/she thinks will lead to the best user experience.<br>
 * This attribute may be ignored in some instances.<br>
 * Note: The preload attribute is ignored if autoplay is present.
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: Yes</li>
 * <li>Internet Explorer: 9.0</li>
 * <li>Firefox: Yes</li>
 * <li>Opera: Yes</li>
 * <li>Safari: Yes</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class PreloadAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "preload"
	 */
	protected $KEY = "preload";

	/**
	 * Set $value
	 *
	 * @param PreloadEnum $value
	 *
	 * @return PreloadAttribute
	 */
	public function setValue($value)
	{
		if (!$value instanceof PreloadEnum) {
			throw new \Exception("use Sase\Commons\Htmlmodel\Enum\PreloadEnum value");
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
			'video'
		);

		return $coveredElements;
	}
}