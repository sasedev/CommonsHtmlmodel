<?php
/**
 * KeytypeEnum
 *
 * Enumeration used to validate values of keytype Attribute's value for keygen element
 *
 *
 * @category     html5
 * @author       <a href="mailto:seif.salah@gmail.com">sasedev</a>
 * @license MIT
 * @copyright <a href="https://sasedev.net">sasedev</a> 2017
 */
namespace Sase\Commons\Htmlmodel\Enum;

use MyCLabs\Enum\Enum;

/**
 * KeytypeEnum
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class KeytypeEnum extends Enum
{

	/**
	 * Default Value
	 *
	 * @var string __default = self::rsa
	 */
	const __default = self::rsa;

	/**
	 * Default.<br>
	 * Specifies an RSA security algorithm.<br>
	 * The user may be given a choice of RSA key strengths
	 *
	 * @var string rsa = "rsa"
	 */
	const rsa = "rsa";

	/**
	 * Specifies a DSA security algorithm.<br>
	 * The user may be given a choice of DSA key sizes
	 *
	 * @var string dsa = "dsa"
	 */
	const dsa = "dsa";

	/**
	 * Specifies an EC security algorithm.<br>
	 * The user may be given a choice of EC key strengths
	 *
	 * @var string ec = "ec"
	 */
	const ec = "ec";
}