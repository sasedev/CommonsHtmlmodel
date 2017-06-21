<?php
/**
 * TheadTag
 *
 * thead element representation Class
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
 * TheadTag
 * <p>
 * The &lt;thead&gt; tag is used to group header content in an HTML table.<br>
 * The &lt;thead&gt; element is used in conjunction with the &lt;tbody&gt; and &lt;tfoot&gt; elements to specify each part of a table (header, body, footer).<br>
 * Browsers can use these elements to enable scrolling of the table body independently of the header and footer.<br>
 * Also, when printing a large table that spans multiple pages, these elements can enable the table header and footer to be printed at the top and bottom of each page.<br>
 * The &lt;thead&gt; tag must be used in the following context: As a child of a &lt;table&gt; element, after any &lt;caption&gt;, &lt;colgroup&gt;, and before any &lt;tbody&gt;, &lt;tfoot&gt;, and &lt;tr&gt; elements.<br>
 * Note: The &lt;thead&gt; element must have one or more &lt;tr&gt; tags inside.<br>
 * Tip: The &lt;thead&gt;, &lt;tbody&gt;, and &lt;tfoot&gt; elements will not affect the layout of the table by default.<br>
 * However, you can use CSS to style these elements.
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>thead {
 * display: table-header-group;
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
class TheadTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "thead"
	 */
	protected $NAME = "thead";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return TheadTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}