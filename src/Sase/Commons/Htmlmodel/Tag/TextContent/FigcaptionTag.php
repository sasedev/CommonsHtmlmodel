<?php
/**
 * FigcaptionTag
 *
 * figcaption element representation Class
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
 * FigcaptionTag
 * <p>
 * The &lt;figcaption&gt; tag defines a caption for a &lt;figure&gt; element.<br>
 * The &lt;figcaption&gt; element can be placed as the first or last child of the &lt;figure&gt; element.
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>figcaption {
 * display: block;
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
class FigcaptionTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "figcaption"
	 */
	protected $NAME = "figcaption";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return FigcaptionTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}