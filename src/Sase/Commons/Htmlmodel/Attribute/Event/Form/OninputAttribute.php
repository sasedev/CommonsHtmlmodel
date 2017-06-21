<?php
/**
 * OninputAttribute
 *
 * oninput attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Event\Form;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * OninputAttribute
 * <p>
 * The oninput attribute fires when an element gets user input.<br>
 * The oninput attribute fires when the value of an &lt;input&gt; or &lt;textarea&gt; element is changed.<br>
 * Tip: This event is similar to the onchange event.<br>
 * The difference is that the oninput event occurs immediately after the value of an element has changed, while onchange occurs when the element loses focus. The other difference is that the onchange event also works on &lt;select&gt; element.
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
class OninputAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "oninput"
	 */
	protected $KEY = "oninput";

	/**
	 * check the list of html elements that can add this Attribute
	 *
	 * @return string[]
	 */
	public function getAppliesTo()
	{
		$coveredElements = array(
			'event',
			'eventform'
		);

		return $coveredElements;
	}
}