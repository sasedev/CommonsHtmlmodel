<?php
/**
 * OndragleaveAttribute
 *
 * ondragleave attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Event\Drag;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * OndragleaveAttribute
 * <p>
 * The ondragleave attribute fires when a draggable element or text selection leaves a valid drop target.<br>
 * The ondragenter and ondragleave events can help the user to understand that a draggable element is about to enter or leave a drop target.
 * This can be done by, for example, setting a background color when the draggable element enters the drop target, and removing the color when the element is moved out of the target.<br>
 * Tip: Links and images are draggable by default, and do not need the draggable attribute.<br>
 * There are many event attributes that are used, and can occur, in the different stages of a drag and drop operation:
 * <ul>
 * <li>Events fired on the draggable target (the source element):
 * <ul>
 * <li>ondragstart - fires when the user starts to drag an element</li>
 * <li>ondrag - fires when an element is being dragged</li>
 * <li>ondragend - fires when the user has finished dragging the element</li>
 * </ul>
 * </li>
 * <li>Events fired on the drop target:
 * <ul>
 * <li>ondragenter - fires when the dragged element enters the drop target</li>
 * <li>ondragover - fires when the dragged element is over the drop target</li>
 * <li>ondragleave - fires when the dragged element leaves the drop target</li>
 * <li>ondrop - fires when the dragged element is dropped on the drop target</li>
 * </ul>
 * </li>
 * </ul>
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 4.0</li>
 * <li>Internet Explorer: 9.0</li>
 * <li>Firefox: 3.5</li>
 * <li>Opera: 12.0</li>
 * <li>Safari: 6.0</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class OndragleaveAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "ondragleave"
	 */
	protected $KEY = "ondragleave";

	/**
	 * check the list of html elements that can add this Attribute
	 *
	 * @return string[]
	 */
	public function getAppliesTo()
	{
		$coveredElements = array(
			'event',
			'eventdrag'
		);

		return $coveredElements;
	}
}