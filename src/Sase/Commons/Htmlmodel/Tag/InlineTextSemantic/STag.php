<?php
/**
 * STag
 *
 * s element representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Tag\InlineTextSemantic;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\AbstractTag;

/**
 * STag
 * <p>
 * The &lt;s&gt; tag specifies text that is no longer correct, accurate or relevant.<br>
 * The &lt;s&gt; tag should not be used to define replaced or deleted text, use the &lt;del&gt; tag to define replaced or deleted text.
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>s {
 * text-decoration: line-through;
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
class STag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "s"
	 */
	protected $NAME = "s";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return STag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}