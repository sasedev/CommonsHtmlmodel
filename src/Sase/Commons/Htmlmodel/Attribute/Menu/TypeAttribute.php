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
namespace Sase\Commons\Htmlmodel\Attribute\Map;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\Enum\MenutypeEnum;

/**
 * TypeAttribute
 * <p>
 * The type attribute specifies the type of menu.
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: Not supported</li>
 * <li>Internet Explorer: Not supported</li>
 * <li>Firefox: 8.0</li>
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
	 * @param MenutypeEnum $value
	 *
	 * @return TypeAttribute
	 */
	public function setValue($value)
	{
		if (!$value instanceof MenutypeEnum) {
			throw new \Exception("use Sase\Commons\Htmlmodel\Enum\MenutypeEnum value");
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
			'menu'
		);

		return $coveredElements;
	}
}