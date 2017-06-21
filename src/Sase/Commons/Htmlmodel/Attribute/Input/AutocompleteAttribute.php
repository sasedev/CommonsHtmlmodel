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
namespace Sase\Commons\Htmlmodel\Attribute\Input;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\Enum\AutocompleteEnum;

/**
 * AutocompleteAttribute
 * <p>
 * The autocomplete attribute specifies whether or not an input field should have autocomplete enabled.<br>
 * Autocomplete allows the browser to predict the value.<br>
 * When a user starts to type in a field, the browser should display options to fill in the field, based on earlier typed values.<br>
 * Note: The autocomplete attribute works with the following &lt;input&gt; types: text, search, url, tel, email, password, datepickers, range, and color.<br>
 * Tip: In some browsers you may need to activate an autocomplete function for this to work (Look under "Preferences" in the browser's menu).
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 17.0</li>
 * <li>Internet Explorer: 5.0</li>
 * <li>Firefox: 4.0</li>
 * <li>Opera: 9.6</li>
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
			'input'
		);

		return $coveredElements;
	}
}