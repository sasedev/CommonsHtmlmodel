<?php
/**
 * FooterTag
 *
 * footer element representation Class
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
 * FooterTag
 * <p>
 * The &lt;footer&gt; tag defines a footer for a document or section.<br>
 * The &lt;footer&gt; element should contain information about its containing element.<br>
 * A &lt;footer&gt; element typically contains:
 * <ul>
 * <li>authorship information</li>
 * <li>copyright information</li>
 * <li>contact information</li>
 * <li>sitemap</li>
 * <li>back to top links</li>
 * <li>related documents</li>
 * </ul>
 * You can have several &lt;footer&gt; elements in one document.
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>footer {
 * display: block;
 * }
 * </pre>
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 6.0</li>
 * <li>Internet Explorer: 9.0</li>
 * <li>Firefox: 4.0</li>
 * <li>Opera: 11.1</li>
 * <li>Safari: 5.0</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class FooterTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "footer"
	 */
	protected $NAME = "footer";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return FooterTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}