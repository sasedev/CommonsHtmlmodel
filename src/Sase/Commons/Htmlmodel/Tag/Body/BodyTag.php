<?php
/**
 * BodyTag
 *
 * body element representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Tag\Body;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\AbstractTag;

/**
 * BodyTag
 * <p>
 * The &lt;body&gt; tag defines the document's body.<br>
 * The &lt;body&gt; element contains all the contents of an HTML document, such as text, hyperlinks, images, tables, lists, etc.
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>body {
 * display: block;
 * margin: 8px;
 * }
 * body:focus {
 * outline: none;
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
class BodyTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "body"
	 */
	protected $NAME = "body";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return BodyTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}