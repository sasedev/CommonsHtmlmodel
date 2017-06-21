<?php
/**
 * BaseTag
 *
 * base element representation Class
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
 * BaseTag
 * <p>
 * The &lt;base&gt; tag specifies the base URL/target for all relative URLs in a document.<br>
 * There can be at maximum one &lt;base&gt; element in a document, and it must be inside the &lt;head&gt; element.<br>
 * Tip: Put the &lt;base&gt; tag as the first element inside the &lt;head&gt; element, so that other elements in the head section uses the information from the &lt;base&gt; element.<br>
 * Note: If the &lt;base&gt; tag is present, it must have either an href attribute or a target attribute, or both.
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
class BaseTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "base"
	 */
	protected $NAME = "base";

	/**
	 * Self closing html element
	 *
	 * @var bool
	 */
	protected $IS_EMPTYtrue;

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return BaseTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}