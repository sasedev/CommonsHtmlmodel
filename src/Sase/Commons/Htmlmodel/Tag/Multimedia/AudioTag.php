<?php
/**
 * AudioTag
 *
 * audio element representation Class
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
 * AudioTag
 * <p>
 * The &lt;audio&gt; tag defines sound, such as music or other audio streams.<br>
 * Currently, there are 3 supported file formats for the &lt;audio&gt; element: MP3, Wav, and Ogg
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * None.
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 4.0</li>
 * <li>Internet Explorer: 9.0</li>
 * <li>Firefox: 3.5</li>
 * <li>Opera: 10.5</li>
 * <li>Safari: 4.0</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class AudioTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "audio"
	 */
	protected $NAME = "audio";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return AudioTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}