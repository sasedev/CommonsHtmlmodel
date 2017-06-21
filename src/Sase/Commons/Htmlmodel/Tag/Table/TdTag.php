<?php
/**
 * TdTag
 *
 * td element representation Class
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
 * TdTag
 * <p>
 * The &lt;td&gt; tag defines a standard cell in an HTML table.<br>
 * An HTML table has two kinds of cells:
 * <ul>
 * <li>Header cells - contains header information (created with the &lt;th&gt; element)</li>
 * <li>Standard cells - contains data (created with the &lt;td&gt; element)</li>
 * </ul>
 * The text in &lt;th&gt; elements are bold and centered by default.<br>
 * The text in &lt;td&gt; elements are regular and left-aligned by default.<br>
 * Tip: Use the colspan and rowspan attribute to let the content span over multiple columns or rows!
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>td {
 * display: table-cell;
 * vertical-align: inherit;
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
class TdTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "td"
	 */
	protected $NAME = "td";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return TdTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}