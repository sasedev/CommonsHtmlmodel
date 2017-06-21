<?php
/**
 * H3Tag
 *
 * h3 element representation Class
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
 * H3Tag
 * <p>
 * The &lt;h3&gt; tag is used to define HTML headings.<br>
 * The &lt;h1&gt; defines the most important heading.<br>
 * &lt;h6&gt; defines the least important heading.
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>h3 {
 * display: block;
 * font-size: 1.17em;
 * margin-top: 1em;
 * margin-bottom: 1em;
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
class H3Tag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "h3"
	 */
	protected $NAME = "h3";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return H3Tag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}