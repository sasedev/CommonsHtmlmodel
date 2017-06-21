<?php
/**
 * KeygenTag
 *
 * keygen element representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Tag\Form;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\AbstractTag;

/**
 * KeygenTag
 * <p>
 * The &lt;keygen&gt; tag specifies a key-pair generator field used for forms.<br>
 * When the form is submitted, the private key is stored locally, and the public key is sent to the server.
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * None.
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 1.0</li>
 * <li>Internet Explorer: Not supported</li>
 * <li>Firefox: 1.0</li>
 * <li>Opera: 3.0</li>
 * <li>Safari: 1.2</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class KeygenTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "keygen"
	 */
	protected $NAME = "keygen";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return KeygenTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}