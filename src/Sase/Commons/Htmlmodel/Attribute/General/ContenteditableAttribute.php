<?php
/**
 * ContenteditableAttribute
 *
 * contenteditable attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\General;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\Enum\ContenteditableEnum;

/**
 * ContenteditableAttribute
 * <p>
 * The contenteditable attribute specifies whether the content of an element is editable or not.<br>
 * Note: When the contenteditable attribute is not set on an element, the element will inherit it from its parent.
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 4.0</li>
 * <li>Internet Explorer: 6.0</li>
 * <li>Firefox: 3.5</li>
 * <li>Opera: 10.1</li>
 * <li>Safari: 3.1</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class ContenteditableAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "contenteditable"
	 */
	protected $KEY = "contenteditable";

	/**
	 * Set $value
	 *
	 * @param ContenteditableEnum $value
	 *
	 * @return ContenteditableAttribute
	 */
	public function setValue($value)
	{
		if (!$value instanceof ContenteditableEnum) {
			throw new \Exception("use Sase\Commons\Htmlmodel\Enum\ContenteditableEnum value");
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
			'general'
		);

		return $coveredElements;
	}
}