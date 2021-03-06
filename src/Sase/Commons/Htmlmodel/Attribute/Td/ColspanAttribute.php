<?php
/**
 * ColspanAttribute
 *
 * colspan attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Td;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * ColspanAttribute
 * <p>
 * The colspan attribute defines the number of columns a table cell should span.<br>
 * Note: Only Firefox supports colspan="0", which has a special meaning: tells the browser to span the cell to the last column of the column group (colgroup)
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
class ColspanAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "colspan"
	 */
	protected $KEY = "colspan";

	/**
	 * Set $value
	 *
	 * @param int $value
	 *
	 * @return ColspanAttribute
	 */
	public function setValue($value)
	{
		if (!\is_numeric($value) || $value != \round($value, 0) || $value < 0) {
			throw new \Exception('the value must be an integer greater than or equal to 0');
		}

		return parent::setValue(\intval($value));
	}

	/**
	 * check the list of html elements that can add this Attribute
	 *
	 * @return string[]
	 */
	public function getAppliesTo()
	{
		$coveredElements = array(
			'td'
		);

		return $coveredElements;
	}
}