<?php
/**
 * AbbrTag
 *
 * abbr element representation Class
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
 * AbbrTag
 * <p>
 * The &lt;abbr&gt; tag defines an abbreviation or an acronym, like "Mr.", "Dec.", "ASAP", "ATM".<br>
 * Tip: An abbreviation and an acronym are both shortened versions of something else.<br>
 * Both are often represented as a series of letters.<br>
 * Marking up abbreviations can give useful information to browsers, translation systems and search-engines.
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * None.
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
class AbbrTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "abbr"
	 */
	protected $NAME = "abbr";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return AbbrTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}