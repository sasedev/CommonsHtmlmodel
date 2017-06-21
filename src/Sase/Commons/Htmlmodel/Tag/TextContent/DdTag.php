<?php
/**
 * DdTag
 *
 * dd element representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Tag\TextContent;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\AbstractTag;

/**
 * DdTag
 * <p>
 * The &lt;dd&gt; tag is used to describe a term/name in a description list.<br>
 * The &lt;dd&gt; tag is used in conjunction with &lt;dl&gt; (defines a description list) and &lt;dt&gt; (defines terms/names).<br>
 * Inside a &lt;dd&gt; tag you can put paragraphs, line breaks, images, links, lists, etc.
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>dd {
 * display: block;
 * margin-left: 40px;
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
class DdTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "dd"
	 */
	protected $NAME = "dd";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return DdTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}