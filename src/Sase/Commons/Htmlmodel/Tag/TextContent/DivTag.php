<?php
/**
 * DivTag
 *
 * div element representation Class
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
 * DivTag
 * <p>
 * The &lt;div&gt; tag defines a division or a section in an HTML document.<br>
 * The &lt;div&gt; tag is used to group block-elements to format them with CSS.<br>
 * Tip: The &lt;div&gt; element is very often used together with CSS, to layout a web page.<br>
 * Note: By default, browsers always place a line break before and after the &lt;div&gt; element. However, this can be changed with CSS.
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>div {
 * display: block;
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
class DivTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "dev"
	 */
	protected $NAME = "div";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return DivTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}