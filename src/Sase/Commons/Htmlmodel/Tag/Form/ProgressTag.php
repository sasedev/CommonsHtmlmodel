<?php
/**
 * ProgressTag
 *
 * progress element representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Tag\Form;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\AbstractTag;

/**
 * ProgressTag
 * <p>
 * The &lt;progress&gt; tag represents the progress of a task.<br>
 * Tip: Use the &lt;progress&gt; tag in conjunction with JavaScript to display the progress of a task.<br>
 * Note: The &lt;progress&gt; tag is not suitable for representing a gauge (e.g. disk space usage or relevance of a query result).<br>
 * To represent a gauge, use the &lt;meter&gt; tag instead.
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * None.
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 8.0</li>
 * <li>Internet Explorer: 10.0</li>
 * <li>Firefox: 16.0</li>
 * <li>Opera: 11.0</li>
 * <li>Safari: 6.0</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class ProgressTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "progress"
	 */
	protected $NAME = "progress";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return ProgressTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}