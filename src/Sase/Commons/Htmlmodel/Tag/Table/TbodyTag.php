<?php
/**
 * TbodyTag
 *
 * tbody element representation Class
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
 * TbodyTag
 * <p>
 * The &lt;tbody&gt; tag is used to group the body content in an HTML table.<br>
 * The &lt;tbody&gt; element is used in conjunction with the &lt;thead&gt; and &lt;tfoot&gt; elements to specify each part of a table (body, header, footer).<br>
 * Browsers can use these elements to enable scrolling of the table body independently of the header and footer.<br>
 * Also, when printing a large table that spans multiple pages, these elements can enable the table header and footer to be printed at the top and bottom of each page.<br>
 * The &lt;tbody&gt; tag must be used in the following context: As a child of a &lt;table&gt; element, after any &lt;caption&gt;, &lt;colgroup&gt;, and &lt;thead&gt; elements.<br>
 * Note: The &lt;tbody&gt; element must have one or more &lt;tr&gt; tags inside.<br>
 * Tip: The &lt;thead&gt;, &lt;tbody&gt;, and &lt;tfoot&gt; elements will not affect the layout of the table by default.<br>
 * However, you can use CSS to style these elements.
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>tbody {
 * display: table-row-group;
 * vertical-align: middle;
 * border-color: inherit;
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
class TbodyTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "tbody"
	 */
	protected $NAME = "tbody";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return TbodyTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}