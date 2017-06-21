<?php
/**
 * ImgTag
 *
 * img element representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Tag\Multimedia;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\AbstractTag;

/**
 * ImgTag
 * <p>
 * The &lt;img&gt; tag defines an image in an HTML page.<br>
 * The &lt;img&gt; tag has two required attributes: src and alt.<br>
 * Note: Images are not technically inserted into an HTML page, images are linked to HTML pages. The &lt;img&gt; tag creates a holding space for the referenced image.<br>
 * Tip: To link an image to another document, simply nest the &lt;img&gt; tag inside &lt;a&gt; tags.
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>img {
 * display: inline-block;
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
class ImgTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "img"
	 */
	protected $NAME = "img";

	/**
	 * Self closing html element
	 *
	 * @var bool
	 */
	protected $IS_EMPTYtrue;

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return ImgTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}