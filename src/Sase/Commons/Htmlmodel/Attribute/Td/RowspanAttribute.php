<?php
/**
 * RowspanAttribute
 *
 * rowspan attribute representation Class
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
 * RowspanAttribute
 * <p>
 * The rowspan attribute specifies the number of rows a cell should span.<br>
 * Note: Only Firefox and Opera 12 (and earlier versions) support rowspan="0", which has a special meaning: tells the browser to span the cell to the last row of the table section (thead, tbody, or tfoot)
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
class RowspanAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "rowspan"
	 */
	protected $KEY = "rowspan";

	/**
	 * Set $value
	 *
	 * @param int $value
	 *
	 * @return RowspanAttribute
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