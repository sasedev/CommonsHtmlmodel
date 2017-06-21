<?php
/**
 * OnblurAttribute
 *
 * onblur attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Event\Form;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * OnblurAttribute
 * <p>
 * The onblur attribute fires the moment that the element loses focus.<br>
 * Onblur is most often used with form validation code (e.g when the user leaves a form field).<br>
 * Tip: The onblur attribute is the opposite of the onfocus attribute.
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
class OnblurAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "onblur"
	 */
	protected $KEY = "onblur";

	/**
	 * check the list of html elements that can add this Attribute
	 *
	 * @return string[]
	 */
	public function getAppliesTo()
	{
		$coveredElements = array(
			'event',
			'eventform'
		);

		return $coveredElements;
	}
}