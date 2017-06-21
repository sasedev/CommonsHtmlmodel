<?php
/**
 * CiteAttribute
 *
 * cite attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Del;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * CiteAttribute
 * <p>
 * The cite attribute specifies a URL to a document that explains the reason why the text was deleted.<br>
 * Note: The cite attribute has no visual effect in ordinary web browsers, but can be used by screen readers.
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
class CiteAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "cite"
	 */
	protected $KEY = "cite";

	/**
	 * check the list of html elements that can add this Attribute
	 *
	 * @return string[]
	 */
	public function getAppliesTo()
	{
		$coveredElements = array(
			'del'
		);

		return $coveredElements;
	}
}