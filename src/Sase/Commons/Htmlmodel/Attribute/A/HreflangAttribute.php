<?php
/**
 * HreflangAttribute
 *
 * hreflang attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\A;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\Enum\ISO639_1Enum;

/**
 * HreflangAttribute
 * <p>
 * The hreflang attribute specifies the language of the linked document.<br>
 * This attribute is only used if the href attribute is set.<br>
 * Note: This attribute is purely advisory.
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
class HreflangAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "hreflang"
	 */
	protected $KEY = "hreflang";

	/**
	 * Set $value
	 *
	 * @param ISO639_1Enum $value
	 *
	 * @return HreflangAttribute
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
			'a'
		);

		return $coveredElements;
	}
}