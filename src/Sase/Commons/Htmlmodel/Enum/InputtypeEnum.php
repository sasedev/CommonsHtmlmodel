<?php
/**
 * InputtypeEnum
 *
 * Enumeration used to validate values of type Attribute's value for input element
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
 * InputtypeEnum
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class InputtypeEnum extends Enum
{

	/**
	 * Default Value
	 *
	 * @var string __default = self::text
	 */
	const __default = self::text;

	/**
	 * Defines a clickable button (mostly used with a JavaScript to activate a script)
	 *
	 * @var string button = "button"
	 */
	const button = "button";

	/**
	 * Defines a checkbox
	 *
	 * @var string checkbox = "checkbox"
	 */
	const checkbox = "checkbox";

	/**
	 * Defines a color picker
	 * Note: type="color" is not supported in Internet Explorer 11 and earlier versions or Safari 9.1 and earlier versions.
	 *
	 * @var string color = "color"
	 */
	const color = "color";

	/**
	 * Defines a date control (year, month and day (no time))
	 * Note: type="date" is not supported in Firefox, Internet Explorer 11 and earlier versions.
	 *
	 * @var string date = "date"
	 */
	const date = "date";

	/**
	 * Defines a date and time control (year, month, day, hour, minute, second, and fraction of a second (no time zone)
	 * Note: type="datetime-local" is not supported in Firefox, or Internet Explorer 12 and earlier versions.
	 *
	 * @var string datetimelocal = "datetime-local"
	 */
	const datetimelocal = "datetime-local";

	/**
	 * Defines a field for an e-mail address
	 * Note: type="email" is not supported in Internet Explorer 9 and earlier versions, or Safari.
	 *
	 * @var string email = "email"
	 */
	const email = "email";

	/**
	 * Defines a file-select field and a "Browse..." button (for file uploads)
	 *
	 * @var string file = "file"
	 */
	const file = "file";

	/**
	 * Defines a hidden input field
	 *
	 * @var string hidden = "hidden"
	 */
	const hidden = "hidden";

	/**
	 * Defines an image as the submit button
	 *
	 * @var string image = "image"
	 */
	const image = "image";

	/**
	 * Defines a month and year control (no time zone)
	 * Note: type="month" is not supported in Firefox, or Internet Explorer 11 and earlier versions.
	 *
	 * @var string month = "month"
	 */
	const month = "month";

	/**
	 * Defines a field for entering a number<br>
	 * Use the following attributes to specify restrictions:
	 * <ul>
	 * <li>max - specifies the maximum value allowed</li>
	 * <li>min - specifies the minimum value allowed</li>
	 * <li>step - specifies the legal number intervals</li>
	 * <li>value - Specifies the default value</li>
	 * </ul>
	 * Note: type="number" is not supported in Internet Explorer 9 and earlier versions.
	 *
	 * @var string number = "number"
	 */
	const number = "number";

	/**
	 * Defines a password field (characters are masked)
	 *
	 * @var string password = "password"
	 */
	const password = "password";

	/**
	 * Defines a radio button
	 *
	 * @var string radio = "radio"
	 */
	const radio = "radio";

	/**
	 * Defines a control for entering a number whose exact value is not important (like a slider control).<br>
	 * Default range is from 0 to 100<br>
	 * Use the following attributes to specify restrictions:
	 * <ul>
	 * <li>max - specifies the maximum value allowed</li>
	 * <li>min - specifies the minimum value allowed</li>
	 * <li>step - specifies the legal number intervals</li>
	 * <li>value - Specifies the default value</li>
	 * </ul>
	 * Note: type="range" is not supported in Internet Explorer 9 and earlier versions.
	 *
	 * @var string range = "range"
	 */
	const range = "range";

	/**
	 * Defines a reset button (resets all form values to default values)
	 *
	 * @var string reset = "reset"
	 */
	const reset = "reset";

	/**
	 * Defines a text field for entering a search string
	 *
	 * @var string search = "search"
	 */
	const search = "search";

	/**
	 * Defines a submit button
	 *
	 * @var string submit = "submit"
	 */
	const submit = "submit";

	/**
	 * Defines a field for entering a telephone number<br>
	 * Note: type="tel" is only supported in Safari 8 and newer versions.
	 *
	 * @var string tel = "tel"
	 */
	const tel = "tel";

	/**
	 * Default.
	 * Defines a single-line text field (default width is 20 characters)
	 *
	 * @var string text = "text"
	 */
	const text = "text";

	/**
	 * Defines a control for entering a time (no time zone)<br>
	 * Note: type="time" is not supported in Firefox, or Internet Explorer 12 and earlier versions.
	 *
	 * @var string time = "time"
	 */
	const time = "time";

	/**
	 * Defines a field for entering a URL<br>
	 * Note: The type="url" is not supported in Internet Explorer 9 and earlier versions, or Safari.<br>
	 * Tip: Safari on iPhone recognizes the url input type, and changes the on-screen keyboard to match it (adds .com option).
	 *
	 * @var string url = "url"
	 */
	const url = "url";

	/**
	 * Defines a week and year control (no time zone)<br>
	 * Note: type="week" is not supported in Firefox, or Internet Explorer 11 and earlier versions.
	 *
	 * @var string week = "week"
	 */
	const week = "week";
}