<?php
/**
 * DownloadAttribute
 *
 * download attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\A;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * DownloadAttribute
 * <p>
 * The download attribute specifies that the target will be downloaded when a user clicks on the hyperlink.<br>
 * This attribute is only used if the href attribute is set.<br>
 * The value of the attribute will be the name of the downloaded file. There are no restrictions on allowed values, and the browser will automatically detect the correct file extension and add it to the file (.img, .pdf, .txt, .html, etc.).<br>
 * If the value is omitted, the original filename is used.
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 14.0</li>
 * <li>Internet Explorer: 13.0</li>
 * <li>Firefox: 20.0</li>
 * <li>Opera: 15.0</li>
 * <li>Safari: 10.1</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class DownloadAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "download"
	 */
	protected $KEY = "download";

	/**
	 * check the list of html elements that can add this Attribute
	 *
	 * @return string[]
	 */
	public function getAppliesTo()
	{
		$coveredElements = array(
			'a'
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