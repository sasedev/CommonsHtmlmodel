<?php
/**
 * OnloadAttribute
 *
 * onload attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Event\Window;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * OnloadAttribute
 * <p>
 * The onload attribute fires when an object has been loaded.<br>
 * onload is most often used within the &lt;body&gt; element to execute a script once a web page has completely loaded all content (including images, script files, CSS files, etc.).<br>
 * However, it can be used on other elements as well (see "Supported HTML tags" below).<br>
 * For input elements, the onload attribute is only supported when &lt;input type="image"&gt;<br>
 * The onload attribute can be used to check the visitor's browser type and browser version, and load the proper version of the web page based on the information.
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
class OnloadAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "onload"
	 */
	protected $KEY = "onload";

	/**
	 * check the list of html elements that can add this Attribute
	 *
	 * @return string[]
	 */
	public function getAppliesTo()
	{
		$coveredElements = array(
			'event',
			'eventwindow'
		);

		return $coveredElements;
	}
}