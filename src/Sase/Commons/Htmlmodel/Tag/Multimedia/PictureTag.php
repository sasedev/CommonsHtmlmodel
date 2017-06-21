<?php
/**
 * PictureTag
 *
 * picture element representation Class
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
 * PictureTag
 * <p>
 * The &lt;picture&gt; tag gives web developers more flexibility in specifying image resources.<br>
 * The most common use of the &lt;picture&gt; element will be for art direction in responsive designs.<br>
 * Instead of having one image that is scaled up or down based on the viewport width, multiple images can be designed to more nicely fill the browser viewport.<br>
 * The &lt;picture&gt; element holds two different tags: one or more &lt;source&gt; tags and one &lt;img&gt; tag.<br>
 * The &lt;source&gt; element has the following attributes:
 * <ul>
 * <li>srcset (required) - defines the URL of the image to show</li>
 * <li>media - accepts any valid media query that would normally be defined in a CSS</li>
 * <li>sizes - defines a single width descriptor, a single media query with width descriptor, or a comma-delimited list of media queries with a width descriptor</li>
 * <li>type - defines the MIME type</li>
 * </ul>
 * The browser will use the attribute values to load the most appropriate image.<br>
 * The browser will use the first &lt;source&gt; element with a matching hint and ignore any following &lt;source&gt; tags.<br>
 * The &lt;img&gt; element is required as the last child tag of the &lt;picture&gt; declaration block.<br>
 * The &lt;img&gt; element is used to provide backward compatibility for browsers that do not support the &lt;picture&gt; element, or if none of the &lt;source&gt; tags matched.<br>
 * The &lt;picture&gt; element works similar to the &lt;video&gt; and &lt;audio&gt; elements.<br>
 * You set up different sources, and the first source that fits the preferences is the one being used.
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * None.
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 38.0</li>
 * <li>Internet Explorer: 13.0</li>
 * <li>Firefox: 38.0</li>
 * <li>Opera: 25.0</li>
 * <li>Safari: 9.1</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class PictureTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "picture"
	 */
	protected $NAME = "picture";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return PictureTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}