<?php
/**
 * QTag
 *
 * q element representation Class
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
 * QTag
 * <p>
 * The &lt;q&gt; tag defines a short quotation.<br>
 * Browsers normally insert quotation marks around the quotation.<br>
 * Tip: Use &lt;blockquote&gt; to mark up a section that is quoted from another source.
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>q {
 * display: inline;
 * }
 * q:before {
 * content: open-quote;
 * }
 * q:after {
 * content: close-quote;
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
class QTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "q"
	 */
	protected $NAME = "q";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return QTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}