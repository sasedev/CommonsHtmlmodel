<?php

/**
 * NavTag
 *
 * nav element representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Tag\ContentSectioning;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\AbstractTag;

/**
 * NavTag
 * <p>
 * The &lt;nav&gt; tag defines a set of navigation links.<br>
 * Notice that NOT all links of a document should be inside a &lt;nav&gt; element.<br>
 * The &lt;nav&gt; element is intended only for major block of navigation links.<br>
 * Browsers, such as screen readers for disabled users, can use this element to determine whether to omit the initial rendering of this content.
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>nav {
 * display: block;
 * }
 * </pre>
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 6.0</li>
 * <li>Internet Explorer: 9.0</li>
 * <li>Firefox: 4.0</li>
 * <li>Opera: 11.1</li>
 * <li>Safari: 5.0</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class NavTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "nav"
	 */
	protected $NAME = "nav";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return NavTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}