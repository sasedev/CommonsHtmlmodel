<?php
/**
 * SrclangAttribute
 *
 * srclang attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Track;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\Enum\ISO639_1Enum;

/**
 * SrclangAttribute
 * <p>
 * The srclang attribute specifies the language of the track text data.<br>
 * This attribute is required if kind="subtitles".
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
class SrclangAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "srclang"
	 */
	protected $KEY = "srclang";

	/**
	 * Set $value
	 *
	 * @param ISO639_1Enum $value
	 *
	 * @return SrclangAttribute
	 */
	public function setValue($value)
	{
		if (!$value instanceof ISO639_1Enum) {
			throw new \Exception("use Sase\Commons\Htmlmodel\Enum\ISO639_1Enum value");
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