<?php

/**
 * MapTag
 *
 * map element representation Class
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
 * MapTag
 * <p>
 * The &lt;map&gt; tag is used to define a client-side image-map.<br>
 * An image-map is an image with clickable areas.<br>
 * The required name attribute of the &lt;map&gt; element is associated with the &lt;img&gt;'s usemap attribute and creates a relationship between the image and the map.<br>
 * The &lt;map&gt; element contains a number of &lt;area&gt; elements, that defines the clickable areas in the image map.
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>map {
 * display: inline;
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
class MapTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "map"
	 */
	protected $NAME = "map";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return MapTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}