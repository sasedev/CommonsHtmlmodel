<?php
/**
 * FigureTag
 *
 * figure element representation Class
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
 * FigureTag
 * <p>
 * The &lt;figure&gt; tag specifies self-contained content, like illustrations, diagrams, photos, code listings, etc.<br>
 * While the content of the &lt;figure&gt; element is related to the main flow, its position is independent of the main flow, and if removed it should not affect the flow of the document.<br>
 * Tip: The &lt;figcaption&gt; element is used to add a caption for the &lt;figure&gt; element.
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>figure {
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
 * <li>Chrome: 6.0</li>
 * <li>Internet Explorer: 9.0</li>
 * <li>Firefox: 4.0</li>
 * <li>Opera: 11.1</li>
 * <li>Safari: 5.0</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class FigureTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "figure"
	 */
	protected $NAME = "figure";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return FigureTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}