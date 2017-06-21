<?php
/**
 * CanvasTag
 *
 * canvas element representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Tag\Scripting;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\AbstractTag;

/**
 * CanvasTag
 * <p>
 * The &lt;canvas&gt; tag is used to draw graphics, on the fly, via scripting (usually JavaScript).<br>
 * The &lt;canvas&gt; tag is only a container for graphics, you must use a script to actually draw the graphics.<br>
 * Note: Any text inside the &lt;canvas&gt; element will be displayed in browsers that does not support &lt;canvas&gt;.<br>
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>canvas {
 * height: 150px;
 * width: 300px;
 * }
 * </pre>
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 4.0</li>
 * <li>Internet Explorer: 9.0</li>
 * <li>Firefox: 2.0</li>
 * <li>Opera: 9.0</li>
 * <li>Safari: 3.1</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class CanvasTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string
	 */
	protected $NAME = "canvas";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return CanvasTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}