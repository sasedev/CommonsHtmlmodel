<?php
/**
 * DlTag
 *
 * dl element representation Class
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
 * DlTag
 * <p>
 * The &lt;dl&gt; tag defines a description list.<br>
 * The &lt;dl&gt; tag is used in conjunction with &lt;dt&gt; (defines terms/names) and &lt;dd&gt; (describes each term/name).
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>dl {
 * display: block;
 * margin-top: 1em;
 * margin-bottom: 1em;
 * margin-left: 0;
 * margin-right: 0;
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
class DlTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "dl"
	 */
	protected $NAME = "dl";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return DlTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}