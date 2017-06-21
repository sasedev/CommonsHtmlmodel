<?php
/**
 * ControlsAttribute
 *
 * controls attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Audio;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * ControlsAttribute
 * <p>
 * The controls attribute is a boolean attribute.<br>
 * When present, it specifies that audio controls should be displayed.<br>
 * Controls should include:
 * <ul>
 * <li>Play</li>
 * <li>Pause</li>
 * <li>Seeking</li>
 * <li>Volume</li>
 * </ul>
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
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class ControlsAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "controls"
	 */
	protected $KEY = "controls";

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
			'audio'
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