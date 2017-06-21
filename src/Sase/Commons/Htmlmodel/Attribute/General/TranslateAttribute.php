<?php
/**
 * TranslateAttribute
 *
 * translate attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\General;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\Enum\TranslateEnum;

/**
 * TranslateAttribute
 * Specifies whether the content of an element should be translated or not
 * Browser Support:
 * - Chrome: No
 * - Internet Explorer: No
 * - Firefox: No
 * - Opera: No
 * - Safari: No
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class TranslateAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "translate"
	 */
	protected $KEY = "translate";

	/**
	 * Set $value
	 *
	 * @param TranslateEnum $value
	 *
	 * @return TranslateAttribute
	 */
	public function setValue($value)
	{
		if (!$value instanceof TranslateEnum) {
			throw new \Exception("use Sase\Commons\Htmlmodel\Enum\TranslateEnum value");
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