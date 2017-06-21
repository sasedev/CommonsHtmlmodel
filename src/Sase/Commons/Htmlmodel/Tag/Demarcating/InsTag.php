<?php
/**
 * InsTag
 *
 * ins element representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Tag\Demarcating;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\AbstractTag;

/**
 * InsTag
 * <p>
 * The &lt;ins&gt; tag defines a text that has been inserted into a document.<br>
 * Tip: Also look at the &lt;del&gt; tag to markup deleted text.<br>
 * Browsers will normally strike a line through deleted text and underline inserted text.
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>ins {
 * text-decoration: underline;
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
class InsTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var stringt NAME = "ins"
	 */
	protected $NAME = "ins";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return InsTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}