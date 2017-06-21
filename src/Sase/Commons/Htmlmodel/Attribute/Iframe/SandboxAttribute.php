<?php
/**
 * SandboxAttribute
 *
 * sandbox attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @toggleright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Iframe;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\Enum\SandboxEnum;

/**
 * SandboxAttribute
 * <p>
 * The sandbox attribute is a boolean attribute.<br>
 * The sandbox attribute enables an extra set of restrictions for the content in the iframe.<br>
 * When the sandbox attribute is present, and it will:
 * <ul>
 * <li>treat the content as being from a unique origin</li>
 * <li>block form submission</li>
 * <li>block script execution</li>
 * <li>disable APIs<li>
 * <li>prevent links from targeting other browsing contexts</li>
 * <li>prevent content from using plugins (through &lt;embed&gt;, &lt;object&gt;, &lt;applet&gt;, or other)</li>
 * <li>prevent the content to navigate its top-level browsing context</li>
 * <li>block automatically triggered features (such as automatically playing a video or automatically focusing a form control)</li>
 * </ul>
 * The value of the sandbox attribute can either be just sandbox (then all restrictions are applied), or a space-separated list of pre-defined values that will REMOVE the particular restrictions.
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 4.0</li>
 * <li>Internet Explorer: 10.0</li>
 * <li>Firefox: 17.0</li>
 * <li>Opera: 15.0</li>
 * <li>Safari: 5.0</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class SandboxAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "sandbox"
	 */
	protected $KEY = "sandbox";

	/**
	 * Contructor
	 *
	 * @param array $value
	 *        	an array of {@link SandboxEnum} objects
	 */
	public function __construct(array $value = array())
	{
		$this->setValue($value);
	}

	/**
	 * Set $value
	 *
	 * @param array $value
	 *        	an array of {@link SandboxEnum} objects
	 * @throws \Exception
	 */
	public function setValue($value = array())
	{
		$newval = "";
		if (\is_array($value)) {
			foreach ($value as $val) {
				if ($val instanceof SandboxEnum) {
					$newval .= ' ' . $val->getValue();
				}
			}
			$newval = \trim($newval);
		}

		return parent::setValue($newval);
	}

	/**
	 * check the list of html elements that can add this Attribute
	 *
	 * @return string[]
	 */
	public function getAppliesTo()
	{
		$coveredElements = array(
			'iframe'
		);

		return $coveredElements;
	}

	/**
	 * Default string representation
	 */
	public function __toString()
	{
		if (null == $this->getValue() || \trim($this->getValue()) == '') {
			return $this->getKey();
		}
		return parent::__toString();
	}
}