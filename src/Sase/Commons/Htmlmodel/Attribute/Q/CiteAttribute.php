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
namespace Sase\Commons\Htmlmodel\Attribute\Q;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * CiteAttribute
 * <p>
 * The cite attribute specifies the source URL of a quote.
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
			'q'
		);

		return $coveredElements;
	}
}