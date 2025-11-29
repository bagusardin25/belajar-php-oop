<?php
class Person{
    const AUTHOR = "Bagus Ardin Prayoga";
    var ?string $name = null;
    var ?string $addres = null; //bisa null
    var string $country = "Indonesia";
    var ?int $age = null;

    function __construct(?string $name, ?string $addres, ?int $age){
        $this->name = $name;
        $this->addres = $addres;
        $this->age = $age;
    }

    function SayHello(?string $name){
        if (is_null($name)){
            echo "Hi, My name is $this->name" . PHP_EOL;
        }
            echo "Hi $name, My name is $this->name" . PHP_EOL;
        // echo "Hello $name" . PHP_EOL;
    }

    function infoAuthor(){
        echo "AUTHOR: " . self::AUTHOR . PHP_EOL;
    }
}
?>