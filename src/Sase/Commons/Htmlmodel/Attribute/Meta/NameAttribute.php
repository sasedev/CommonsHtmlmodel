<?php
/**
 * NameAttribute
 *
 * name attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Meta;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\Enum\MetanameEnum;

/**
 * NameAttribute
 * <p>
 * The name attribute specifies the name for the metadata.<br>
 * The name attribute specifies a name for the information/value of the content attribute.<br>
 * Note: If the http-equiv attribute is set, the name attribute should not be set.<br>
 * HTML5 introduced a method to let web designers take control over the viewport (the user's visible area of a web page), through the <meta> tag.
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
class NameAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "name"
	 */
	protected $KEY = "name";

	/**
	 * Set $value
	 *
	 * @param MetanameEnum $value
	 *
	 * @return NameAttribute
	 */
	public function setValue($value)
	{
		if (!$value instanceof MetanameEnum) {
			throw new \Exception("use Sase\Commons\Htmlmodel\Enum\MetanameEnum value");
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
			'meta'
		);

		return $coveredElements;
	}
}