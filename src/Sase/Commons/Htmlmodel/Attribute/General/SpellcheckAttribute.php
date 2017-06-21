<?php
/**
 * SpellcheckAttribute
 *
 * spellcheck attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\General;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\Enum\SpellcheckEnum;

/**
 * SpellcheckAttribute
 * The spellcheck attribute specifies whether the element is to have its spelling and grammar checked or not.
 * The following can be spellchecked:
 * - Text values in input elements (not password)
 * - Text in &lt;textarea&gt; elements
 * - Text in editable elements
 * Browser Support:
 * - Chrome: 9.0
 * - Internet Explorer: 10.0
 * - Firefox: 2.0
 * - Opera: 10.5
 * - Safari: 5.1
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class SpellcheckAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "spellcheck"
	 */
	protected $KEY = "spellcheck";

	/**
	 * Set $value
	 *
	 * @param SpellcheckEnum $value
	 *
	 * @return SpellcheckAttribute
	 */
	public function setValue($value)
	{
		if (!$value instanceof SpellcheckEnum) {
			throw new \Exception("use Sase\Commons\Htmlmodel\Enum\SpellcheckEnum value");
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