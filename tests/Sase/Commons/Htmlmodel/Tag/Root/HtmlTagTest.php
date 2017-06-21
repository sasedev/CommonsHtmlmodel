<?php
namespace Sase\Commons\Htmlmodel\Tag\Root;

use PHPUnit\Framework\TestCase;
use Sase\Commons\Htmlmodel\Attribute\General\LangAttribute;
use Sase\Commons\Htmlmodel\Enum\ISO639_1Enum;

/**
 * HtmlTagTest
 *
 * @author <a href="mailto:seif.salah@gmail.com">sasedev</a>
 */
class HtmlTagTest extends TestCase
{

	/**
	 * StupidTest
	 */
	public function testToString()
	{
		$lang = ISO639_1Enum::French();

		$langAttribute = new LangAttribute();
		$langAttribute->setValue($lang);

		$htmlTag = new HtmlTag();
		$htmlTag->addAttribute($langAttribute);
		$htmlTag->setContent('<!-- add content -->');

		$expectedResult = '<!DOCTYPE html>' . PHP_EOL . '<html lang="fr">' . PHP_EOL . '<!-- add content -->' . PHP_EOL . '</html>';

		$this->assertEquals($expectedResult, $htmlTag);
	}
}