<?php
/**
 * PreTag
 *
 * pre element representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Tag\TextContent;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\AbstractTag;

/**
 * PreTag
 * <p>
 * The &lt;pre&gt; tag defines preformatted text.<br>
 * Text in a &lt;pre&gt; element is displayed in a fixed-width font (usually Courier), and it preserves both spaces and line breaks.<br>
 * Tip: Use the &lt;pre&gt; element when displaying text with unusual formatting, or some sort of computer code.
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>pre {
 * display: block;
 * font-family: monospace;
 * white-space: pre;
 * margin: 1em 0;
 * }
 * </pre>
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
class PreTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "pre"
	 */
	protected $NAME = "pre";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return PreTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}