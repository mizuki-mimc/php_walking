<?php
$fruits = ["apple", "banana"] ;
echo json_encode($fruits) . PHP_EOL ;
array_unshift($fruits, "cherry") ;
echo json_encode($fruits) . PHP_EOL ;
