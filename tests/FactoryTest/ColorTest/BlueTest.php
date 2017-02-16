<?php
/**
 * Created by PhpStorm.
 * User: Felix
 * Date: 2017/2/16
 * Time: 下午10:16
 */

namespace Felix\Test\Factory\Color;

use Felix\Factory\Color\Blue;

class BlueTest extends \PHPUnit_Framework_TestCase
{
	public function makeTest()
	{
		$this->assertEquals('blue', (new Blue())->make());
	}
}