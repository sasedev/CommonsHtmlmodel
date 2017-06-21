<?php
/**
 * KeytypeAttribute
 *
 * keytype attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Input;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\Enum\KeytypeEnum;

/**
 * KeytypeAttribute
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
 * <li>Chrome: Yes</li>
 * <li>Internet Explorer: Not Supported</li>
 * <li>Firefox: Yes</li>
 * <li>Opera: Yes</li>
 * <li>Safari: Not Supported</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class KeytypeAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "keytype"
	 */
	protected $KEY = "keytype";

	/**
	 * Set $value
	 *
	 * @param KeytypeEnum $value
	 *
	 * @return KeytypeAttribute
	 */
	public function setValue($value)
	{
		if (!$value instanceof KeytypeEnum) {
			throw new \Exception("use Sase\Commons\Htmlmodel\Enum\KeytypeEnum value");
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
			'keygen'
		);

		return $coveredElements;
	}
}