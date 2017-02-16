<?php
/**
 * Created by PhpStorm.
 * User: Felix
 * Date: 2017/2/14
 * Time: 上午10:59
 */

require './vendor/autoload.php';

//factory
use Felix\Factory\House\Blue;
use Felix\Factory\House\Red;

$blueHouse = new Blue();
$redHouse = new Red();

echo $blueHouse->brushing()->make();
echo "\n";
echo $redHouse->brushing()->make();
echo "\n";


