<?php
/**
 * HeaderTag
 *
 * header element representation Class
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
 * HeaderTag
 * <p>
 * The &lt;header&gt; element represents a container for introductory content or a set of navigational links.<br>
 * A &lt;header&gt; element typically contains:
 * <ul>
 * <li>one or more heading elements (&lt;h1&gt; - &lt;h6&gt;)</li>
 * <li>logo or icon</li>
 * <li>authorship information</li>
 * </ul>
 * You can have several &lt;header&gt; elements in one document.<br>
 * Note: A &lt;header&gt; tag cannot be placed within a &lt;footer&gt;, &lt;address&gt; or another &lt;header&gt; element.<br>
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>header {
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
class HeaderTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "header"
	 */
	protected $NAME = "header";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return HeaderTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}