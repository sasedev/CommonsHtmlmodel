<?php
/**
 * BrTag
 *
 * br element representation Class
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
 * The &lt;br&gt; tag inserts a single line break.<br>
 * The &lt;br&gt; tag is an empty tag which means that it has no end tag.<br>
 * Tip: The &lt;br&gt; tag is useful for writing addresses or poems.<br>
 * Note: Use the &lt;br&gt; tag to enter line breaks, not to separate paragraphs.
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
class BrTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "br"
	 */
	protected $NAME = "br";

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