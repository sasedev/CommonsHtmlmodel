<?php
/**
 * CrossoriginEnum
 *
 * Enumeration used to validate values of crossorigin Attribute's value for img/link element
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
 * CrossoriginEnum
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class CrossoriginEnum extends Enum
{

	/**
	 * Default Value
	 *
	 * @var string __default = self::anonymous
	 */
	const __default = self::anonymous;

	/**
	 * Default.
	 * A cross-origin request (i.e., with Origin: HTTP header) is performed. But no credential is sent (i.e., no cookie, no X.509 certificate, and no HTTP Basic authentication is sent). If the server does not give credentials to the origin site (by not setting the Access-Control-Allow-Origin: HTTP header), the image will be tainted and its usage restricted.
	 *
	 * @var string anonymous = "anonymous"
	 */
	const anonymous = "anonymous";

	/**
	 * A cross-origin request (i.e., with Origin: HTTP header) performed with credential is sent (i.e., a cookie, a certificate, and HTTP Basic authentication is performed).<br>
	 * If the server does not give credentials to the origin site (through Access-Control-Allow-Credentials: HTTP header), the image will be tainted and its usage restricted.
	 *
	 * @var string usecredentials = "use-credentials"
	 */
	const usecredentials = "use-credentials";
}