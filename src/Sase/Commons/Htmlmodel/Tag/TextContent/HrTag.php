<?php
/**
 * HrTag
 *
 * hr element representation Class
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
 * HrTag
 * <p>
 * The &lt;hr&gt; tag defines a thematic break in an HTML page (e.g a shift of topic).<br>
 * The &lt;hr&gt; element is used to separate content (or define a change) in an HTML page.
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>hr {
 * display: block;
 * margin-top: 0.5em;
 * margin-bottom: 0.5em;
 * margin-left: auto;
 * margin-right: auto;
 * border-style: inset;
 * border-width: 1px;
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
class HrTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string
	 */
	protected $NAME = "hr";

	/**
	 * Self closing html element
	 *
	 * @var bool
	 */
	protected $IS_EMPTYtrue;

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return HrTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}