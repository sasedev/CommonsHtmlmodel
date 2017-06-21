<?php

/**
 * MeterTag
 *
 * meter element representation Class
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
 * MeterTag
 * <p>
 * The &lt;meter&gt; tag defines a scalar measurement within a known range, or a fractional value.<br>
 * This is also known as a gauge.<br>
 * Examples: Disk usage, the relevance of a query result, etc.<br>
 * Note: The &lt;meter&gt; tag should not be used to indicate progress (as in a progress bar). For progress bars, use the &lt;progress&gt; tag.
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * None.
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 8.0</li>
 * <li>Internet Explorer: 13.0</li>
 * <li>Firefox: 6.0</li>
 * <li>Opera: 11.0</li>
 * <li>Safari: 16.0</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class MeterTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "meter"
	 */
	protected $NAME = "meter";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return MeterTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}