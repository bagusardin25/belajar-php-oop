<?php
class Person{
    var string $name;
    var ?string $addres = null; //bisa null
    var string $country = "Indonesia";

    function SayHello(string $name){
        echo "Nama: $name" . PHP_EOL;
    }
}
?>