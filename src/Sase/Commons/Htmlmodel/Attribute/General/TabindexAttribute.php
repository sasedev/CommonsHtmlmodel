<?php
/**
 * TabindexAttribute
 *
 * tabindex attribute representation Class
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
 * TabindexAttribute
 * The tabindex attribute specifies the tab order of an element (when the "tab" button is used for navigating).
 * Browser Support:
 * - Chrome: Yes
 * - Internet Explorer: Yes
 * - Firefox: Yes
 * - Opera: Yes
 * - Safari: Yes
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class TabindexAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "tabindex"
	 */
	protected $KEY = "tabindex";

	/**
	 * Set $value
	 *
	 * @param int $value
	 *
	 * @return TabindexAttribute
	 */
	public function setValue($value)
	{
		if (!\is_numeric($value) || $value != \round($value, 0)) {
			throw new \Exception('the value must be an integer');
		}

		return parent::setValue(\intval($value));
	}

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