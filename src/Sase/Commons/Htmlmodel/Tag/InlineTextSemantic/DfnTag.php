<?php
/**
 * DfnTag
 *
 * dfn element representation Class
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
 * DfnTag
 * <p>
 * The &lt;dfn&gt; tag represents the defining instance of a term in HTML.<br>
 * The defining instance is often the first use of a term in a document.<br>
 * The nearest parent of the &lt;dfn&gt; tag must also contain the definition/explanation for the term inside &lt;dfn&gt;.
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>dfn {
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
class DfnTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "dfn"
	 */
	protected $NAME = "dfn";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return DfnTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}