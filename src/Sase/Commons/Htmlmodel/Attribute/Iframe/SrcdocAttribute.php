<?php
/**
 * SrcdocAttribute
 *
 * srcdoc attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Iframe;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * SrcdocAttribute
 * <p>
 * The srcdoc attribute specifies the HTML content of the page to show in the inline frame.<br>
 * Tip: This attribute is expected to be used together with the sandbox and seamless attributes.<br>
 * If a browser supports the srcdoc attribute, it will override the content specified in the src attribute (if present).<br>
 * If a browser does NOT support the srcdoc attribute, it will show the file specified in the src attribute instead (if present).
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 20.0</li>
 * <li>Internet Explorer: Not supported</li>
 * <li>Firefox: 25.0</li>
 * <li>Opera: 15.0</li>
 * <li>Safari: 6.0</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class SrcdocAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "srcdoc"
	 */
	protected $KEY = "srcdoc";

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
}