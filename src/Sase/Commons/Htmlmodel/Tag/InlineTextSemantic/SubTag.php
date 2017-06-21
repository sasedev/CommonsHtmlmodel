<?php
/**
 * SubTag
 *
 * sub element representation Class
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
 * SubTag
 * <p>
 * The &lt;sub&gt; tag defines subscript text.<br>
 * Subscript text appears half a character below the normal line, and is sometimes rendered in a smaller font.<br>
 * Subscript text can be used for chemical formulas, like H<sub>2</sub>O.<br>
 * Tip: Use the &lt;sub&gt; tag to define superscripted text.
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre> sub {
 * vertical-align: sub;
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
class SubTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "sub"
	 */
	protected $NAME = "sub";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return SubTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}