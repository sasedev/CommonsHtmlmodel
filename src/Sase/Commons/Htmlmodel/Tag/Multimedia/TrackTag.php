<?php
/**
 * TrackTag
 *
 * track element representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Tag\Multimedia;

use Sase\Commons\Htmlmodel\AbstractTag;
use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * TrackTag
 * <p>
 * The &lt;track&gt; tag specifies text tracks for media elements (&lt;audio&gt; and &lt;video&gt;).<br>
 * This element is used to specify subtitles, caption files or other files containing text, that should be visible when the media is playing.
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * None.
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 18.0</li>
 * <li>Internet Explorer: 10.0</li>
 * <li>Firefox: 31.0</li>
 * <li>Opera: 15.0</li>
 * <li>Safari: 6.0</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class TrackTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "track"
	 */
	protected $NAME = "track";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return TrackTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}