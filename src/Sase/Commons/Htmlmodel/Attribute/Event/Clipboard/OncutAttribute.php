<?php
/**
 * OncutAttribute
 *
 * oncut attribute representation Class
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
 * OncutAttribute
 * <p>
 * The oncut attribute fires when the user cuts the content of an element.<br>
 * Note: Although the oncut attribute is supported by all HTML elements, it is not actually possible to cut the content of, for example, a &lt;p&gt; element, UNLESS the element has set contenteditable to "true".<br>
 * Tip: There are three ways to cut the content of an element:
 * <ul>
 * <li>Press CTRL + X</li>
 * <li>Select "Cut" from the Edit menu in your browser</li>
 * <li>Right click to display the context menu and select the "Cut" command</li>
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
class OncutAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "oncut"
	 */
	protected $KEY = "oncut";

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