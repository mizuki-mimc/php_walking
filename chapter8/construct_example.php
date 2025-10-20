<?php
class Person {
    private $name;
    private $age;

# 初期設定
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

# 情報を表示する関数
    public function info() {
        return "{$this->name}, {$this->age}歳";
    }
}

# 実際に人を作って表示する
$person = new Person("太郎", 30);
var_dump($person);
echo $person->info() . "\n";
