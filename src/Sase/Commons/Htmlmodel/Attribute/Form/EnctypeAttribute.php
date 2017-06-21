<?php
/**
 * EnctypeAttribute
 *
 * enctype attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Form;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\Enum\EnctypeEnum;

/**
 * EnctypeAttribute
 * <p>
 * The enctype attribute specifies how the form-data should be encoded when submitting it to the server.<br>
 * Note: The enctype attribute can be used only if method="post".
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
class EnctypeAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "enctype"
	 */
	protected $KEY = "enctype";

	/**
	 * Set $value
	 *
	 * @param EnctypeEnum $value
	 *
	 * @return EnctypeAttribute
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
			'form'
		);

		return $coveredElements;
	}
}