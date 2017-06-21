<?php
/**
 * ColgroupTag
 *
 * colgroup element representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Tag\Table;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\AbstractTag;

/**
 * ColgroupTag
 * <p>
 * The &lt;colgroup&gt; tag specifies a group of one or more columns in a table for formatting.<br>
 * The &lt;colgroup&gt; tag is useful for applying styles to entire columns, instead of repeating the styles for each cell, for each row.<br>
 * Note: The &lt;colgroup&gt; tag must be a child of a &lt;table&gt; element, after any &lt;caption&gt; elements and before any &lt;thead&gt;, &lt;tbody&gt;, &lt;tfoot&gt;, and &lt;tr&gt; elements.<br>
 * Tip: To define different properties to a column within a &lt;colgroup&gt;, use the &lt;col&gt; tag within the &lt;colgroup&gt; tag.
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>colgroup {
 * display: table-column-group;
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
class ColgroupTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "colgroup"
	 */
	protected $NAME = "colgroup";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return ColgroupTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}