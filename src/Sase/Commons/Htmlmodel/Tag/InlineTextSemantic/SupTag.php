<?php
/**
 * SupTag
 *
 * sup element representation Class
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
 * SupTag
 * <p>
 * The &lt;sup&gt; tag defines superscript text.<br>
 * Superscript text appears half a character above the normal line, and is sometimes rendered in a smaller font.<br>
 * Superscript text can be used for footnotes, like WWW<sup>[1]</sup>.<br>
 * Tip: Use the &lt;sub&gt; tag to define subscript text.
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre> sup {
 * vertical-align: super;
 * font-size: smaller;
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
class SupTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "sup"
	 */
	protected $NAME = "sup";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return SupTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}