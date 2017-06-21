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
namespace Sase\Commons\Htmlmodel\Attribute\Source;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\Enum\MediatypeEnum;

/**
 * TypeAttribute
 * <p>
 * The type attribute specifies the Internet media type (formerly known as MIME type) of the media resource.
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 4.0</li>
 * <li>Internet Explorer: 9.0</li>
 * <li>Firefox: 3.5</li>
 * <li>Opera: 10.5</li>
 * <li>Safari: 4.0</li>
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
	 * @param MediatypeEnum $value
	 *
	 * @return TypeAttribute
	 */
	public function setValue($value)
	{
		if (!$value instanceof MediatypeEnum) {
			throw new \Exception("use Sase\Commons\Htmlmodel\Enum\MediatypeEnum value");
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
			'source'
		);

		return $coveredElements;
	}
}