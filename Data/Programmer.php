<?php
class Programmer{
    public string $name;
    public function __construct(string $name){
        $this->name = $name;
    }
    public function Work(){
        echo "I am coding in general" . PHP_EOL;
    }
}
class BackendProgrammer extends Programmer{
    public function Work(){
        echo "I build API" . PHP_EOL;
    }
}
class FrontendProgrammer extends Programmer{
    public function Work(){
        echo "I build UI" . PHP_EOL;
    }
}
class Company{
    public Programmer $programmer;
}
?>