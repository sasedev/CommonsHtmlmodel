<?php
/**
 * ITag
 *
 * i element representation Class
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
 * ITag
 * <p>
 * The &lt;i&gt; tag defines a part of text in an alternate voice or mood.<br>
 * The &lt;i&gt; tag can be used to indicate a technical term, a phrase from another language, a thought, or a ship name, etc.<br>
 * Use the &lt;i&gt; element only when there is not a more appropriate semantic element, such as:
 * <ul>
 * <li>&lt;em&gt; (emphasized text)</li>
 * <li>&lt;strong&gt; (important text)</li>
 * <li>&lt;mark&gt; (marked/highlighted text)</li>
 * <li>&lt;cite&gt; (the title of a work)</li>
 * <li>&lt;dfn&gt; (a definition term)</li>
 * </ul>
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>i {
 * font-style: italic;
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
class ITag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "i"
	 */
	protected $NAME = "i";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return ITag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}