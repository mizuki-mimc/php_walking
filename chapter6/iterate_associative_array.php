<?php
$associative_array = [
    "name" => "Alice",
    "age" => 30,
    "city" => "Wonderland"
];

foreach ($associative_array as $key => $value) {
    echo "{$key}: {$value}" . PHP_EOL;
}
