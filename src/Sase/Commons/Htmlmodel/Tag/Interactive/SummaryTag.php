<?php
/**
 * SummaryTag
 *
 * summary element representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Tag\Interactive;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\AbstractTag;

/**
 * SummaryTag
 * <p>
 * The &lt;summary&gt; tag defines a visible heading for the &lt;details&gt; element.<br>
 * The heading can be clicked to view/hide the details.<br>
 * Note: The &lt;summary&gt; element should be the first child element of the &lt;details&gt; element.
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>summary {
 * display: block;
 * }
 * </pre>
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 12.0</li>
 * <li>Internet Explorer: Not supported</li>
 * <li>Firefox: 48.0</li>
 * <li>Opera: 15.0</li>
 * <li>Safari: 6.0</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class SummaryTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "summary"
	 */
	protected $NAME = "summary";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return SummaryTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}