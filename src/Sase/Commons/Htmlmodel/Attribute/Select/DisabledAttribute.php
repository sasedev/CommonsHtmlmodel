<?php
/**
 * DisabledAttribute
 *
 * disabled attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Select;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * DisabledAttribute
 * <p>
 * The disabled attribute is a boolean attribute.<br>
 * When present, it specifies that the drop-down list should be disabled.<br>
 * A disabled drop-down list is unusable and un-clickable.<br>
 * The disabled attribute can be set to keep a user from using the drop-down list until some other condition has been met (like selecting a checkbox, etc.). Then, a JavaScript can remove the disabled value, and make the drop-down list usable.
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: Yes</li>
 * <li>Internet Explorer: Yes</li>
 * <li>Firefox: Yes</li>
 * <li>Opera: Yes</li>
 * <li>Safari: Yes</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class DisabledAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "disabled"
	 */
	protected $KEY = "disabled";

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
			'select'
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