<?php
/**
 * Created by PhpStorm.
 * User: Felix
 * Date: 2017/2/14
 * Time: 下午2:44
 */
namespace Felix\Factory\House;

use \Felix\Factory\Color;

class Blue implements HouseInterface
{
	public function brushing()
	{
		return new Color\Blue();
	}
}