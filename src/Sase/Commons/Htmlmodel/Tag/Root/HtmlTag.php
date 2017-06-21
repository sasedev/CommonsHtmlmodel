<?php
/**
 * HtmlTag
 *
 * html element representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Tag\Root;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\AbstractTag;

/**
 * HtmlTag
 * <p>
 * The &lt;html&gt; tag tells the browser that this is an HTML document.<br>
 * The &lt;html&gt; tag represents the root of an HTML document.<br>
 * The &lt;html&gt; tag is the container for all other HTML elements (except for the &lt;!DOCTYPE&gt; tag).
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>html {
 * display: block;
 * }
 * html:focus {
 * outline: none;
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
class HtmlTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "html"
	 */
	protected $NAME = "html";

	/**
	 * Contructor
	 *
	 * @param array $attributes
	 *        	an array of {@link AbstractAttribute} objects
	 * @param string $content
	 */
	public function __construct(array $attributes = array(), string $content = null)
	{
		parent::__construct($attributes, $content);
		$this->setPrepend('<!DOCTYPE html>');
	}

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return HtmlTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}