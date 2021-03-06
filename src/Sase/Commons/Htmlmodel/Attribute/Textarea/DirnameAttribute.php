<?php
/**
 * DirnameAttribute
 *
 * dirname attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Textarea;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * DirnameAttribute
 * <p>
 * The dirname attribute enables the submission of the text direction of the textarea.<br>
 * The dirname attribute's value is always the name of the textarea, followed by ".dir".
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: Yes</li>
 * <li>Internet Explorer: No</li>
 * <li>Firefox: No</li>
 * <li>Opera: Yes</li>
 * <li>Safari: Yes</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class DirnameAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "dirname"
	 */
	protected $KEY = "dirname";

	/**
	 * check the list of html elements that can add this Attribute
	 *
	 * @return string[]
	 */
	public function getAppliesTo()
	{
		$coveredElements = array(
			'textarea'
		);

		return $coveredElements;
	}
}