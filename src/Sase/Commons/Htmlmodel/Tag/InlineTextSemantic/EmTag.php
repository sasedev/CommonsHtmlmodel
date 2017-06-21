<?php
/**
 * EmTag
 *
 * em element representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Tag\InlineTextSemantic;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\AbstractTag;

/**
 * EmTag
 * <p>
 * The &lt;em&gt; tag is a phrase tag.<br>
 * It renders as emphasized text.<br>
 * Tip: This tag is not deprecated, but it is possible to achieve richer effect with CSS.<br>
 * All phrase tags:
 * <table>
 * <tbody>
 * <tr>
 * <th style="width:15%">Tag</th>
 * <th>Description</th>
 * </tr>
 * <tr>
 * <td width="20%"> &lt;em&gt;</td>
 * <td width="80%">Renders as emphasized text</td>
 * </tr>
 * <tr>
 * <td> &lt;strong&gt;</td>
 * <td>Defines important text</td>
 * </tr>
 * <tr>
 * <td> &lt;code&gt;</td>
 * <td>Defines a piece of computer code</td>
 * </tr>
 * <tr>
 * <td> &lt;samp&gt;</td>
 * <td>Defines sample output from a computer program</td>
 * </tr>
 * <tr>
 * <td> &lt;kbd&gt;</td>
 * <td>Defines keyboard input</td>
 * </tr>
 * <tr>
 * <td> &lt;var&gt;</td>
 * <td>Defines a variable</td>
 * </tr>
 * </tbody>
 * </table>
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>em {
 * font-style: italic;
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
class EmTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "em"
	 */
	protected $NAME = "em";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return EmTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}