<?php
/**
 * SrcAttribute
 *
 * src attribute representation Class
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
 * SrcAttribute
 * <p>
 * The src attribute specifies the URL of the image to use as a submit button.<br>
 * Note: The src attribute is required for &lt;input type="image"&gt;, and can only be used with &lt;input type="image"&gt;.
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 1.0</li>
 * <li>Internet Explorer: 2.0</li>
 * <li>Firefox: 1.0</li>
 * <li>Opera: 1.0</li>
 * <li>Safari: 1.0</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class SrcAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "src"
	 */
	protected $KEY = "src";

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