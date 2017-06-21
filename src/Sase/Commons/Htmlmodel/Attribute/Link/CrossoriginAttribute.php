<?php
/**
 * CrossoriginAttribute
 *
 * crossorigin attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Link;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\Enum\CrossoriginEnum;

/**
 * CrossoriginAttribute
 * <p>
 * Specifies how the element handles cross-origin requests
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 48.0</li>
 * <li>Internet Explorer: 11.0</li>
 * <li>Firefox: 44.0</li>
 * <li>Opera: 34.0</li>
 * <li>Safari: 9.0</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class CrossoriginAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "crossorigin"
	 */
	protected $KEY = "crossorigin";

	/**
	 * Set $value
	 *
	 * @param CrossoriginEnum $value
	 *
	 * @return CrossoriginAttribute
	 */
	public function setValue($value)
	{
		if (!$value instanceof CrossoriginEnum) {
			throw new \Exception("use Sase\Commons\Htmlmodel\Enum\CrossoriginEnum value");
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
			'link'
		);

		return $coveredElements;
	}
}