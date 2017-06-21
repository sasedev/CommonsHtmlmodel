<?php
/**
 * FormAttribute
 *
 * form attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Fieldset;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * FormAttribute
 * <p>
 * The form attribute specifies one or more forms the fieldset belongs to.
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
class FormAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "form"
	 */
	protected $KEY = "form";

	/**
	 * Set $value
	 *
	 * @param string $value
	 *
	 * @return FormAttribute
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
			'fieldset'
		);

		return $coveredElements;
	}
}