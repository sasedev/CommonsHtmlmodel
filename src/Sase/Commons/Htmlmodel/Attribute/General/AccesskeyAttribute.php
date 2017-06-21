<?php
/**
 * AccesskeyAttribute
 *
 * accesskey attribute representation Class
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
 * AccesskeyAttribute
 * <p>
 * The accesskey attribute specifies a shortcut key to activate/focus an element.<br>
 * Note: The way of accessing the shortcut key is varying in different browsers.<br>
 * However, in most browsers the shortcut can be set to another combination of keys.<br>
 * Tip: The behavior if more than one element has the same access key differs:
 * <ul>
 * <li>IE, Firefox: The next element with the pressed access key will be activated</li>
 * <li>Chrome, Safari: The last element with the pressed access key will be activated</li>
 * <li>Opera: The first element with the pressed access key will be activated</li>
 * </ul>
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
class AccesskeyAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "accesskey"
	 */
	protected $KEY = "accesskey";

	/**
	 * Set $value
	 *
	 * @param string $value
	 *
	 * @return AccesskeyAttribute
	 */
	public function setValue(string $value)
	{
		if (\strlen($value) != 1) {
			throw new \Exception('Only single character value is accepted');
		}

		$this->value = $value;

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