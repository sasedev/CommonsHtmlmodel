<?php
/**
 * AbstractTag
 *
 * Base Model for all html elements
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel;

/**
 * AbstractTag
 * Base Model for all html elements
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
abstract class AbstractTag implements \Serializable, \JsonSerializable
{

	/**
	 * Name of html element
	 *
	 * @var string
	 */
	protected $NAME = "";

	/**
	 * Self closing html element
	 *
	 * @var bool
	 */
	protected $IS_EMPTY = false;

	/**
	 * List of attributes
	 *
	 * @var array
	 */
	private $attributes;

	/**
	 * Prepend string (in __toString() representation)
	 *
	 * @var string
	 */
	private $prepend = null;

	/**
	 * Content of an html element
	 *
	 * @var string
	 */
	private $content;

	/**
	 * Append string (in __toString() representation)
	 *
	 * @var string
	 */
	private $append = null;

	/**
	 * Contructor
	 *
	 * @param array $attributes
	 *        	an array of {@link AbstractAttribute} objects
	 * @param string $content
	 */
	public function __construct(array $attributes = array(), string $content = null)
	{
		$this->setAttributes($attributes);
		$this->setContent($content);
	}

	/**
	 * Return the name of and html attribute
	 *
	 * @return string
	 */
	public function getName()
	{
		$name = $this->NAME;
		if (\trim($name) == "") {
			throw new \Exception("$this->NAME must be overwrited with non empty string");
		}
		$name = \strtolower($name);

		return $name;
	}

	/**
	 * Check if self closing (like &lt;br&gt;) or not (like &lt;div&gt;&lt;/div&gt;)
	 *
	 * @return bool
	 */
	public function isEmpty()
	{
		return $this->IS_EMPTY;
	}

	/**
	 * Get $attributes
	 *
	 * @return AbstractAttribute[]
	 */
	public function getAttributes()
	{
		return $this->attributes;
	}

	/**
	 * Set $attributes
	 *
	 * @param array $attributes
	 *        	an array of {@link AbstractAttribute} objects
	 * @return AbstractTag
	 */
	public function setAttributes(array $attributes = array())
	{
		foreach ($attributes as $attribute) {
			$this->addAttribute($attribute);
		}

		return $this;
	}

	/**
	 * Add $attribute
	 *
	 * @param AbstractAttribute $attribute
	 *
	 * @return AbstractTag
	 */
	public function addAttribute(AbstractAttribute $attribute)
	{
		// if (\in_array('general', $attribute->getAppliesTo()) || \in_array($this->NAME, $attribute->getAppliesTo()))
		$this->attributes[] = $attribute;

		return $this;
	}

	/**
	 * Get $prepend
	 *
	 * @return string
	 */
	public function getPrepend()
	{
		return $this->prepend;
	}

	/**
	 * Set $prepend
	 *
	 * @param string $prepend
	 *        	text to prepend
	 * @return AbstractTag
	 */
	public function setPrepend(string $prepend)
	{
		$this->prepend = $prepend;

		return $this;
	}

	/**
	 * Get $content
	 *
	 * @return string
	 */
	public function getContent()
	{
		return $this->content;
	}

	/**
	 * Set $content
	 *
	 * @param string $content
	 *
	 * @return AbstractTag
	 */
	public function setContent(string $content = null)
	{
		$this->content = $content;

		return $this;
	}

	/**
	 * Get $append
	 *
	 * @return string
	 */
	public function getAppend()
	{
		return $this->append;
	}

	/**
	 * Set $append
	 *
	 * @param string $append
	 *
	 * @return AbstractTag
	 */
	public function setAppend(string $append)
	{
		$this->append = $append;

		return $this;
	}

	/**
	 * Default string representation
	 *
	 * @return string
	 */
	public function __toString()
	{
		$str = "";
		if (null != $this->getPrepend()) {
			$str .= $this->getPrepend() . PHP_EOL;
		}
		$str .= '<';
		$str .= $this->getName();

		foreach ($this->attributes as $attribute) {
			$str .= ' ' . $attribute;
		}
		$str .= '>';
		if (!$this->isEmpty()) {
			$str .= PHP_EOL . $this->getContent();
			$str .= PHP_EOL . '</' . $this->getName() . '>';
		}
		if (null != $this->getAppend()) {
			$str .= PHP_EOL . $this->getAppend();
		}

		return $str;
	}

	/**
	 *
	 * {@inheritdoc}
	 *
	 * @see Serializable::serialize()
	 *
	 * @return string
	 */
	public function serialize()
	{
		return \serialize(array(
			$this->getPrepend(),
			$this->getAttributes(),
			$this->getContent(),
			$this->getAppend()
		));
	}

	/**
	 *
	 * {@inheritdoc}
	 *
	 * @see Serializable::unserialize()
	 *
	 * @param string $serialized
	 *
	 * @return AbstractTag
	 */
	public function unserialize($serialized)
	{
		$data = \unserialize($serialized);

		list ($this->prepend, $this->attributes, $this->content, $this->append) = $data;

		return $this;
	}

	/**
	 *
	 * {@inheritdoc}
	 *
	 * @see JsonSerializable::jsonSerialize()
	 */
	public function jsonSerialize()
	{
		return [
			'prepend' => $this->getPrepend(),
			'attributes' => $this->getAttributes(),
			'content' => $this->getContent(),
			'append' => $this->getAppend()
		];
	}
}