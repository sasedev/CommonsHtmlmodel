<?php
/**
 * AcceptAttribute
 *
 * accept attribute representation Class
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
 * AcceptAttribute
 * <p>
 * The accept attribute specifies the types of files that the server accepts (that can be submitted through a file upload).<br>
 * Note: The accept attribute can only be used with &lt;input type="file"&gt;.<br>
 * Tip: Do not use this attribute as a validation tool. File uploads should be validated on the server.<br>
 * Tip: To specify more than one value, separate the values with a comma (e.g.&lt;input accept="audio/*,video/*,image/*" &gt;.
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 8.0</li>
 * <li>Internet Explorer: 10.0</li>
 * <li>Firefox: 4.0</li>
 * <li>Opera: 15.0</li>
 * <li>Safari: 6.0</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class AcceptAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "accept"
	 */
	protected $KEY = "accept";

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