<?php
/**
 * TableTag
 *
 * table element representation Class
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
 * TableTag
 * <p>
 * The &lt;table&gt; tag defines an HTML table.<br>
 * An HTML table consists of the &lt;table&gt; element and one or more &lt;tr&gt;, &lt;th&gt; and &lt;td&gt; elements.<br>
 * The &lt;tr&gt; element defines a table row, the &lt;th&gt; element defines a table header, and the &lt;td&gt; element defines a table cell.<br>
 * A more complex HTML table may also include &lt;caption&gt;, &lt;col&gt;, &lt;colgroup&gt;, &lt;thead&gt;, &lt;tfoot&gt;, and &lt;tbody&gt; elements.<br>
 * Note: Tables should not be used for page layout! Historically, some Web authors have misused tables in HTML as a way to control their page layout. However, there are a variety of alternatives to using HTML tables for layout, primarily using CSS.
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>table {
 * display: table;
 * border-collapse: separate;
 * border-spacing: 2px;
 * border-color: gray;
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
class TableTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "table"
	 */
	protected $NAME = "table";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return TableTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}