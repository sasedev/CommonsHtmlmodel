<?php
/**
 * DropzoneEnum
 *
 * Enumeration used to validate values of dropzone Attribute's value
 *
 * \Enum
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Enum;

use MyCLabs\Enum\Enum;

/**
 * DropzoneEnum
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class DropzoneEnum extends Enum
{

	/**
	 * Dropping the data will result in a copy of the dragged data
	 *
	 * @var string copy = "copy"
	 */
	const copy = "copy";

	/**
	 * Dropping the data will result in that the dragged data is moved to the new location
	 *
	 * @var string move = "move"
	 */
	const move = "move";

	/**
	 * Dropping the data will result in a link to the original data
	 *
	 * @var string link = "link"
	 */
	const link = "link";
}