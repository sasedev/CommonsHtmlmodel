<?php
/**
 * HeadTag
 *
 * head element representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Tag\Metadata;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\AbstractTag;

/**
 * HeadTag
 * <p>
 * The &lt;head&gt; element is a container for all the head elements.<br>
 * The &lt;head&gt; element can include a title for the document, scripts, styles, meta information, and more.<br>
 * The following elements can go inside the &lt;head&gt; element:
 * <ul>
 * <li>&lt;title&gt;</li>
 * <li>&lt;style&gt;</li>
 * <li>&lt;base&gt;</li>
 * <li>&lt;link&gt;</li>
 * <li>&lt;meta&gt;</li>
 * <li>&lt;script&gt;</li>
 * <li>&lt;noscript&gt;</li>
 * </ul>
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>head {
 * display: none;
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
class HeadTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "head"
	 */
	protected $NAME = "head";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return HeadTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}