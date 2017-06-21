<?php
/**
 * ValueAttribute
 *
 * value attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Li;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * ValueAttribute
 * <p>
 * The value attribute sets the value of a list item.
 * The following list items will increment from that number.<br>
 * The value must be a number and can only be used in ordered lists (&lt;ol&gt;).
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
class ValueAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "value"
	 */
	protected $KEY = "value";

	/**
	 * Set $value
	 *
	 * @param int $value
	 *
	 * @return ValueAttribute
	 */
	public function setValue($value)
	{
		if (!\is_numeric($value) || $value != \round($value, 0)) {
			throw new \Exception('the value must be an integer');
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
			'li'
		);

		return $coveredElements;
	}
}