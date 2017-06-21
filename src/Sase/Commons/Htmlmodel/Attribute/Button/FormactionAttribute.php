<?php
/**
 * FormactionAttribute
 *
 * formaction attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Button;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * FormactionAttribute
 * <p>
 * The formaction attribute specifies where to send the form-data when a form is submitted.<br>
 * This attribute overrides the form's action attribute.<br>
 * The formaction attribute is only used for buttons with type="submit".
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 9.0</li>
 * <li>Internet Explorer: 10.0</li>
 * <li>Firefox: 4.0</li>
 * <li>Opera: 9.5</li>
 * <li>Safari: 5.1</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class FormactionAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "formaction"
	 */
	protected $KEY = "formaction";

	/**
	 * check the list of html elements that can add this Attribute
	 *
	 * @return string[]
	 */
	public function getAppliesTo()
	{
		$coveredElements = array(
			'button'
		);

		return $coveredElements;
	}
}