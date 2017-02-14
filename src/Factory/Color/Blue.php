<?php
/**
 * Created by PhpStorm.
 * User: Felix
 * Date: 2017/2/13
 * Time: 下午3:49
 */
namespace Felix\Factory\Color;

class Blue implements ColorInterface
{
	public function make()
	{
		return 'blue';
	}
}