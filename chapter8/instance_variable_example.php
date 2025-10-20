<?php
class Person {
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
        $country = "Japan";
    }

    public function info() {
        return "{$this->name}, {$this->age}歳, {$country}出身";
    }
}

$person = new Person("太郎", 30);
var_dump($person);
echo $person->info() . "\n";
