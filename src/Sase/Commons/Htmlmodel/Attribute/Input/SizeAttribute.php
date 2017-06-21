<?php
/**
 * SizeAttribute
 *
 * size attribute representation Class
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
 * SizeAttribute
 * <p>
 * The size attribute specifies the visible width, in characters, of an &lt;input&gt; element.<br>
 * Note: The size attribute works with the following input types: text, search, tel, url, email, and password.<br>
 * Tip: To specify the maximum number of characters allowed in the <input> element, use the maxlength attribute.
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
class SizeAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "size"
	 */
	protected $KEY = "size";

	/**
	 * Set $value
	 *
	 * @param int $value
	 *
	 * @return SizeAttribute
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
			'input'
		);

		return $coveredElements;
	}
}