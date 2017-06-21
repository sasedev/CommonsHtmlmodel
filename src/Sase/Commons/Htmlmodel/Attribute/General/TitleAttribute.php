<?php
/**
 * TitleAttribute
 *
 * title attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\General;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * TitleAttribute
 * Specifies extra information about an element
 * Browser Support:
 * - Chrome: Yes
 * - Internet Explorer: Yes
 * - Firefox: Yes
 * - Opera: Yes
 * - Safari: Yes
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class TitleAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "title"
	 */
	protected $KEY = "title";

	/**
	 * check the list of html elements that can add this Attribute
	 *
	 * @return string[]
	 */
	public function getAppliesTo()
	{
		$coveredElements = array(
			'general'
		);

		return $coveredElements;
	}
}