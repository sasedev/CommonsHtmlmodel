<?php
/**
 * DropzoneAttribute
 *
 * dropzone attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\General;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\Enum\DropzoneEnum;

/**
 * DropzoneAttribute
 * <p>
 * The dropzone attribute specifies whether the dragged data is copied, moved, or linked, when it is dropped on an element.
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: No</li>
 * <li>Internet Explorer: No</li>
 * <li>Firefox: No</li>
 * <li>Opera: No</li>
 * <li>Safari: No</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class DropzoneAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "dropzone"
	 */
	protected $KEY = "dropzone";

	/**
	 * Set $value
	 *
	 * @param DropzoneEnum $value
	 *
	 * @return DropzoneAttribute
	 */
	public function setValue($value)
	{
		if (!$value instanceof DropzoneEnum) {
			throw new \Exception("use Sase\Commons\Htmlmodel\Enum\DropzoneEnum value");
		}

		return parent::setValue($value->getValue());
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