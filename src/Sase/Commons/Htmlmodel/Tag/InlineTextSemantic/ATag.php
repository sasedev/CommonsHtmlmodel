<?php
/**
 * ATag
 *
 * a element representation Class
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
 * ATag
 * <p>
 * The &lt;a&gt; tag defines a hyperlink, which is used to link from one page to another.<br>
 * The most important attribute of the &lt;a&gt; element is the href attribute, which indicates the link's destination.<br>
 * By default, links will appear as follows in all browsers:
 * <ul>
 * <li>An unvisited link is underlined and blue</li>
 * <li>A visited link is underlined and purple</li>
 * <li>An active link is underlined and red</li>
 * </ul>
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>a:link, a:visited {
 * color: (internal value);
 * text-decoration: underline;
 * cursor: auto;
 * }
 * a:link:active, a:visited:active {
 * color: (internal value);
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
class ATag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "a"
	 */
	protected $NAME = "a";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return ATag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}