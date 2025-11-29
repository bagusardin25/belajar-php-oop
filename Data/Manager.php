<?php
class Manager{
    var string $name;
    function SayHello(string $name):void{
        echo "Hi, $name, my name is $this->name" . PHP_EOL;
    }
}

class Turunan extends Manager{

}
?>