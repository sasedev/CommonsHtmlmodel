<?php
/**
 * H6Tag
 *
 * h6 element representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Tag\ContentSectioning;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\AbstractTag;

/**
 * H6Tag
 * <p>
 * The &lt;h6&gt; tag is used to define HTML headings.<br>
 * The &lt;h1&gt; defines the most important heading.<br>
 * &lt;h6&gt; defines the least important heading.
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>h6 {
 * display: block;
 * font-size: .67em;
 * margin-top: 2.33em;
 * margin-bottom: 2.33em;
 * margin-left: 0;
 * margin-right: 0;
 * font-weight: bold;
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
class H6Tag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "h6"
	 */
	protected $NAME = "h6";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return H6Tag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}