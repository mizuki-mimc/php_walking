<?php
$fruits = ["apple", "banana", "avocado"] ;
echo json_encode($fruits) . PHP_EOL ;
unset($fruits[1]) ;
echo json_encode(array_values($fruits)) . PHP_EOL ;
