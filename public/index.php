<?php

require_once '../vendor/autoload.php';

use System\Duck;
use System\FDuck;
use System\MDuck;

$duck = new FDuck();
$duck2 = new MDuck();


$duck->fly();
echo "<br>";
$duck2->fly();

//echo '<pre>';
//print_r($duck);
//echo '</pre>';