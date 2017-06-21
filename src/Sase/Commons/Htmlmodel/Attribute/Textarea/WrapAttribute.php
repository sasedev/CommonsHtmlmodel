<?php
/**
 * WrapAttribute
 *
 * wrap attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Textarea;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\Enum\WrapEnum;

/**
 * WrapAttribute
 * <p>
 * The wrap attribute specifies how the text in a text area is to be wrapped when submitted in a form.
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
class WrapAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "wrap"
	 */
	protected $KEY = "wrap";

	/**
	 * Set $value
	 *
	 * @param WrapEnum $value
	 *
	 * @return WrapAttribute
	 */
	public function setValue($value)
	{
		if (!$value instanceof WrapEnum) {
			throw new \Exception("use Sase\Commons\Htmlmodel\Enum\WrapEnum value");
		}

		return parent::setValue($value->getValue());
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