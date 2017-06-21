<?php
/**
 * AreaTag
 *
 * area element representation Class
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
 * AreaTag
 * <p>
 * The &lt;area&gt; tag defines an area inside an image-map (an image-map is an image with clickable areas).<br>
 * The &lt;area&gt; element is always nested inside a &lt;map&gt; tag.<br>
 * Note: The usemap attribute in the &lt;area&gt; tag is associated with the &lt;map&gt; ment's name attribute, and creates a relationship between the image and the map.<br>
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>area {
 * display: none;
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
class AreaTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "area"
	 */
	protected $NAME = "area";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return AreaTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}