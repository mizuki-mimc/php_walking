<?php
$fruits = ["apple", "banana", "cherry", "date", "elderberry"] ;

echo json_encode(array_slice($fruits, 1, 3)) . PHP_EOL;
