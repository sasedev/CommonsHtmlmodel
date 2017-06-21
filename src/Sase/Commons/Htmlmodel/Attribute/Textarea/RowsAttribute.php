<?php
/**
 * RowsAttribute
 *
 * rows attribute representation Class
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
 * RowsAttribute
 * <p>
 * The rows attribute specifies the visible height of a text area, in lines.<br>
 * Note: The size of a textarea can also be specified by the CSS height and width properties.
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
class RowsAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "rows"
	 */
	protected $KEY = "rows";

	/**
	 * Set $value
	 *
	 * @param int $value
	 *        	= 2
	 * @return RowAttribute
	 */
	public function setValue($value)
	{
		if (!\is_numeric($value) || $value != \round($value, 0) || $value <= 0) {
			throw new \Exception('the value must be an integer greater than 0');
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
			'textarea'
		);

		return $coveredElements;
	}
}