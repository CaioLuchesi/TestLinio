<?php

namespace TestLinio;

require_once("vendor/autoload.php");

use Test\Classes\Calculate;

$calculo = new Calculate(100);
$arrayfinal = $calculo->calculate();

foreach ($arrayfinal as $element) {
    echo($element);
    echo "</br>";
}
