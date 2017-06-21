<?php
/**
 * ScopeAttribute
 *
 * scope attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Th;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\Enum\ScopeEnum;

/**
 * ScopeAttribute
 * <p>
 * The scope attribute specifies whether a header cell is a header for a column, row, or group of columns or rows.<br>
 * The scope attribute has no visual effect in ordinary web browsers, but can be used by screen readers.
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
class ScopeAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "scope"
	 */
	protected $KEY = "scope";

	/**
	 * Set $value
	 *
	 * @param ScopeEnum $value
	 *
	 * @return ScopeAttribute
	 */
	public function setValue($value)
	{
		if (!$value instanceof ScopeEnum) {
			throw new \Exception("use Sase\Commons\Htmlmodel\Enum\ScopeEnum value");
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
			'th'
		);

		return $coveredElements;
	}
}