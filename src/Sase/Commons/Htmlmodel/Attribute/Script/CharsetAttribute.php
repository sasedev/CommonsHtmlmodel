<?php
/**
 * CharsetAttribute
 *
 * charset attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Script;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\Enum\CharsetEnum;

/**
 * CharsetAttribute
 * <p>
 * The charset attribute specifies the character encoding used in an external script file.<br>
 * The charset attribute is used when the character encoding in an external script file differs from the encoding in the HTML document.
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
class CharsetAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "charset"
	 */
	protected $KEY = "charset";

	/**
	 * Set $value
	 *
	 * @param CharsetEnum $value
	 *
	 * @return CharsetAttribute
	 */
	public function setValue($value)
	{
		if (!$value instanceof CharsetEnum) {
			throw new \Exception("use Sase\Commons\Htmlmodel\Enum\CharsetEnum value");
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
			'script'
		);

		return $coveredElements;
	}
}