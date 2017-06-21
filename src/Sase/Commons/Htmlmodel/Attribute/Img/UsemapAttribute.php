<?php
/**
 * UsemapAttribute
 *
 * usemap attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Img;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * UsemapAttribute
 * <p>
 * The usemap attribute specifies an image (or an object) as an image-map (an image-map is an image with clickable areas).<br>
 * The usemap attribute is associated with a &lt;map&gt; element's name or id attribute, and creates a relationship between the &lt;img&gt; and the &lt;map&gt;.<br>
 * Note: The usemap attribute cannot be used if the &lt;img&gt; element is a descendant of an &lt;a&gt; or &lt;button&gt; element.
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: Yes/Not supported</li>
 * <li>Internet Explorer: Yes</li>
 * <li>Firefox: Yes</li>
 * <li>Opera: Yes/Not supported</li>
 * <li>Safari: Yes/Not supported</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class UsemapAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "usemap"
	 */
	protected $KEY = "usemap";

	/**
	 * Set $value
	 *
	 * @param string $value
	 *
	 * @return UsemapAttribute
	 */
	public function setValue(string $value)
	{
		$this->value = \strtolower($value);

		return $this;
	}

	/**
	 * check the list of html elements that can add this Attribute
	 *
	 * @return string[]
	 */
	public function getAppliesTo()
	{
		$coveredElements = array(
			'img'
		);

		return $coveredElements;
	}
}