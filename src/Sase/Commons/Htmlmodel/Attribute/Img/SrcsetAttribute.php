<?php
/**
 * SrcsetAttribute
 *
 * srcset attribute representation Class
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
 * SrcsetAttribute
 * <p>
 * The srcset attribute specifies the URL of the image to use in different situations.<br>
 * This attribute is required when &lt;source&gt; is used in /&lt;picture&gt;.
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 38.0</li>
 * <li>Internet Explorer: Yes</li>
 * <li>Firefox: 38.0</li>
 * <li>Opera: 25.0</li>
 * <li>Safari: 9.1</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class SrcsetAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "srcset"
	 */
	protected $KEY = "srcset";

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