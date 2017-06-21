<?php
/**
 * XmlnsAttribute
 *
 * xmlns attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Html;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * XmlnsAttribute
 * <p>
 * The xmlns attribute specifies the xml namespace for a document.<br>
 * Note: The xmlns attribute is optional in HTML5.
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
class XmlnsAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "xmlns"
	 */
	protected $KEY = "xmlns";

	/**
	 * Contructor
	 *
	 * @param mixed $value
	 */
	public function __construct(string $value = 'http://www.w3.org/1999/xhtml')
	{
		$this->setValue($value);
	}

	/**
	 * check the list of html elements that can add this Attribute
	 *
	 * @return string[]
	 */
	public function getAppliesTo()
	{
		$coveredElements = array(
			'html'
		);

		return $coveredElements;
	}
}