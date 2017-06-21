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
namespace Sase\Commons\Htmlmodel\Attribute\Menuitem;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\Enum\MenuitemtypeEnum;

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
 * <li>Chrome: Not supported</li>
 * <li>Internet Explorer: Not supported</li>
 * <li>Firefox: Not supported</li>
 * <li>Opera: Not supported</li>
 * <li>Safari: Not supported</li>
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
	 * @param MenuitemtypeEnum $value
	 *
	 * @return TypeAttribute
	 */
	public function setValue($value)
	{
		if (!$value instanceof MenuitemtypeEnum) {
			throw new \Exception("use Sase\Commons\Htmlmodel\Enum\MenuitemtypeEnum value");
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
			'menuitem'
		);

		return $coveredElements;
	}
}