<?php
/**
 * KindAttribute
 *
 * kind attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Track;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\Enum\KindEnum;

/**
 * KindAttribute
 * <p>
 * The kind attribute specifies the kind of text track.
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 18.0</li>
 * <li>Internet Explorer: 10.0</li>
 * <li>Firefox: 31.0</li>
 * <li>Opera: 15.0</li>
 * <li>Safari: 6.0</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class KindAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "kind"
	 */
	protected $KEY = "kind";

	/**
	 * Set $value
	 *
	 * @param KindEnum $value
	 *
	 * @return KindAttribute
	 */
	public function setValue($value)
	{
		if (!$value instanceof KindEnum) {
			throw new \Exception("use Sase\Commons\Htmlmodel\Enum\KindEnum value");
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
			'track'
		);

		return $coveredElements;
	}
}