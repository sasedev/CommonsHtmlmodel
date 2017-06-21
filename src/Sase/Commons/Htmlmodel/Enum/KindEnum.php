<?php
/**
 * KindEnum
 *
 * Enumeration used to validate values of kind Attribute's value
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Enum;

use MyCLabs\Enum\Enum;

/**
 * KindEnum
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class KindEnum extends Enum
{

	/**
	 * The track defines translation of dialogue and sound effects (suitable for deaf users)
	 *
	 * @var string captions = "captions"
	 */
	const captions = "captions";

	/**
	 * The track defines chapter titles (suitable for navigating the media resource)
	 *
	 * @var string chapters = "chapters"
	 */
	const chapters = "chapters";

	/**
	 * The track defines a textual description of the video content (suitable for blind users)
	 *
	 * @var string descriptions = "descriptions"
	 */
	const descriptions = "descriptions";

	/**
	 * The track defines content used by scripts.
	 * Not visible for the user
	 *
	 * @var string metadata = "metadata"
	 */
	const metadata = "metadata";

	/**
	 * The track defines subtitles, used to display subtitles in a video
	 *
	 * @var string subtitles = "subtitles"
	 */
	const subtitles = "subtitles";
}