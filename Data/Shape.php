<?php
namespace Data;
class Shape {
    public function getCorner(){
        return 90;
    }
}
class Rextengel extends Shape{
        public function getCorner(){
        return 80;
        }
        public function getParentCorner(){
            return parent::getCorner();
        }
    }


?>