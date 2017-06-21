<?php
/**
 * DefaultAttribute
 *
 * default attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Track;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * DefaultAttribute
 * <p>
 * The default attribute is a boolean attribute.<br>
 * When present, it specifies that the track is to be enabled if the user's preferences do not indicate that another track would be more appropriate.<br>
 * Note: There must not be more than one track element with a default attribute per media element.
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
class DefaultAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "default"
	 */
	protected $KEY = "default";

	/**
	 * Contructor
	 */
	public function __construct()
	{
	}

	/**
	 * Set $value
	 *
	 * @param mixed $value
	 *
	 * @throws \Exception
	 */
	public function setValue($value)
	{
		throw new \Exception('No values are accepted for this attribute');
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

	/**
	 * Default string representation
	 */
	public function __toString()
	{
		return $this->getKey();
	}
}