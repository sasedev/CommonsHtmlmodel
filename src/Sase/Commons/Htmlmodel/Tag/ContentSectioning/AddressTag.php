<?php
/**
 * AddressTag
 *
 * address element representation Class
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
 * AddressTag
 * <p>
 * The &lt;address&gt; tag defines the contact information for the author/owner of a document or an article.<br>
 * If the &lt;address&gt; element is inside the &lt;body&gt; element, it represents contact information for the document.<br>
 * If the &lt;address&gt; element is inside an &lt;article&gt; element, it represents contact information for that article.<br>
 * The text in the &lt;address&gt; element usually renders in italic. Most browsers will add a line break before and after the address element.<br>
 * Tip: The &lt;address&gt; tag should NOT be used to describe a postal address, unless it is a part of the contact information.<br>
 * Tip: The &lt;address&gt; element will typically be included along with other information in a &lt;footer&gt; element.
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>address {
 * display: block;
 * font-style: italic;
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
class AddressTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "address"
	 */
	protected $NAME = "address";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return AddressTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}