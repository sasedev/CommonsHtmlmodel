<?php
/**
 * SrcAttribute
 *
 * src attribute representation Class
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
 * SrcAttribute
 * <p>
 * The src attribute specifies the URL of an external script file.<br>
 * If you want to run the same JavaScript on several pages in a web site, you should create an external JavaScript file, instead of writing the same script over and over again.<br>
 * Save the script file with a .js extension, and then refer to it using the src attribute in the &lt;script&gt; tag.<br>
 * Note: The external script file cannot contain the &lt;script&gt; tag.<br>
 * Note: Point to the external script file exactly where you would have written the script.
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
class SrcAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "src"
	 */
	protected $KEY = "src";

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
}