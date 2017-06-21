<?php
/**
 * OntoggleAttribute
 *
 * ontoggle attribute representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @toggleright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Attribute\Event\Misc;

use Sase\Commons\Htmlmodel\AbstractAttribute;

/**
 * OntoggleAttribute
 * <p>
 * The ontoggle attribute fires when the user opens or closes the &lt;details&gt; element.<br>
 * The &lt;details&gt; element specifies additional details that the user can view or hide on demand.
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 12.0</li>
 * <li>Internet Explorer: Not supported</li>
 * <li>Firefox: Not supported</li>
 * <li>Opera: 15.0</li>
 * <li>Safari: 6.0</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class OntoggleAttribute extends AbstractAttribute
{

	/**
	 * Name of html attribute
	 *
	 * @var string KEY = "ontoggle"
	 */
	protected $KEY = "ontoggle";

	/**
	 * check the list of html elements that can add this Attribute
	 *
	 * @return string[]
	 */
	public function getAppliesTo()
	{
		$coveredElements = array(
			'event',
			'eventmisc'
		);

		return $coveredElements;
	}
}