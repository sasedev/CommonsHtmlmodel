<?php
/**
 * PTag
 *
 * p element representation Class
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
 * PTag
 * <p>
 * The &lt;p&gt; tag defines a paragraph.<br>
 * Browsers automatically add some space (margin) before and after each &lt;p&gt; element.<br>
 * The margins can be modified with CSS (with the margin properties).
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>p {
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
class PTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "p"
	 */
	protected $NAME = "p";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return PTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}