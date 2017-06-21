<?php
/**
 * ForAttribute
 *
 * for attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Output;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * ForAttribute
 * <p>
 * The for attribute specifies the relationship between the result of the calculation, and the elements used in the calculation.
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 10.0</li>
 * <li>Internet Explorer: 13.0</li>
 * <li>Firefox: 4.0</li>
 * <li>Opera: 11.0</li>
 * <li>Safari: 5.1</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class ForAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "for"
	 */
	protected $KEY = "for";

	/**
	 * check the list of html elements that can add this Attribute
	 *
	 * @return string[]
	 */
	public function getAppliesTo()
	{
		$coveredElements = array(
			'output'
		);

		return $coveredElements;
	}
}