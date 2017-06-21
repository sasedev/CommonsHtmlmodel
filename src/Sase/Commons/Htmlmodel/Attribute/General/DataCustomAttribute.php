<?php
/**
 * DataCustomAttribute
 *
 * data-* attribute representation Class
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
 * DataCustomAttribute
 * <p>
 * The data-* attributes is used to store custom data private to the page or application.<br>
 * The data-* attributes gives us the ability to embed custom data attributes on all HTML elements.<br>
 * The stored (custom) data can then be used in the page's JavaScript to create a more engaging user experience (without any Ajax calls or server-side database queries).<br>
 * The data-* attributes consist of two parts:
 * <ol>
 * <li>The attribute name should not contain any uppercase letters, and must be at least one character long after the prefix "data-"</li>
 * <li>The attribute value can be any string</li>
 * </ol>
 * Note: Custom attributes prefixed with "data-" will be completely ignored by the user agent.
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 4.0</li>
 * <li>Internet Explorer: 5.5</li>
 * <li>Firefox: 2.0</li>
 * <li>Opera: 3.1</li>
 * <li>Safari: 9.6</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class DataCustomAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "data-*"
	 */
	protected $KEY = "data-";

	/**
	 * used to store second part of the data-* attribute
	 *
	 * @var string $key
	 */
	protected $key = "";

	/**
	 * Contructor
	 *
	 * @param string $key
	 *
	 * @param string $value
	 */
	public function __construct(string $key, $value = null)
	{
		$this->setKey($key);
		$this->setValue($value);
	}

	/**
	 * Get $key
	 *
	 * @return string
	 */
	public function getKey()
	{
		$key = \strtolower($this->KEY . $this->key);

		return $key;
	}

	/**
	 * Set $key
	 *
	 * @param string $key
	 *
	 * @return DataCustomAttribute
	 */
	public function setKey(string $key)
	{
		$range = "[";
		$range .= "a-z";
		$range .= "0-9";
		$range .= "-_.·";
		$range .= "\x{0300}-\x{036F}";
		$range .= "\x{203F}-\x{2040}";
		$range .= "\x{C0}-\x{D6}";
		$range .= "\x{D8}-\x{F6}";
		$range .= "\x{F8}-\x{2FF}";
		$range .= "\x{370}-\x{37D}";
		$range .= "\x{37F}-\x{1FFF}";
		$range .= "\x{200C}-\x{200D}";
		$range .= "\x{2070}-\x{218F}";
		$range .= "\x{2C00}-\x{2FEF}";
		$range .= "\x{3001}-\x{D7FF}";
		$range .= "\x{F900}-\x{FDCF}";
		$range .= "\x{FDF0}-\x{FFFD}";
		$range .= "\x{10000}-\x{EFFFF}";
		$range .= "]";
		$pregrange = '/^' . $range . '+$/u';
		if (!\preg_match($pregrange, $key)) {
			throw new \Exception("only chars in $range are accepted");
		}
		$this->key = $key;

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