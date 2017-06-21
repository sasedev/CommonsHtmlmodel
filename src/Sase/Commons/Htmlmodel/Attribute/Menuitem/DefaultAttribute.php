<?php
/**
 * DefaultAttribute
 *
 * checked attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Menuitem;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * DefaultAttribute
 * <p>
 * The checked attribute is a boolean attribute.<br>
 * When present, it specifies that the &lt;menuitem&gt; element should be checked (pre-selected) when the page loads.<br>
 * TNote: This attribute can only be used if type="checkbox" or type="radio".
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: Not supported</li>
 * <li>Internet Explorer: Not supported</li>
 * <li>Firefox: Not supported</li>
 * <li>Opera: Not supported</li>
 * <li>Safari: Not supported</li>
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
			'menuitem'
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