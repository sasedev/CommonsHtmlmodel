<?php
/**
 * TrTag
 *
 * tr element representation Class
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
 * TrTag
 * <p>
 * The &lt;tr&gt; tag defines a row in an HTML table.<br>
 * A &lt;tr&gt; element contains one or more &lt;th&gt; or&lt;td&gt; elements.
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>tr {
 * display: table-row;
 * vertical-align: inherit;
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
class TrTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "tr"
	 */
	protected $NAME = "tr";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return TrTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}