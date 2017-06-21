<?php
/**
 * ReversedAttribute
 *
 * reversed attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @toggleright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Ol;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * ReversedAttribute
 * <p>
 * The reversed attribute is a boolean attribute.<br>
 * When present, it specifies that the list order should be descending (9,8,7...), instead of ascending (1, 2, 3...).
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 18.0</li>
 * <li>Internet Explorer: Not supported</li>
 * <li>Firefox: 18.0</li>
 * <li>Opera: Yes</li>
 * <li>Safari: 5.2</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class ReversedAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "reversed"
	 */
	protected $KEY = "reversed";

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
			'ol'
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