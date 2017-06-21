<?php
/**
 * CharsetEnum
 *
 * Enumeration used to validate values of charset Attribute's value
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
 * CharsetEnum
 *
 * @see www.iana.org/assignments/character-sets
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class CharsetEnum extends Enum
{

	/**
	 * Default Value
	 *
	 * @var string __default = self::utf8
	 */
	const __default = self::utf8;

	/**
	 * PostScript Language Reference Manual PCL Symbol Set id: 10J
	 *
	 * @var string adobestandardencoding = "Adobe-Standard-Encoding"
	 */
	const adobestandardencoding = "Adobe-Standard-Encoding";

	/**
	 * PostScript Language Reference Manual PCL Symbol Set id: 5M
	 *
	 * @var string adobesymbolencoding = "Adobe-Symbol-Encoding"
	 */
	const adobesymbolencoding = "Adobe-Symbol-Encoding";

	/**
	 * See [http://www.amiga.ultranet.ru/Amiga-1251.html]
	 *
	 * @var string amiga1251= "Amiga-1251"
	 */
	const amiga1251 = "Amiga-1251";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string ansix31101983 = "ANSI_X3.110-1983"
	 */
	const ansix31101983 = "ANSI_X3.110-1983";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string asmo449 = "ASMO_449"
	 */
	const asmo449 = "ASMO_449";

	/**
	 * Chinese for Taiwan Multi-byte set.<br>
	 * PCL Symbol Set Id: 18T
	 *
	 * @var string big5 = "Big5"
	 */
	const big5 = "Big5";

	/**
	 * See [http://www.iana.org/assignments/charset-reg/Big5-HKSCS]
	 *
	 * @var string big5hkscs = "Big5-HKSCS"
	 */
	const big5hkscs = "Big5-HKSCS";

	/**
	 * [http://www.unicode.org/notes/tn6/]
	 *
	 * @var string bocu1 = "BOCU-1"
	 */
	const bocu1 = "BOCU-1";

	/**
	 * See [http://www.iana.org/assignments/charset-reg/BRF]
	 *
	 * @var string brf = "BRF"
	 */
	const brf = "BRF";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string bs4730 = "BS_4730"
	 */
	const bs4730 = "BS_4730";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string bsviewdata = "BS_viewdata"
	 */
	const bsviewdata = "BS_viewdata";

	/**
	 * [http://www.unicode.org/unicode/reports/tr26]
	 *
	 * @var string cesu8 = "CESU-8"
	 */
	const cesu8 = "CESU-8";

	/**
	 * See [http://www.iana.org/assignments/charset-reg/CP50220]
	 *
	 * @var string cp50220 = "CP50220"
	 */
	const cp50220 = "CP50220";

	/**
	 * See [http://www.iana.org/assignments/charset-reg/CP51932]
	 *
	 * @var string cp51932 = "CP51932"
	 */
	const cp51932 = "CP51932";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string csaz243419851 = "CSA_Z243.4-1985-1"
	 */
	const csaz243419851 = "CSA_Z243.4-1985-1";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string csaz243419852 = "CSA_Z243.4-1985-2"
	 */
	const csaz243419852 = "CSA_Z243.4-1985-2";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string csaz24341985gr = "CSA_Z243.4-1985-gr"
	 */
	const csaz24341985gr = "CSA_Z243.4-1985-gr";

	/**
	 * VAX/VMS User's Manual, Order Number: AI-Y517A-TE, April 1986.
	 * [RFC1345]
	 *
	 * @var string decmcs = "DEC-MCS"
	 */
	const decmcs = "DEC-MCS";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string din66003 = "DIN_66003"
	 */
	const din66003 = "DIN_66003";

	/**
	 * [RFC1345]
	 *
	 * @var string dkus = "dk-us"
	 */
	const dkus = "dk-us";

	/**
	 * Danish Standard, DS 2089, February 1974
	 * [RFC1345]
	 *
	 * @var string ds2089 = "DS_2089"
	 */
	const ds2089 = "DS_2089";

	/**
	 * IBM 3270 Char Set Ref Ch 10, GA27-2837-9, April 1987
	 * [RFC1345]
	 *
	 * @var string ebcdicatde = "EBCDIC-AT-DE"
	 */
	const ebcdicatde = "EBCDIC-AT-DE";

	/**
	 * IBM 3270 Char Set Ref Ch 10, GA27-2837-9, April 1987
	 * [RFC1345]
	 *
	 * @var ebcdicatdea = "EBCDIC-AT-DE-A"
	 */
	const ebcdicatdea = "EBCDIC-AT-DE-A";

	/**
	 * IBM 3270 Char Set Ref Ch 10, GA27-2837-9, April 1987
	 * [RFC1345]
	 *
	 * @var ebcdiccafr = "EBCDIC-CA-FR"
	 */
	const ebcdiccafr = "EBCDIC-CA-FR";

	/**
	 * IBM 3270 Char Set Ref Ch 10, GA27-2837-9, April 1987
	 * [RFC1345]
	 *
	 * @var string ebcdicdkno = "EBCDIC-DK-NO"
	 */
	const ebcdicdkno = "EBCDIC-DK-NO";

	/**
	 * IBM 3270 Char Set Ref Ch 10, GA27-2837-9, April 1987
	 * [RFC1345]
	 *
	 * @var string ebcdicdknoa = "EBCDIC-DK-NO-A"
	 */
	const ebcdicdknoa = "EBCDIC-DK-NO-A";

	/**
	 * IBM 3270 Char Set Ref Ch 10, GA27-2837-9, April 1987
	 * [RFC1345]
	 *
	 * @var string ebcdices = "EBCDIC-ES"
	 */
	const ebcdices = "EBCDIC-ES";

	/**
	 * IBM 3270 Char Set Ref Ch 10, GA27-2837-9, April 1987
	 * [RFC1345]
	 *
	 * @var string ebcdicesa = "EBCDIC-ES-A"
	 */
	const ebcdicesa = "EBCDIC-ES-A";

	/**
	 * IBM 3270 Char Set Ref Ch 10, GA27-2837-9, April 1987
	 * [RFC1345]
	 *
	 * @var string ebcdicess = "EBCDIC-ES-S"
	 */
	const ebcdicess = "EBCDIC-ES-S";

	/**
	 * IBM 3270 Char Set Ref Ch 10, GA27-2837-9, April 1987
	 * [RFC1345]
	 *
	 * @var string ebcdicfise = "EBCDIC-FI-SE"
	 */
	const ebcdicfise = "EBCDIC-FI-SE";

	/**
	 * IBM 3270 Char Set Ref Ch 10, GA27-2837-9, April 1987
	 * [RFC1345]
	 *
	 * @var string ebcdicfisea = "EBCDIC-FI-SE-A"
	 */
	const ebcdicfisea = "EBCDIC-FI-SE-A";

	/**
	 * IBM 3270 Char Set Ref Ch 10, GA27-2837-9, April 1987
	 * [RFC1345]
	 *
	 * @var string ebcdicfr = "EBCDIC-FR"
	 */
	const ebcdicfr = "EBCDIC-FR";

	/**
	 * IBM 3270 Char Set Ref Ch 10, GA27-2837-9, April 1987
	 * [RFC1345]
	 *
	 * @var string ebcdicit = "EBCDIC-IT"
	 */
	const ebcdicit = "EBCDIC-IT";

	/**
	 * IBM 3270 Char Set Ref Ch 10, GA27-2837-9, April 1987
	 * [RFC1345]
	 *
	 * @var string ebcdicpt = "EBCDIC-PT"
	 */
	const ebcdicpt = "EBCDIC-PT";

	/**
	 * IBM 3270 Char Set Ref Ch 10, GA27-2837-9, April 1987
	 * [RFC1345]
	 *
	 * @var string ebcdicuk = "EBCDIC-UK"
	 */
	const ebcdicuk = "EBCDIC-UK";

	/**
	 * IBM 3270 Char Set Ref Ch 10, GA27-2837-9, April 1987
	 * [RFC1345]
	 *
	 * @var string ebcdicus = "EBCDIC-US"
	 */
	const ebcdicus = "EBCDIC-US";

	/**
	 * [ISO registry] (formerly [ECMA registry])
	 *
	 * @var string ecmacyrillic = "ECMA-cyrillic"
	 */
	const ecmacyrillic = "ECMA-cyrillic";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string es = "ES"
	 */
	const es = "ES";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string es2 = "ES2""
	 */
	const es2 = "ES2";

	/**
	 * Standardized by OSF, UNIX International, and UNIX Systems Laboratories Pacific.<br>
	 * Uses ISO 2022 rules to select code set 0: US-ASCII (a single 7-bit byte set) code set 1: JIS X0208-1990 (a double 8-bit byte set) restricted to A0-FF in both bytes code set 2: Half Width Katakana (a single 7-bit byte set) requiring SS2 as the character prefix code set 3: JIS X0212-1990 (a double 7-bit byte set) restricted to A0-FF in both bytes requiring SS3 as the character prefix<br>
	 * [RFC1557]
	 *
	 * @var string eucjp = "EUC-JP"
	 */
	const eucjp = "EUC-JP";

	/**
	 * [RFC1557] (see also KS_C_5861-1992)
	 *
	 * @var string euckr = "EUC-KR"
	 */
	const euckr = "EUC-KR";

	/**
	 * Used in Japan.<br>
	 * Each character is 2 octets.<br>
	 * code set 0: US-ASCII (a single 7-bit byte set) 1st byte = 00 2nd byte = 20-7E code set 1: JIS X0208-1990 (a double 7-bit byte set) restricted to A0-FF in both bytes code set 2: Half Width Katakana (a single 7-bit byte set) 1st byte = 00 2nd byte = A0-FF code set 3: JIS X0212-1990 (a double 7-bit byte set) restricted to A0-FF in the first byte and 21-7E in the second byte
	 *
	 * @var string extendedunixcodefixedwidthforjapanese = "Extended_UNIX_Code_Fixed_Width_for_Japanese"
	 */
	const extendedunixcodefixedwidthforjapanese = "Extended_UNIX_Code_Fixed_Width_for_Japanese";

	/**
	 * Chinese IT Standardization Technical Committee Please see: [http://www.iana.org/assignments/charset-reg/GB18030]
	 * [RFC1345]
	 *
	 * @var string gb18030 = "GB18030"
	 */
	const gb18030 = "GB18030";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string gb198880 = "GB_1988-80"
	 */
	const gb198880 = "GB_1988-80";

	/**
	 * Chinese for People's Republic of China (PRC) mixed one byte, two byte set: 20-7E = one byte ASCII A1-FE = two byte PRC Kanji See GB 2312-80 PCL Symbol Set Id: 18C<br>
	 * [RFC1468]
	 *
	 * @var string gb2312 = "GB2312"
	 */
	const gb2312 = "GB2312";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string gb231280 = "GB_2312-80"
	 */
	const gb231280 = "GB_2312-80";

	/**
	 * Chinese IT Standardization Technical Committee Please see: [http://www.iana.org/assignments/charset-reg/GBK]
	 *
	 * @var string gbk = "GBK"
	 */
	const gbk = "GBK";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string gost1976874 = "GOST_19768-74"
	 */
	const gost1976874 = "GOST_19768-74";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string greekccitt = "greek-ccitt"
	 */
	const greekccitt = "greek-ccitt";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string greek7 = "greek7"
	 */
	const greek7 = "greek7";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string greek7old = "greek7-old"
	 */
	const greek7old = "greek7-old";

	/**
	 * PCL 5 Comparison Guide, Hewlett-Packard, HP part number 5961-0510, October 1992 PCL Symbol Set id: 7J
	 *
	 * @var string hpdesktop = "HP-DeskTop"
	 */
	const hpdesktop = "HP-DeskTop";

	/**
	 * PCL 5 Comparison Guide, Hewlett-Packard, HP part number 5961-0510, October 1992 PCL Symbol Set id: 1U
	 *
	 * @var string hplegal = "HP-Legal"
	 */
	const hplegal = "HP-Legal";

	/**
	 * PCL 5 Comparison Guide, Hewlett-Packard, HP part number 5961-0510, October 1992 PCL Symbol Set id: 8M
	 *
	 * @var string hpmath8 = "HP-Math8"
	 */
	const hpmath8 = "HP-Math8";

	/**
	 * PCL 5 Comparison Guide, Hewlett-Packard, HP part number 5961-0510, October 1992 PCL Symbol Set id: 15U
	 *
	 * @var string hppifont = "HP-Pi-font"
	 */
	const hppifont = "HP-Pi-font";

	/**
	 * LaserJet IIP Printer User's Manual, HP part no 33471-90901, Hewlet-Packard, June 1989.
	 *
	 * @var string hproman8 = "hp-roman8"
	 */
	const hproman8 = "hp-roman8";

	/**
	 * [RFC1842], [RFC1843]
	 *
	 * @var string hzgb2312 = "HZ-GB-2312"
	 */
	const hzgb2312 = "HZ-GB-2312";

	/**
	 * IBM See [http://www.iana.org/assignments/charset-reg/IBM00858]
	 *
	 * @var string ibm00858 = "IBM00858"
	 */
	const ibm00858 = "IBM00858";

	/**
	 * IBM See [http://www.iana.org/assignments/charset-reg/IBM00924]
	 *
	 * @var string ibm00924 = "IBM00924"
	 */
	const ibm00924 = "IBM00924";

	/**
	 * IBM See [http://www.iana.org/assignments/charset-reg/IBM01140]
	 *
	 * @var string ibm01140 = "IBM01140"
	 */
	const ibm01140 = "IBM01140";

	/**
	 * IBM See [http://www.iana.org/assignments/charset-reg/IBM01141]
	 *
	 * @var string ibm01141 = "IBM01141"
	 */
	const ibm01141 = "IBM01141";

	/**
	 * IBM See [http://www.iana.org/assignments/charset-reg/IBM01142]
	 *
	 * @var string ibm01142 = "IBM01142"
	 */
	const ibm01142 = "IBM01142";

	/**
	 * IBM See [http://www.iana.org/assignments/charset-reg/IBM01143]
	 *
	 * @var string ibm01143 = "IBM01143"
	 */
	const ibm01143 = "IBM01143";

	/**
	 * IBM See [http://www.iana.org/assignments/charset-reg/IBM01144]
	 *
	 * @var string ibm01144 = "IBM01144"
	 */
	const ibm01144 = "IBM01144";

	/**
	 * IBM See [http://www.iana.org/assignments/charset-reg/IBM01145]
	 *
	 * @var string ibm01145 = "IBM01145"
	 */
	const ibm01145 = "IBM01145";

	/**
	 * IBM See [http://www.iana.org/assignments/charset-reg/IBM01146]
	 *
	 * @var string ibm01146 = "IBM01146"
	 */
	const ibm01146 = "IBM01146";

	/**
	 * IBM See [http://www.iana.org/assignments/charset-reg/IBM01147]
	 *
	 * @var string ibm01147 = "IBM01147"
	 */
	const ibm01147 = "IBM01147";

	/**
	 * IBM See [http://www.iana.org/assignments/charset-reg/IBM01148]
	 *
	 * @var string ibm01148 = "IBM01148"
	 */
	const ibm01148 = "IBM01148";

	/**
	 * IBM See [http://www.iana.org/assignments/charset-reg/IBM01149]
	 *
	 * @var string ibm01149 = "IBM01149"
	 */
	const ibm01149 = "IBM01149";

	/**
	 * IBM NLS RM Vol2 SE09-8002-01, March 1990<br>
	 * [RFC1345]
	 *
	 * @var string ibm037 = "IBM037"
	 */
	const ibm037 = "IBM037";

	/**
	 * IBM 3174 Character Set Ref, GA27-3831-02, March 1990<br>
	 * [RFC1345]
	 *
	 * @var string ibm038 = "IBM0384"
	 */
	const ibm038 = "IBM038";

	/**
	 * IBM NLS RM Vol2 SE09-8002-01, March 1990<br>
	 * [RFC1345]
	 *
	 * @var string ibm1026 = "IBM1026"
	 */
	const ibm1026 = "IBM1026";

	/**
	 * IBM1047 (EBCDIC Latin 1/Open Systems) [http://www-1.ibm.com/servers/eserver/iseries/software/globalization/pdf/cp01047z.pdf]
	 *
	 * @var string ibm1047 = "IBM1047"
	 */
	const ibm1047 = "IBM1047";

	/**
	 * IBM NLS RM Vol2 SE09-8002-01, March 1990<br>
	 * [RFC1345]
	 *
	 * @var string ibm273 = "IBM273"
	 */
	const ibm273 = "IBM273";

	/**
	 * IBM 3174 Character Set Ref, GA27-3831-02, March 1990<br>
	 * [RFC1345]
	 *
	 * @var string ibm274 = "IBM274"
	 */
	const ibm274 = "IBM274";

	/**
	 * IBM NLS RM Vol2 SE09-8002-01, March 1990<br>
	 * [RFC1345]
	 *
	 * @var string ibm275 = "IBM275"
	 */
	const ibm275 = "IBM275";

	/**
	 * IBM NLS RM Vol2 SE09-8002-01, March 1990<br>
	 * [RFC1345]
	 *
	 * @var string ibm277 = "IBM277"
	 */
	const ibm277 = "IBM277";

	/**
	 * IBM NLS RM Vol2 SE09-8002-01, March 1990<br>
	 * [RFC1345]
	 *
	 * @var string ibm278 = "IBM278"
	 */
	const ibm278 = "IBM278";

	/**
	 * IBM NLS RM Vol2 SE09-8002-01, March 1990<br>
	 * [RFC1345]
	 *
	 * @var string ibm280 = "IBM280"
	 */
	const ibm280 = "IBM280";

	/**
	 * IBM 3174 Character Set Ref, GA27-3831-02, March 1990<br>
	 * [RFC1345]
	 *
	 * @var string ibm281 = "IBM281"
	 */
	const ibm281 = "IBM281";

	/**
	 * IBM NLS RM Vol2 SE09-8002-01, March 1990<br>
	 * [RFC1345]
	 *
	 * @var string ibm284 = "IBM284"
	 */
	const ibm284 = "IBM284";

	/**
	 * IBM NLS RM Vol2 SE09-8002-01, March 1990<br>
	 * [RFC1345]
	 *
	 * @var string ibm285 = "IBM285"
	 */
	const ibm285 = "IBM285";

	/**
	 * IBM 3174 Character Set Ref, GA27-3831-02, March 1990<br>
	 * [RFC1345]
	 *
	 * @var string ibm290 = "IBM290"
	 */
	const ibm290 = "IBM290";

	/**
	 * IBM NLS RM Vol2 SE09-8002-01, March 1990<br>
	 * [RFC1345]
	 *
	 * @var string ibm297 = "IBM297"
	 */
	const ibm297 = "IBM297";

	/**
	 * IBM NLS RM Vol2 SE09-8002-01, March 1990, IBM NLS RM p 11-11<br>
	 * [RFC1345]
	 *
	 * @var string ibm420 = "IBM420"
	 */
	const ibm420 = "IBM420";

	/**
	 * IBM NLS RM Vol2 SE09-8002-01, March 1990<br>
	 * [RFC1345]
	 *
	 * @var string ibm423 = "IBM423"
	 */
	const ibm423 = "IBM423";

	/**
	 * IBM NLS RM Vol2 SE09-8002-01, March 1990<br>
	 * [RFC1345]
	 *
	 * @var string ibm424 = "IBM424"
	 */
	const ibm424 = "IBM424";

	/**
	 * IBM NLS RM Vol2 SE09-8002-01, March 1990<br>
	 * [RFC1345]
	 *
	 * @var string ibm437 = "IBM437"
	 */
	const ibm437 = "IBM437";

	/**
	 * IBM NLS RM Vol2 SE09-8002-01, March 1990<br>
	 * [RFC1345]
	 *
	 * @var string ibm500 = "IBM500"
	 */
	const ibm500 = "IBM500";

	/**
	 * HP PCL 5 Comparison Guide (P/N 5021-0329) pp B-13, 1996
	 *
	 * @var string ibm775 = "IBM775"
	 */
	const ibm775 = "IBM775";

	/**
	 * IBM NLS RM Vol2 SE09-8002-01, March 1990<br>
	 * [RFC1345]
	 *
	 * @var string ibm850 = "IBM850"
	 */
	const ibm850 = "IBM850";

	/**
	 * IBM NLS RM Vol2 SE09-8002-01, March 1990<br>
	 * [RFC1345]
	 *
	 * @var string ibm851 = "IBM851"
	 */
	const ibm851 = "IBM851";

	/**
	 * IBM NLS RM Vol2 SE09-8002-01, March 1990<br>
	 * [RFC1345]
	 *
	 * @var string ibm852 = "IBM852"
	 */
	const ibm852 = "IBM852";

	/**
	 * IBM NLS RM Vol2 SE09-8002-01, March 1990<br>
	 * [RFC1345]
	 *
	 * @var string ibm855 = "IBM855"
	 */
	const ibm855 = "IBM855";

	/**
	 * IBM NLS RM Vol2 SE09-8002-01, March 1990<br>
	 * [RFC1345]
	 *
	 * @var string ibm857 = "IBM857"
	 */
	const ibm857 = "IBM857";

	/**
	 * IBM NLS RM Vol2 SE09-8002-01, March 1990<br>
	 * [RFC1345]
	 *
	 * @var string ibm860 = "IBM860"
	 */
	const ibm860 = "IBM860";

	/**
	 * IBM NLS RM Vol2 SE09-8002-01, March 1990<br>
	 * [RFC1345]
	 *
	 * @var string ibm861 = "IBM861"
	 */
	const ibm861 = "IBM861";

	/**
	 * IBM NLS RM Vol2 SE09-8002-01, March 1990<br>
	 * [RFC1345]
	 *
	 * @var string ibm862 = "IBM862"
	 */
	const ibm862 = "IBM862";

	/**
	 * IBM Keyboard layouts and code pages, PN 07G4586 June 1991<br>
	 * [RFC1345]
	 *
	 * @var string ibm863 = "IBM863"
	 */
	const ibm863 = "IBM863";

	/**
	 * IBM Keyboard layouts and code pages, PN 07G4586 June 1991<br>
	 * [RFC1345]
	 *
	 * @var string ibm864 = "IBM864"
	 */
	const ibm864 = "IBM864";

	/**
	 * IBM DOS 3.3 Ref (Abridged), 94X9575 (Feb 1987)<br>
	 * [RFC1345]
	 *
	 * @var string ibm865 = "IBM865"
	 */
	const ibm865 = "IBM865";

	/**
	 * IBM NLDG Volume 2 (SE09-8002-03) August 1994
	 *
	 * @var string ibm866 = "IBM866"
	 */
	const ibm866 = "IBM866";

	/**
	 * IBM NLS RM Vol2 SE09-8002-01, March 1990<br>
	 * [RFC1345]
	 *
	 * @var string ibm868 = "IBM868"
	 */
	const ibm868 = "IBM868";

	/**
	 * IBM Keyboard layouts and code pages, PN 07G4586 June 1991<br>
	 * [RFC1345]
	 *
	 * @var string ibm869 = "IBM869"
	 */
	const ibm869 = "IBM869";

	/**
	 * IBM NLS RM Vol2 SE09-8002-01, March 1990<br>
	 * [RFC1345]
	 *
	 * @var string ibm870 = "IBM870"
	 */
	const ibm870 = "IBM870";

	/**
	 * IBM NLS RM Vol2 SE09-8002-01, March 1990<br>
	 * [RFC1345]
	 *
	 * @var string ibm871 = "IBM871"
	 */
	const ibm871 = "IBM871";

	/**
	 * IBM NLS RM Vol2 SE09-8002-01, March 1990<br>
	 * [RFC1345]
	 *
	 * @var string ibm880 = "IBM880"
	 */
	const ibm880 = "IBM880";

	/**
	 * IBM NLS RM Vol2 SE09-8002-01, March 1990<br>
	 * [RFC1345]
	 *
	 * @var string ibm891 = "IBM891"
	 */
	const ibm891 = "IBM891";

	/**
	 * IBM NLS RM Vol2 SE09-8002-01, March 1990<br>
	 * [RFC1345]
	 *
	 * @var string ibm903 = "IBM903"
	 */
	const ibm903 = "IBM903";

	/**
	 * IBM NLS RM Vol2 SE09-8002-01, March 1990<br>
	 * [RFC1345]
	 *
	 * @var string ibm904 = "IBM904"
	 */
	const ibm904 = "IBM904";

	/**
	 * IBM 3174 Character Set Ref, GA27-3831-02, March 1990<br>
	 * [RFC1345]
	 *
	 * @var string ibm905 = "IBM905"
	 */
	const ibm905 = "IBM905";

	/**
	 * IBM NLS RM Vol2 SE09-8002-01, March 1990<br>
	 * [RFC1345]
	 *
	 * @var string ibm918 = "IBM918"
	 */
	const ibm918 = "IBM918";

	/**
	 * Presentation Set, CPGID: 259
	 *
	 * @var string ibmsymbols = "IBM-Symbols"
	 */
	const ibmsymbols = "IBM-Symbols";

	/**
	 * Presentation Set, CPGID: 838
	 *
	 * @var string ibmthai = "IBM-Thai"
	 */
	const ibmthai = "IBM-Thai";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string iecp271 = "IEC_P27-1"
	 */
	const iecp271 = "IEC_P27-1";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string inis = "INIS"
	 */
	const inis = "INIS";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string inis8 = "INIS-8"
	 */
	const inis8 = "INIS-8";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string iniscyrillic = "INIS-cyrillic"
	 */
	const iniscyrillic = "INIS-cyrillic";

	/**
	 * [RFC1345]
	 *
	 * @var string invariant = "INVARIANT"
	 */
	const invariant = "INVARIANT";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string iso10367box = "ISO_10367-box"
	 */
	const iso10367box = "ISO_10367-box";

	/**
	 * ISO 10646 Japanese, see [RFC1815].
	 *
	 * @var string iso10646j1 = "ISO-10646-J-1"
	 */
	const iso10646j1 = "ISO-10646-J-1";

	/**
	 * the 2-octet Basic Multilingual Plane, aka Unicode this needs to specify network byte order: the standard does not specify (it is a 16-bit integer space)
	 *
	 * @var string iso10646ucs2 = "ISO-10646-UCS-2"
	 */
	const iso10646ucs2 = "ISO-10646-UCS-2";

	/**
	 * the full code space.<br>
	 * (same comment about byte order, these are 31-bit numbers.
	 *
	 * @var string iso10646ucs4 = "ISO-10646-UCS-4"
	 */
	const iso10646ucs4 = "ISO-10646-UCS-4";

	/**
	 * ASCII subset of Unicode.<br>
	 * Basic Latin = collection 1 See ISO 10646, Appendix A
	 *
	 * @var string iso10646ucsbasic = "ISO-10646-UCS-Basic"
	 */
	const iso10646ucsbasic = "ISO-10646-UCS-Basic";

	/**
	 * ISO Latin-1 subset of Unicode.<br>
	 * Basic Latin and Latin-1 Supplement = collections 1 and 2.<br>
	 * See ISO 10646, Appendix A.<br>
	 * See [RFC1815].
	 *
	 * @var string iso10646unicodelatin1 = "ISO-10646-Unicode-Latin1"
	 */
	const iso10646unicodelatin1 = "ISO-10646-Unicode-Latin1";

	/**
	 * Universal Transfer Format (1), this is the multibyte encoding, that subsets ASCII-7.<br>
	 * It does not have byte ordering issues.
	 *
	 * @var string iso10646utf1 = "ISO-10646-UTF-1"
	 */
	const iso10646utf1 = "ISO-10646-UTF-1";

	/**
	 * See [http://www.iana.org/assignments/charset-reg/ISO-11548-1]
	 *
	 * @var string iso115481 = "ISO-11548-1"
	 */
	const iso115481 = "ISO-11548-1";

	/**
	 * [RFC1922]
	 *
	 * @var string iso2022cn = "ISO-2022-CN"
	 */
	const iso2022cn = "ISO-2022-CN";

	/**
	 * [RFC1922]
	 *
	 * @var string iso2022cnext = "ISO-2022-CN-EXT"
	 */
	const iso2022cnext = "ISO-2022-CN-EXT";

	/**
	 * [RFC1468] (see also [RFC2237])
	 *
	 * @var string iso2022jp = "ISO-2022-JP"
	 */
	const iso2022jp = "ISO-2022-JP";

	/**
	 * [RFC1554]
	 *
	 * @var string iso2022jp2 = "ISO-2022-JP-2"
	 */
	const iso2022jp2 = "ISO-2022-JP-2";

	/**
	 * [RFC1557] (see also KS_C_5601-1987)
	 *
	 * @var string iso2022kr = "ISO-2022-KR"
	 */
	const iso2022kr = "ISO-2022-KR";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string iso20331983 = "ISO_2033-1983"
	 */
	const iso20331983 = "ISO_2033-1983";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string iso5427 = "ISO_5427"
	 */
	const iso5427 = "ISO_5427";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string iso54271981 = "ISO_5427:1981"
	 */
	const iso54271981 = "ISO_5427:1981";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string iso54281980 = "ISO_5428:1980"
	 */
	const iso54281980 = "ISO_5428:1980";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string iso646basic1983 = "ISO_646.basic:1983"
	 */
	const iso646basic1983 = "ISO_646.basic:1983";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string iso646irv1983 = "ISO_646.irv:1983"
	 */
	const iso646irv1983 = "ISO_646.irv:1983";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string iso6937225 = "ISO_6937-2-25"
	 */
	const iso6937225 = "ISO_6937-2-25";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string iso69372add = "ISO_6937-2-add"
	 */
	const iso69372add = "ISO_6937-2-add";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string iso88591 = "ISO-8859-1"
	 */
	const iso88591 = "ISO-8859-1";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string iso885910 = "ISO-8859-10"
	 */
	const iso885910 = "ISO-8859-10";

	/**
	 * ISO See [http://www.iana.org/assignments/charset-reg/ISO-8859-13]
	 *
	 * @var string iso885913 = "ISO-8859-13"
	 */
	const iso885913 = "ISO-8859-13";

	/**
	 * ISO See [http://www.iana.org/assignments/charset-reg/ISO-8859-14]
	 *
	 * @var string iso885914 = "ISO-8859-14"
	 */
	const iso885914 = "ISO-8859-14";

	/**
	 * ISO Please see: [http://www.iana.org/assignments/charset-reg/ISO-8859-15]
	 *
	 * @var string iso885915 = "ISO-8859-15"
	 */
	const iso885915 = "ISO-8859-15";

	/**
	 * ISO
	 *
	 * @var string iso885916 = "ISO-8859-16"
	 */
	const iso885916 = "ISO-8859-16";

	/**
	 * Extended ISO 8859-1 Latin-1 for Windows 3.0.<br>
	 * PCL Symbol Set id: 9U
	 *
	 * @var string iso88591windows30latin1 = "ISO-8859-1-Windows-3.0-Latin-1"
	 */
	const iso88591windows30latin1 = "ISO-8859-1-Windows-3.0-Latin-1";

	/**
	 * Extended ISO 8859-1 Latin-1 for Windows 3.1.<br>
	 * PCL Symbol Set id: 19U
	 *
	 * @var string iso88591windows31latin1 = "ISO-8859-1-Windows-3.1-Latin-1"
	 */
	const iso88591windows31latin1 = "ISO-8859-1-Windows-3.1-Latin-1";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string iso88592 = "ISO-8859-2"
	 */
	const iso88592 = "ISO-8859-2";

	/**
	 * Extended ISO 8859-2.<br>
	 * Latin-2 for Windows 3.1.<br>
	 * PCL Symbol Set id: 9E
	 *
	 * @var string iso88592windowslatin2 = "ISO-8859-2-Windows-Latin-2"
	 */
	const iso88592windowslatin2 = "ISO-8859-2-Windows-Latin-2";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string iso88593 = "ISO-8859-3"
	 */
	const iso88593 = "ISO-8859-3";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string iso88594 = "ISO-8859-4"
	 */
	const iso88594 = "ISO-8859-4";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string iso88595 = "ISO-8859-5"
	 */
	const iso88595 = "ISO-8859-5";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string iso88596 = "ISO-8859-6"
	 */
	const iso88596 = "ISO-8859-6";

	/**
	 * [RFC1556]
	 *
	 * @var string iso88596e = "ISO-8859-6-E"
	 */
	const iso88596e = "ISO-8859-6-E";

	/**
	 * [RFC1556]
	 *
	 * @var string iso88596i = "ISO-8859-6-I"
	 */
	const iso88596i = "ISO-8859-6-I";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1947]
	 * [RFC1345]
	 *
	 * @var string iso88597 = "ISO-8859-7"
	 */
	const iso88597 = "ISO-8859-7";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string iso88598 = "ISO-8859-8"
	 */
	const iso88598 = "ISO-8859-8";

	/**
	 * [RFC1556]
	 *
	 * @var string iso88598e = "ISO-8859-8-E"
	 */
	const iso88598e = "ISO-8859-8-E";

	/**
	 * [RFC1556]
	 *
	 * @var string iso88598i = "ISO-8859-8-I"
	 */
	const iso88598i = "ISO-8859-8-I";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string iso88599 = "ISO-8859-9"
	 */
	const iso88599 = "ISO-8859-9";

	/**
	 * Extended ISO 8859-9.<br>
	 * Latin-5 for Windows 3.1.<br>
	 * PCL Symbol Set id: 5T
	 *
	 * @var string iso88599windowslatin5 = "ISO-8859-9-Windows-Latin-5"
	 */
	const iso88599windowslatin5 = "ISO-8859-9-Windows-Latin-5";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string iso8859supp = "ISO_8859-supp"
	 */
	const iso8859supp = "ISO_8859-supp";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string isoir90 = "iso-ir-90"
	 */
	const isoir90 = "iso-ir-90";

	/**
	 * IBM Latin-2, -3, -5, Extended Presentation Set, GCSGID: 1261
	 *
	 * @var string isounicodeibm1261 = "ISO-Unicode-IBM-1261"
	 */
	const isounicodeibm1261 = "ISO-Unicode-IBM-1261";

	/**
	 * IBM Arabic Presentation Set, GCSGID: 1264
	 *
	 * @var string isounicodeibm1264 = "ISO-Unicode-IBM-1264"
	 */
	const isounicodeibm1264 = "ISO-Unicode-IBM-1264";

	/**
	 * IBM Hebrew Presentation Set, GCSGID: 1265
	 *
	 * @var string isounicodeibm1265 = "ISO-Unicode-IBM-1265"
	 */
	const isounicodeibm1265 = "ISO-Unicode-IBM-1265";

	/**
	 * IBM Latin-4 Extended Presentation Set, GCSGID: 1268
	 *
	 * @var string isounicodeibm1268 = "ISO-Unicode-IBM-1268"
	 */
	const isounicodeibm1268 = "ISO-Unicode-IBM-1268";

	/**
	 * IBM IBM Cyrillic Greek Extended Presentation Set, GCSGID: 1276
	 *
	 * @var string isounicodeibm1276 = "ISO-Unicode-IBM-1276"
	 */
	const isounicodeibm1276 = "ISO-Unicode-IBM-1276";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string it = "IT"
	 */
	const it = "IT";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string jisc62201969jp = "JIS_C6220-1969-jp"
	 */
	const jisc62201969jp = "JIS_C6220-1969-jp";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string jisc62201969ro = "JIS_C6220-1969-ro"
	 */
	const jisc62201969ro = "JIS_C6220-1969-ro";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string jisc62261978 = "JIS_C6226-1978"
	 */
	const jisc62261978 = "JIS_C6226-1978";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string jisc62261983 = "JIS_C6226-1983"
	 */
	const jisc62261983 = "JIS_C6226-1983";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string jisc62261984a = "JIS_C6226-1984-a"
	 */
	const jisc62261984a = "JIS_C6226-1984-a";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string jisc62261984b = "JIS_C6226-1984-b"
	 */
	const jisc62261984b = "JIS_C6226-1984-b";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string jisc62261984badd = "JIS_C6226-1984-b-add"
	 */
	const jisc62261984badd = "JIS_C6226-1984-b-add";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string jisc62261984badd = "JIS_C6226-1984-b-add"
	 */
	const jisc62261984hand = "JIS_C6226-1984-hand";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string jisc62261984badd = "JIS_C6226-1984-b-add"
	 */
	const jisc62261984handadd = "JIS_C6226-1984-hand-add";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string jisc62261984kana = "JIS_C6226-1984-kana"
	 */
	const jisc62261984kana = "JIS_C6226-1984-kana";

	/**
	 * JIS X 0202-1991.<br>
	 * Uses ISO 2022 escape sequences to shift code sets as documented in JIS X 0202-1991.
	 *
	 * @var string jisencoding = "JIS_Encoding"
	 */
	const jisencoding = "JIS_Encoding";

	/**
	 * JIS X 0201-1976.<br>
	 * One byte only, this is equivalent to JIS/Roman (similar to ASCII) plus eight-bit half-width Katakana<br>
	 * [RFC1345]
	 *
	 * @var string jisx0201 = "JIS_X0201"
	 */
	const jisx0201 = "JIS_X0201";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string jisx02121990 = "JIS_X0212-1990"
	 */
	const jisx02121990 = "JIS_X0212-1990";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string jusib1002 = "JUS_I.B1.002"
	 */
	const jusib1002 = "JUS_I.B1.002";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string jusib1003mac = "JUS_I.B1.003-mac"
	 */
	const jusib1003mac = "JUS_I.B1.003-mac";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string jusib1003serb = "JUS_I.B1.003-serb"
	 */
	const jusib1003serb = "JUS_I.B1.003-serb";

	/**
	 * See [http://www.iana.org/assignments/charset-reg/KOI7-switched]
	 *
	 * @var string koi7switched = "KOI7-switched"
	 */
	const koi7switched = "KOI7-switched";

	/**
	 * [RFC1489], based on GOST-19768-74, ISO-6937/8, INIS-Cyrillic, ISO-5427.
	 *
	 * @var string koi8r = "KOI8-R"
	 */
	const koi8r = "KOI8-R";

	/**
	 * [RFC2319]
	 *
	 * @var string koi8u = "KOI8-U"
	 */
	const koi8u = "KOI8-U";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string ksc56011987 = "KS_C_5601-1987"
	 */
	const ksc56011987 = "KS_C_5601-1987";

	/**
	 * [RFC1345]
	 *
	 * @var string ksc5636 = "KSC5636"
	 */
	const ksc5636 = "KSC5636";

	/**
	 * See [http://www.iana.org/assignments/charset-reg/KZ-1048]
	 *
	 * @var string kz1048 = "KZ-1048"
	 */
	const kz1048 = "KZ-1048";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string latingreek = "latin-greek"
	 */
	const latingreek = "latin-greek";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string latingreek1 = "latin-greek-1"
	 */
	const latingreek1 = "latin-greek-1";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string latinlap = "latin-lap"
	 */
	const latinlap = "latin-lap";

	/**
	 * The Unicode Standard ver1.0, ISBN 0-201-56788-1, Oct 1991<br>
	 * [RFC1345]
	 *
	 * @var string macintosh = "macintosh"
	 */
	const macintosh = "macintosh";

	/**
	 * PCL 5 Comparison Guide, Hewlett-Packard, HP part number 5961-0510, October 1992 PCL Symbol Set id: 6J
	 *
	 * @var string microsoftpublishing = "Microsoft-Publishing"
	 */
	const microsoftpublishing = "Microsoft-Publishing";

	/**
	 * [RFC1345], also known as "mnemonic+ascii+8200"
	 *
	 * @var string mnem = "MNEM"
	 */
	const mnem = "MNEM";

	/**
	 * [RFC1345], also known as "mnemonic+ascii+38"
	 *
	 * @var string mnemonic = "MNEMONIC"
	 */
	const mnemonic = "MNEMONIC";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string msz77953 = "MSZ_7795.3"
	 */
	const msz77953 = "MSZ_7795.3";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string natsdano = "NATS-DANO"
	 */
	const natsdano = "NATS-DANO";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string natsdanoadd = "NATS-DANO-ADD"
	 */
	const natsdanoadd = "NATS-DANO-ADD";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string natsdano = "NATS-DANO"
	 */
	const natssefi = "NATS-DANO";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string natssefiadd = "NATS-SEFI-ADD"
	 */
	const natssefiadd = "NATS-SEFI-ADD";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string ncnc001081 = "NC_NC00-10:81"
	 */
	const ncnc001081 = "NC_NC00-10:81";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string nfz62010 = "NF_Z_62-010"
	 */
	const nfz62010 = "NF_Z_62-010";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string nfz620101973 = "NF_Z_62-010_(1973)"
	 */
	const nfz620101973 = "NF_Z_62-010_(1973)";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string ns45511 = "NS_4551-1"
	 */
	const ns45511 = "NS_4551-1";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string ns45512 = "NS_4551-2"
	 */
	const ns45512 = "NS_4551-2";

	/**
	 * Fujitsu-Siemens standard mainframe EBCDIC encoding<br>
	 * Please see: [http://www.iana.org/assignments/charset-reg/OSD-EBCDIC-DF03-IRV]
	 *
	 * @var string osdebcdicdf03irv = "OSD_EBCDIC_DF03_IRV"
	 */
	const osdebcdicdf03irv = "OSD_EBCDIC_DF03_IRV";

	/**
	 * Fujitsu-Siemens standard mainframe EBCDIC encoding<br>
	 * Please see: [http://www.iana.org/assignments/charset-reg/OSD-EBCDIC-DF04-1]
	 *
	 * @var string osdebcdicdf041 = "OSD_EBCDIC_DF04_1"
	 */
	const osdebcdicdf041 = "OSD_EBCDIC_DF04_1";

	/**
	 * Fujitsu-Siemens standard mainframe EBCDIC encoding<br>
	 * Please see: [http://www.iana.org/assignments/charset-reg/OSD-EBCDIC-DF04-15]
	 *
	 * @var string osdebcdicdf0415 = "OSD_EBCDIC_DF04_15"
	 */
	const osdebcdicdf0415 = "OSD_EBCDIC_DF04_15";

	/**
	 * PC Danish Norwegian 8-bit PC set for Danish Norwegian<br>
	 * PCL Symbol Set id: 11U
	 *
	 * @var string pc8danishnorwegian = "PC8-Danish-Norwegian"
	 */
	const pc8danishnorwegian = "PC8-Danish-Norwegian";

	/**
	 * PC Latin Turkish.<br>
	 * PCL Symbol Set id: 9T
	 *
	 * @var string pc8turkish = "PC8-Turkish"
	 */
	const pc8turkish = "PC8-Turkish";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string pt = "PT"
	 */
	const pt = "PT";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string pt2 = "PT2"
	 */
	const pt2 = "PT2";

	/**
	 * See [http://www.iana.org/assignments/charset-reg/PTCP154]
	 *
	 * @var string ptcp154 = "PTCP154"
	 */
	const ptcp154 = "PTCP154";

	/**
	 * See [http://www.iana.org/assignments/charset-reg/SCSU]
	 *
	 * @var string scsu = "SCSU"
	 */
	const scsu = "SCSU";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string sen850200b = "SEN_850200_B"
	 */
	const sen850200b = "SEN_850200_B";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string sen850200c = "SEN_850200_C"
	 */
	const sen850200c = "SEN_850200_C";

	/**
	 * This charset is an extension of csHalfWidthKatakana by adding graphic characters in JIS X 0208.<br>
	 * The CCS's are JIS X0201:1997 and JIS X0208:1997.<br>
	 * The complete definition is shown in Appendix 1 of JIS X0208:1997.<br>
	 * This charset can be used for the top-level media type "text".
	 *
	 * @var string shiftjis = "Shift_JIS"
	 */
	const shiftjis = "Shift_JIS";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string t101g2 = "T.101-G2"
	 */
	const t101g2 = "T.101-G2";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string t617bit = "T.61-7bit"
	 */
	const t617bit = "T.61-7bit";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string t618bit = "T.61-8bit"
	 */
	const t618bit = "T.61-8bit";

	/**
	 * Thai Industrial Standards Institute (TISI)
	 *
	 * @var string tis620 = "TIS-620"
	 */
	const tis620 = "TIS-620";

	/**
	 * See [http://www.iana.org/assignments/charset-reg/TSCII]
	 *
	 * @var string tscii = "TSCII"
	 */
	const tscii = "TSCII";

	/**
	 * [RFC1641]
	 *
	 * @var string unicode11 = "UNICODE-1-1"
	 */
	const unicode11 = "UNICODE-1-1";

	/**
	 * [RFC1641]
	 *
	 * @var string unicode11utf7 = "UNICODE-1-1-UTF-7"
	 */
	const unicode11utf7 = "UNICODE-1-1-UTF-7";

	/**
	 * [RFC1428]
	 *
	 * @var string unknown8bit = "UNKNOWN-8BIT"
	 */
	const unknown8bit = "UNKNOWN-8BIT";

	/**
	 * ANSI X3.4-1986<br>
	 * [RFC2046]
	 *
	 * @var string usascii = "US-ASCII"
	 */
	const usascii = "US-ASCII";

	/**
	 * [RFC1345]
	 *
	 * @var string usdk = "us-dk"
	 */
	const usdk = "us-dk";

	/**
	 * [RFC2781]
	 *
	 * @var string utf16 = "UTF-16"
	 */
	const utf16 = "UTF-16";

	/**
	 * [RFC2781]
	 *
	 * @var string utf16be = "UTF-16BE"
	 */
	const utf16be = "UTF-16BE";

	/**
	 * [RFC2781]
	 *
	 * @var string utf16le = "UTF-16LE"
	 */
	const utf16le = "UTF-16LE";

	/**
	 * [http://www.unicode.org/unicode/reports/tr19/]
	 *
	 * @var string utf32 = "UTF-32"
	 */
	const utf32 = "UTF-32";

	/**
	 * [http://www.unicode.org/unicode/reports/tr19/]
	 *
	 * @var string utf32be = "UTF-32BE"
	 */
	const utf32be = "UTF-32BE";

	/**
	 * [http://www.unicode.org/unicode/reports/tr19/]
	 *
	 * @var string utf32le = "UTF-32LE"
	 */
	const utf32le = "UTF-32LE";

	/**
	 * [RFC2152]
	 *
	 * @var string utf7 = "UTF-7"
	 */
	const utf7 = "UTF-7";

	/**
	 * Default.
	 * [RFC3629]
	 *
	 * @var string utf8 = "UTF-8"
	 */
	const utf8 = "UTF-8";

	/**
	 * Ventura International.<br>
	 * ASCII plus coded characters similar to Roman8.<br>
	 * PCL Symbol Set id: 13J
	 *
	 * @var string venturainternational= "Ventura-International"
	 */
	const venturainternational = "Ventura-International";

	/**
	 * PCL 5 Comparison Guide, Hewlett-Packard, HP part number 5961-0510, October 1992 PCL Symbol Set id: 6M
	 *
	 * @var string venturamath = "Ventura-Math"
	 */
	const venturamath = "Ventura-Math";

	/**
	 * Ventura US.<br>
	 * ASCII plus characters typically used in publishing, like pilcrow, copyright, registered, trade mark, section, dagger, and double dagger in the range A0 (hex) to FF (hex).<br>
	 * PCL Symbol Set id: 14J
	 *
	 * @var string venturaus = "Ventura-US"
	 */
	const venturaus = "Ventura-US";

	/**
	 * [ISO-IR: International Register of Escape Sequences]<br>
	 * Note: The current registration authority is IPSJ/ITSCJ, Japan.<br>
	 * [RFC1345]
	 *
	 * @var string videotexsuppl = "videotex-suppl"
	 */
	const videotexsuppl = "videotex-suppl";

	/**
	 * [RFC1456]
	 *
	 * @var string viqr = "VIQR"
	 */
	const viqr = "VIQR";

	/**
	 * [RFC1456]
	 *
	 * @var string viscii = "VISCII"
	 */
	const viscii = "VISCII";

	/**
	 * Microsoft [http://www.iana.org/assignments/charset-reg/windows-1250]
	 *
	 * @var string windows1250 = "windows-1250"
	 */
	const windows1250 = "windows-1250";

	/**
	 * Microsoft [http://www.iana.org/assignments/charset-reg/windows-1251]
	 *
	 * @var string windows1251 = "windows-1251"
	 */
	const windows1251 = "windows-1251";

	/**
	 * Microsoft [http://www.iana.org/assignments/charset-reg/windows-1252]
	 *
	 * @var string windows1252 = "windows-1252"
	 */
	const windows1252 = "windows-1252";

	/**
	 * Microsoft [http://www.iana.org/assignments/charset-reg/windows-1253]
	 *
	 * @var string windows1253 = "windows-1253"
	 */
	const windows1253 = "windows-1253";

	/**
	 * Microsoft [http://www.iana.org/assignments/charset-reg/windows-1254]
	 *
	 * @var string windows1254 = "windows-1254"
	 */
	const windows1254 = "windows-1254";

	/**
	 * Microsoft [http://www.iana.org/assignments/charset-reg/windows-1255]
	 *
	 * @var string windows1255 = "windows-1255"
	 */
	const windows1255 = "windows-1255";

	/**
	 * Microsoft [http://www.iana.org/assignments/charset-reg/windows-1256]
	 *
	 * @var string windows1256 = "windows-1256"
	 */
	const windows1256 = "windows-1256";

	/**
	 * Microsoft [http://www.iana.org/assignments/charset-reg/windows-1257]
	 *
	 * @var string windows1257 = "windows-1257"
	 */
	const windows1257 = "windows-1257";

	/**
	 * Microsoft [http://www.iana.org/assignments/charset-reg/windows-1258]
	 *
	 * @var string windows1258 = "windows-1258"
	 */
	const windows1258 = "windows-1258";

	/**
	 * Windows Japanese.<br>
	 * A further extension of Shift_JIS to include NEC special characters (Row 13), NEC selection of IBM extensions (Rows 89 to 92), and IBM extensions (Rows 115 to 119).<br>
	 * The CCS's are JIS X0201:1997, JIS X0208:1997, and these extensions.<br>
	 * This charset can be used for the top-level media type "text", but it is of limited or specialized use (see [RFC2278]).<br>
	 * PCL Symbol Set id: 19K
	 *
	 * @var string windows31j = "Windows-31J"
	 */
	const windows31j = "Windows-31J";

	/**
	 * See [http://www.iana.org/assignments/charset-reg/windows-874]
	 *
	 * @var string windows874 = "windows-874"
	 */
	const windows874 = "windows-874";
}