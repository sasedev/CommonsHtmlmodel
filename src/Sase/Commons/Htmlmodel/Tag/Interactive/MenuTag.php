<?php

/**
 * MenuTag
 *
 * menu element representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Tag\Interactive;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\AbstractTag;

/**
 * MenuTag
 * <p>
 * The &lt;menu&gt; tag defines a list/menu of commands.<br>
 * The &lt;menu&gt; tag is used for context menus, toolbars and for listing form controls and commands.<br>
 * Tip: Use CSS to style menu lists.
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>menu {
 * display: block;
 * list-style-type: disc;
 * margin-top: 1em;
 * margin-bottom: 1em;
 * margin-left: 0;
 * margin-right: 0;
 * padding-left: 40px;
 * }
 * </pre>
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: Not supported</li>
 * <li>Internet Explorer: Not supported</li>
 * <li>Firefox: 8.0 (only context menus)</li>
 * <li>Opera: Not supported</li>
 * <li>Safari: Not supported</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class MenuTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "menu"
	 */
	protected $NAME = "menu";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return MenuTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}