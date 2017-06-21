<?php
/**
 * LabelAttribute
 *
 * label attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Track;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * LabelAttribute
 * <p>
 * The label attribute specifies the title of the text track.<br>
 * The title of the text track is used by the browser when listing available text tracks.
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 18.0</li>
 * <li>Internet Explorer: 10.0</li>
 * <li>Firefox: 31.0</li>
 * <li>Opera: 15.0</li>
 * <li>Safari: 6.0</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class LabelAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "datetime"
	 */
	protected $KEY = "label";

	/**
	 * check the list of html elements that can add this Attribute
	 *
	 * @return string[]
	 */
	public function getAppliesTo()
	{
		$coveredElements = array(
			'track'
		);

		return $coveredElements;
	}
}