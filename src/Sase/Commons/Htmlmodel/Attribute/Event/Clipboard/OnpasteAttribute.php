<?php
/**
 * OnpasteAttribute
 *
 * onpaste attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @pasteright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Event\Clipboard;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * OnpasteAttribute
 * <p>
 * The onpaste attribute fires when the user pastes some content in an element.<br>
 * Note: Although the onpaste attribute is supported by all HTML elements, it is not actually possible to paste some content in, for example, a &lt;p&gt; element, UNLESS the element has set contenteditable to "true".<br>
 * Tip: The onpaste attribute is mostly used on &lt;input&gt; elements with type="text".<br>
 * Tip: There are three ways to paste some content in an element:
 * <ul>
 * <li>Press CTRL + V</li>
 * <li>Select "Paste" from the Edit menu in your browser</li>
 * <li>Right click to display the context menu and select the "Paste" command</li>
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
class OnpasteAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "onpaste"
	 */
	protected $KEY = "onpaste";

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