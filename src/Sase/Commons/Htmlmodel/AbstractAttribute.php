<?php
/**
 * AbstractAttribute
 *
 * Base Model for all html attributes
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel;

/**
 * AbstractAttribute
 * Base Model for all html attributes
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
abstract class AbstractAttribute implements \Serializable, \JsonSerializable
{

	/**
	 * Name of html Attribute
	 *
	 * @var string
	 */
	protected $KEY = "";

	/**
	 * the value of and html attribute
	 *
	 * @var mixed $value
	 */
	private $value;

	/**
	 * Contructor
	 *
	 * @param mixed $value
	 */
	public function __construct($value = null)
	{
		if (null != $value) {
			$this->setValue($value);
		}
	}

	/**
	 * Get $key
	 *
	 * @return string
	 */
	public function getKey()
	{
		$key = $this->KEY;
		if (\trim($key) == "") {
			throw new \Exception("$this->KEY must be overwrited with non empty string");
		}
		$key = \strtolower($key);

		return $key;
	}

	/**
	 * Get $value
	 *
	 * @return mixed
	 */
	public function getValue()
	{
		return $this->value;
	}

	/**
	 * Set $value
	 *
	 * @param mixed $value
	 *
	 * @return AbstractAttribute
	 */
	public function setValue($value)
	{
		$this->value = $value;

		return $this;
	}

	/**
	 * check the list of html elements that can add this Attribute
	 *
	 * @return string[]
	 */
	public function getAppliesTo()
	{
		$coveredElements = array();

		return $coveredElements;
	}

	/**
	 * Default string representation
	 *
	 * @return string
	 */
	public function __toString()
	{
		return $this->getKey() . '="' . $this->getValue() . '"';
	}

	/**
	 * Serializes the AbstractAttribute.
	 *
	 * {@inheritdoc} @see Serializable::serialize()
	 * @return string
	 */
	public function serialize()
	{
		return \serialize(array(
			$this->getValue()
		));
	}

	/**
	 * Unserializes the AbstractAttribute.
	 *
	 * {@inheritdoc} @see Serializable::unserialize()
	 * @param string $serialized
	 *
	 * @return HtmlAttribute
	 */
	public function unserialize($serialized)
	{
		$data = \unserialize($serialized);

		list ($this->value) = $data;

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
			'value' => $this->getValue()
		];
	}
}