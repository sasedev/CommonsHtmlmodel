<?php
/**
 * OncopyAttribute
 *
 * oncopy attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Event\Clipboard;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * OncopyAttribute
 * <p>
 * The oncopy attribute fires when the user copies the content of an element.<br>
 * Tip: The oncopy attribute also fires when the user copies an element, for example, an image, created with the &lt;img&gt; element.<br>
 * Tip: The oncopy attribute is mostly used on &lt;input&gt; elements with type="text".<br>
 * Tip: There are three ways to copy an element/the content of an element:
 * <ul>
 * <li>Press CTRL + C</li>
 * <li>Select "Copy" from the Edit menu in your browser</li>
 * <li>Right click to display the context menu and select the "Copy" command</li>
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
class OncopyAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "oncopy"
	 */
	protected $KEY = "oncopy";

	/**
	 * check the list of html elements that can add this Attribute
	 *
	 * @return string[]
	 */
	public function getAppliesTo()
	{
		$coveredElements = array(
			'event',
			'eventclipboard'
		);

		return $coveredElements;
	}
}