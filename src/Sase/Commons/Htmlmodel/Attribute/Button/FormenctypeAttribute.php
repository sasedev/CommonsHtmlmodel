<?php
/**
 * FormenctypeAttribute
 *
 * formenctype attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Button;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\Enum\EnctypeEnum;

/**
 * FormenctypeAttribute
 * <p>
 * The formenctype attribute specifies where to send the form-data when a form is submitted.<br>
 * This attribute overrides the form's action attribute.<br>
 * The formenctype attribute is only used for buttons with type="submit".
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
class FormenctypeAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "formenctype"
	 */
	protected $KEY = "formenctype";

	/**
	 * Set $value
	 *
	 * @param EnctypeEnum $value
	 *
	 * @return FormenctypeAttribute
	 */
	public function setValue($value)
	{
		if (!$value instanceof EnctypeEnum) {
			throw new \Exception("use Sase\Commons\Htmlmodel\Enum\EnctypeEnum value");
		}

		return parent::setValue($value->getValue());
	}

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