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
namespace Sase\Commons\Htmlmodel\Attribute\Object;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * UsemapAttribute
 * <p>
 * The usemap attribute specifies the name of an image-map to use with the object.<br>
 * An image-map is an image with clickable areas.<br>
 * The usemap attribute is associated with a &lt;map&gt; element's name attribute, and creates a relationship between the object and the map.
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: Not supported</li>
 * <li>Internet Explorer: Yes</li>
 * <li>Firefox: Yes</li>
 * <li>Opera: Not supported</li>
 * <li>Safari: Not supported</li>
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
		// TODO: add # detection
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
			'object'
		);

		return $coveredElements;
	}
}