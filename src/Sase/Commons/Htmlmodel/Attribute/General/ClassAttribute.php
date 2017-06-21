<?php
/**
 * ClassAttribute
 *
 * class attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\General;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * ClassAttribute
 * <p>
 * The class attribute specifies one or more classnames for an element.<br>
 * The class attribute is mostly used to point to a class in a style sheet.<br>
 * However, it can also be used by a JavaScript (via the HTML DOM) to make changes to HTML elements with a specified class.
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
class ClassAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "class"
	 */
	protected $KEY = "class";

	/**
	 * Set $value
	 *
	 * @param string $value
	 *
	 * @return ClassAttribute
	 */
	public function setValue(string $value)
	{
		$this->value = \strtolower($value);

		return $this;
	}

	/**
	 * check the list of html elements that can add this Attribute
	 *
	 * @return string[]
	 */
	public function getAppliesTo()
	{
		$coveredElements = array(
			'general'
		);

		return $coveredElements;
	}
}