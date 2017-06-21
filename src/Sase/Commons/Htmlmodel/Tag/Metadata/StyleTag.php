<?php
/**
 * StyleTag
 *
 * style element representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Tag\Metadata;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\AbstractTag;

/**
 * StyleTag
 * <p>
 * The &lt;style&gt; tag is used to define style information for an HTML document.<br>
 * Inside the &lt;style&gt; element you specify how HTML elements should render in a browser.<br>
 * Each HTML document can contain multiple &lt;style&gt; tags.<br>
 * Tip: To link to an external style sheet, use the &lt;link&gt; tag.<br>
 * Note: If the "scoped" attribute is not used, each &lt;style&gt; tag must be located in the head section.
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>style {
 * display: none;
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
class StyleTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "style"
	 */
	protected $NAME = "style";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return StyleTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}