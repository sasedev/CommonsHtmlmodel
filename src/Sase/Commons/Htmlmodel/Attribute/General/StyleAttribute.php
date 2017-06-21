<?php
/**
 * StyleAttribute
 *
 * style attribute representation Class
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
 * StyleAttribute
 * The style attribute specifies an inline style for an element.
 * The style attribute will override any style set generally, e.g. styles specified in the &lt;style&gt; tag or in an external style sheet.
 * Browser Support:
 * - Chrome: Yes
 * - Internet Explorer: Yes
 * - Firefox: Yes
 * - Opera: Yes
 * - Safari: Yes
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class StyleAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "style"
	 */
	protected $KEY = "style";

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