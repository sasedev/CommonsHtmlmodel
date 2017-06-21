<?php
/**
 * RtTag
 *
 * rt element representation Class
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
 * RtTag
 * <p>
 * The &lt;rt&gt; tag defines an explanation or pronunciation of characters (for East Asian typography) in a ruby annotation.<br>
 * Use the &lt;rt&gt; tag together with the &lt;ruby&gt; and the &lt;rp&gt; tags:<br>
 * The &lt;ruby&gt; element consists of one or more characters that needs an explanation/pronunciation, and an &lt;rt&gt; element that gives that information, and an optional &lt;rp&gt; element that defines what to show for browsers that not support ruby annotations.
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>rt {
 * line-height: normal;
 * }
 * </pre>
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 5.0</li>
 * <li>Internet Explorer: 5.5</li>
 * <li>Firefox: 38.0</li>
 * <li>Opera: 15.0</li>
 * <li>Safari: 5.0</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class RtTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "rt"
	 */
	protected $NAME = "rt";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return RtTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}