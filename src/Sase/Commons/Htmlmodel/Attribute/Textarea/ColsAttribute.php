<?php
/**
 * ColsAttribute
 *
 * cols attribute representation Class
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
 * ColsAttribute
 * <p>
 * The cols attribute specifies the visible width of a text area.<br>
 * Tip: The size of a textarea can also be set by the CSS height and width properties.
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
class ColsAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "cols"
	 */
	protected $KEY = "cols";

	/**
	 * Set $value
	 *
	 * @param int $value
	 *        	= 20
	 * @return ColsAttribute
	 */
	public function setValue($value = 20)
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