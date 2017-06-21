<?php
/**
 * BTag
 *
 * b element representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Tag\InlineTextSemantic;

use Sase\Commons\Htmlmodel\AbstractTag;
use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * BTag
 * <p>
 * The &lt;b&gt; tag specifies bold text.<br>
 * Note: According to the HTML 5 specification, the &lt;b&gt; tag should be used as a LAST resort when no other tag is more appropriate.<br>
 * The HTML 5 specification states that headings should be denoted with the &lt;h1&gt; to &lt;h6&gt; tags, <br>
 * emphasized text should be denoted with the &lt;em&gt; tag, <br>
 * important text should be denoted with the &lt;strong&gt; tag, <br>
 * and marked/highlighted text should use the &lt;b&mark;tag.<br>
 * Tip: You can also use the CSS "font-weight" property to set bold text.
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>b {
 * font-weight: bold;
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
class BTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "b"
	 */
	protected $NAME = "b";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return BTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}