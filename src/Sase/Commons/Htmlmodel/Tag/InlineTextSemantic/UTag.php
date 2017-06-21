<?php
/**
 * UTag
 *
 * u element representation Class
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
 * UTag
 * <p>
 * The &lt;u&gt; tag represents some text that should be stylistically different from normal text, such as misspelled words or proper nouns in Chinese.<br>
 * Tip: Avoid using the &lt;u&gt; element where it could be confused for a hyperlink.<br>
 * Note: The HTML 5 specification reminds developers that other elements are almost always more appropriate than &lt;u&gt;.<br>
 * The &lt;u&gt; element was deprecated in HTML 4.01. (the &lt;u&gt; element was used to define underlined text).<br>
 * The &lt;u&gt; element is redefined in HTML5, to represent text that should be stylistically different from normal text, such as misspelled words or proper nouns in Chinese.
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>u {
 * text-decoration: underline;
 * }
 * </pre>
 * </p>
 * <p>
 * Browser support:
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
class UTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "u"
	 */
	protected $NAME = "u";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return UTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}