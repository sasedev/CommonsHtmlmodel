<?php
/**
 * NoscriptTag
 *
 * noscript element representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Tag\Scripting;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\AbstractTag;

/**
 * NoscriptTag
 * <p>
 * The &lt;noscript&gt; tag defines an alternate content for users that have disabled scripts in their browser or have a browser that doesn't support script.<br>
 * The &lt;noscript&gt; element can be used in both &lt;head&gt; and &lt;body&gt;<br>
 * When used inside the &lt;head&gt; element: &lt;noscript&gt; must contain only &lt;link&gt;, &lt;style&gt;, and &lt;meta&gt; elements.<br>
 * The content inside the &lt;noscript&gt; element will be displayed if scripts are not supported, or are disabled in the user's browser.<br>
 * Tip: It is also a good practice to use the comment tag to "hide" scripts from browsers without support for client-side scripts (so they don't show them as plain text)
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * None.
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
class NoscriptTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "noscript"
	 */
	protected $NAME = "noscript";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return NoscriptTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}