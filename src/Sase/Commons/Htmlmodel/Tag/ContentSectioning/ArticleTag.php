<?php
/**
 * ArticleTag
 *
 * article element representation Class
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Tag\ContentSectioning;

use Sase\Commons\Htmlmodel\AbstractAttribute;
use Sase\Commons\Htmlmodel\AbstractTag;

/**
 * ArticleTag
 * <p>
 * The &lt;article&gt; tag specifies independent, self-contained content.<br>
 * An article should make sense on its own and it should be possible to distribute it independently from the rest of the site.<br>
 * Potential sources for the &lt;article&gt; element:
 * <ul>
 * <li>Forum post</li>
 * <li>Blog post</li>
 * <li>News story</li>
 * <li>Comment</li>
 * </ul>
 * </p>
 * <p>
 * Default CSS Settings:<br>
 * <pre>article {
 * display: block;
 * }
 * </pre>
 * </p>
 * <p>
 * Browser Support:
 * <ul>
 * <li>Chrome: 6.0</li>
 * <li>Internet Explorer: 9.0</li>
 * <li>Firefox: 4.0</li>
 * <li>Opera: 11.1</li>
 * <li>Safari: 5.0</li>
 * </ul>
 * </p>
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class ArticleTag extends AbstractTag
{

	/**
	 * Name of html element
	 *
	 * @var string NAME = "article"
	 */
	protected $NAME = "article";

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return ArticleTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		if (\in_array('general', $attribute->getAppliesTo()) || \in_array('event', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo())) {
			parent::addAttribute($attribute);
		}

		return $this;
	}
}