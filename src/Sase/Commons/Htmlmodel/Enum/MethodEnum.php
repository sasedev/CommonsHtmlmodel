<?php
/**
 * MethodEnum
 *
 * Enumeration used to validate values of method Attribute's value
 *
 * \Enum
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Enum;

use MyCLabs\Enum\Enum;

/**
 * MethodEnum
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class MethodEnum extends Enum
{

	/**
	 * Default Value
	 *
	 * @var string __default = self::get
	 */
	const __default = self::get;

	/**
	 * Appends the form-data to the URL: URL?name=value&name=value
	 *
	 * @var string get = "get"
	 */
	const get = "get";

	/**
	 * Sends the form-data as an HTTP post transaction
	 *
	 * @var string post = "post"
	 */
	const post = "post";
}