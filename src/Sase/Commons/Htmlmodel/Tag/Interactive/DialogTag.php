<?php
/**
 * DialogTag
 *
 * dialog element representation Class
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
 * DialogTag
 * <p>
 * The &lt;dialog&gt; tag defines a dialog box or window.<br>
 * The &lt;dialog&gt; element makes it easy to create popup dialogs and modals on a web page.
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 37.0</li>
 * <li>Internet Explorer: Not supported</li>
 * <li>Firefox: Not supported</li>
 * <li>Opera: 24.0</li>
 * <li>Safari: Not supported</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class DialogTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "dialog"
	 */
	protected $NAME = "dialog";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return DialogTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}