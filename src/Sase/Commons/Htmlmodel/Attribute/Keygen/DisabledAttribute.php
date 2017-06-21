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
namespace Sase\Commons\Htmlmodel\Attribute\Keygen;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * DisabledAttribute
 * <p>
 * The disabled attribute is a boolean attribute.<br>
 * When present, it specifies that the &lt;keygen&gt; should be disabled.<br>
 * A disabled field is unusable and un-editable.<br>
 * The disabled attribute can be set to keep a user from using the field until some other condition has been met (like selecting a checkbox, etc.).<br>
 * Then, a JavaScript could remove the disabled value, and make the field usable.
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: Yes</li>
 * <li>Internet Explorer: Not supported</li>
 * <li>Firefox: Yes</li>
 * <li>Opera: Yes</li>
 * <li>Safari: 6.0</li>
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
			'keygen'
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