<?php
/**
 * TypeAttribute
 *
 * type attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Input;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\Enum\InputtypeEnum;

/**
 * TypeAttribute
 * <p>
 * The height attribute specifies the height of the &lt;input&gt; element.<br>
 * Note: The height attribute is used only with &lt;input type="image"&gt;.<br>
 * Tip: Always specify both the height and width attributes for images.<br>
 * If height and width are set, the space required for the image is reserved when the page is loaded. However, without these attributes, the browser does not know the size of the image, and cannot reserve the appropriate space to it.
 * The effect will be that the page layout will change during loading (while the images load).
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 1.0</li>
 * <li>Internet Explorer: Yes</li>
 * <li>Firefox: 16.0</li>
 * <li>Opera: 1.0</li>
 * <li>Safari: Yes</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class TypeAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "type"
	 */
	protected $KEY = "type";

	/**
	 * Set $value
	 *
	 * @param InputtypeEnum $value
	 *
	 * @return TypeAttribute
	 */
	public function setValue($value)
	{
		if (!$value instanceof InputtypeEnum) {
			throw new \Exception("use Sase\Commons\Htmlmodel\Enum\InputtypeEnum value");
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