<?php
$a = true;
$b = false;

echo var_export($a && $b) . PHP_EOL;
echo var_export($a || $b) . PHP_EOL;
echo var_export(!$a) . PHP_EOL;
echo var_export(!$b) . PHP_EOL;
