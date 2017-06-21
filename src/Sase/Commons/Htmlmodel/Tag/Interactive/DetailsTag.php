<?php
/**
 * DetailsTag
 *
 * details element representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Tag\Interactive;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\AbstractTag;

/**
 * DetailsTag
 * <p>
 * The &lt;details&gt; tag specifies additional details that the user can view or hide on demand.<br>
 * The &lt;details&gt; can be used to create an interactive widget that the user can open and close.<br>
 * Any sort of content can be put inside the &lt;details&gt; tag.<br>
 * The content of a &lt;details&gt; element should not be visible unless the open attribute is set.<br>
 * Tip: The &lt;summary&gt; tag is used to specify a visible heading for the details. The heading can be clicked to view/hide the details.
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>details {
 * display: block;
 * }
 * </pre>
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 12.0</li>
 * <li>Internet Explorer: Not supported</li>
 * <li>Firefox: 49.0</li>
 * <li>Opera: 15.0</li>
 * <li>Safari: 6.0</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class DetailsTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "details"
	 */
	protected $NAME = "details";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return DetailsTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}