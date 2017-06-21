<?php
/**
 * BrTag
 *
 * wbr element representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Tag\InlineTextSemantic;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\AbstractTag;

/**
 * BrTag
 * <p>
 * The &lt;wbr&gt; (Word Break Opportunity) tag specifies where in a text it would be ok to add a line-break.<br>
 * Tip: When a word is too long, or you are afraid that the browser will break your lines at the wrong place, you can use the &lt;wbr&gt; element to add word break opportunities.<br>
 * Tip: The &lt;wbr&gt; tag is useful for writing addresses or poems.<br>
 * Note: Use the &lt;wbr&gt; tag to enter line breaks, not to separate paragraphs.
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 1.0</li>
 * <li>Internet Explorer: 12.0</li>
 * <li>Firefox: 3.0</li>
 * <li>Opera: 11.7</li>
 * <li>Safari: 4.0</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class BrTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "wbr"
	 */
	protected $NAME = "wbr";

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
	 * @return BrTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}