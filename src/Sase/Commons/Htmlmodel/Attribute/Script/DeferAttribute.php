<?php
/**
 * DeferAttribute
 *
 * defer attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Script;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * DeferAttribute
 * <p>
 * The defer attribute is a boolean attribute.<br>
 * When present, it specifies that the script is executed when the page has finished parsing.<br>
 * Note: The defer attribute is only for external scripts (should only be used if the src attribute is present).<br>
 * Note: There are several ways an external script can be executed:
 * <ul>
 * <li>If async is present: The script is executed asynchronously with the rest of the page (the script will be executed while the page continues the parsing)</li>
 * <li>If async is not present and defer is present: The script is executed when the page has finished parsing</li>
 * <li>If neither async or defer is present: The script is fetched and executed immediately, before the browser continues parsing the page</li>
 * </ul>
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: Yes</li>
 * <li>Internet Explorer: 10.0</li>
 * <li>Firefox: 3.6</li>
 * <li>Opera: 15.0</li>
 * <li>Safari: Yes</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class DeferAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "defer"
	 */
	protected $KEY = "defer";

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
			'script'
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