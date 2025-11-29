<?php
class Person{
    var ?string $name = null;
    var ?string $addres = null; //bisa null
    var string $country = "Indonesia";

    function SayHello(?string $name){
        if (is_null($name)){
            echo "Hi, My name is $this->name" . PHP_EOL;
        }
            echo "Hi $name, My name is $this->name" . PHP_EOL;
        // echo "Hello $name" . PHP_EOL;
    }
}
?>