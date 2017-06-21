<?php
/**
 * AutocompleteAttribute
 *
 * autocomplete attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Form;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\Enum\AutocompleteEnum;

/**
 * AutocompleteAttribute
 * <p>
 * The autocomplete attribute specifies whether a form should have autocomplete on or off.<br>
 * When autocomplete is on, the browser automatically complete values based on values that the user has entered before.<br>
 * Tip: It is possible to have autocomplete "on" for the form, and "off" for specific input fields, or vice versa.
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: Yes</li>
 * <li>Internet Explorer: Yes</li>
 * <li>Firefox: 4.0</li>
 * <li>Opera: 15.0</li>
 * <li>Safari: 5.2</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class AutocompleteAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "autocomplete"
	 */
	protected $KEY = "autocomplete";

	/**
	 * Set $value
	 *
	 * @param AutocompleteEnum $value
	 *
	 * @return AutocompleteAttribute
	 */
	public function setValue($value)
	{
		if (!$value instanceof AutocompleteEnum) {
			throw new \Exception("use Sase\Commons\Htmlmodel\Enum\AutocompleteEnum value");
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
			'form'
		);

		return $coveredElements;
	}
}