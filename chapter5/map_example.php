<?php
$numbers = [1, 2, 3, 4, 5] ;
$doubled_numbers = array_map(function($n){
    return $n * 2 ;
}, $numbers) ;

echo json_encode($numbers) . PHP_EOL ;
echo json_encode($doubled_numbers) . PHP_EOL ; 
