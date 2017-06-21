<?php
/**
 * MutedAttribute
 *
 * muted attribute representation Class
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
 * MutedAttribute
 * <p>
 * The muted attribute is a boolean attribute.<br>
 * When present, it specifies that the audio output of the video should be muted.
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 4.0</li>
 * <li>Internet Explorer: 10.0</li>
 * <li>Firefox: 11.0</li>
 * <li>Opera: 10.5</li>
 * <li>Safari: 7.1</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class MutedAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "muted"
	 */
	protected $KEY = "muted";

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