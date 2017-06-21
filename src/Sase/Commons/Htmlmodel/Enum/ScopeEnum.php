<?php
/**
 * ScopeEnum
 *
 * Enumeration used to validate values of scope Attribute's value
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
 * ScopeEnum
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class ScopeEnum extends Enum
{

	/**
	 * Specifies that the cell is a header for a column
	 *
	 * @var string col = "col"
	 */
	const col = "col";

	/**
	 * Specifies that the cell is a header for a row
	 *
	 * @var string row = "row"
	 */
	const row = "row";

	/**
	 * Specifies that the cell is a header for a group of columns
	 *
	 * @var string colgroup = "colgroup"
	 */
	const colgroup = "colgroup";

	/**
	 * Specifies that the cell is a header for a group of rows
	 *
	 * @var string rowgroup = "rowgroup"
	 */
	const rowgroup = "rowgroup";
}