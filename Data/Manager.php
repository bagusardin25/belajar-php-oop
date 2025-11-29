<?php
class Suami{
    var string $name;
    var ?int $age;
    function Anak(string $name){
        echo "Aku adalahh $name, anak dari bapak $this->name" . PHP_EOL;
    }
}
class Istri extends Suami{

}
?>