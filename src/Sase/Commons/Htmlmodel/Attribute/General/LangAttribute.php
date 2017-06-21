<?php
/**
 * LangAttribute
 *
 * lang attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\General;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\Enum\ISO639_1Enum;

/**
 * LangAttribute
 * <p>
 * The lang attribute specifies the language of the element's content.<br>
 * Common examples are "en" for English, "es" for Spanish, "fr" for France and so on.
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
class LangAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "lang"
	 */
	protected $KEY = "lang";

	/**
	 * Set $value ISO639_1Enum
	 *
	 * @param ISO639_1Enum $value
	 *
	 * @return LangAttribute
	 */
	public function setValue($value)
	{
		if (!$value instanceof ISO639_1Enum) {
			throw new \Exception("use Sase\Commons\Htmlmodel\Enum\ISO639_1Enum value");
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