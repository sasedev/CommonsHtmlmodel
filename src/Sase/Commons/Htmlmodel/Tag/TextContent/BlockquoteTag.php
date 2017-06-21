<?php
/**
 * BlockquoteTag
 *
 * blockquote element representation Class
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
 * BlockquoteTag
 * <p>
 * The &lt;blockquote&gt; tag specifies a section that is quoted from another source.<br>
 * Browsers usually indent &lt;blockquote&gt; elements.<br>
 * Tip: Use &lt;q&gt; for inline (short) quotations.
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>blockquote {
 * display: block;
 * margin-top: 1em;
 * margin-bottom: 1em;
 * margin-left: 40px;
 * margin-right: 40px;
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
class BlockquoteTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "blockquote"
	 */
	protected $NAME = "blockquote";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return BlockquoteTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}