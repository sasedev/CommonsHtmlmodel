<?php
/**
 * ScriptTag
 *
 * script element representation Class
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
 * ScriptTag
 * <p>
 * The &lt;script&gt; tag is used to define a client-side script (JavaScript).<br>
 * The &lt;script&gt; element either contains scripting statements, or it points to an external script file through the src attribute.<br>
 * Common uses for JavaScript are image manipulation, form validation, and dynamic changes of content.<br>
 * Note: If the "src" attribute is present, the &lt;script&gt; element must be empty.<br>
 * Tip: Also look at the &lt;noscript&gt; element for users that have disabled scripts in their browser, or have a browser that doesn't support client-side scripting.<br>
 * Note: There are several ways an external script can be executed:
 * <ul>
 * <li>If async="async": The script is executed asynchronously with the rest of the page (the script will be executed while the page continues the parsing)</li>>
 * <li>If async is not present and defer="defer": The script is executed when the page has finished parsing</li>
 * <li>If neither async or defer is present: The script is fetched and executed immediately, before the browser continues parsing the page</li>
 * </ul>
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>script {
 * display: none;
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
class ScriptTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "script"
	 */
	protected $NAME = "script";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return ScriptTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}