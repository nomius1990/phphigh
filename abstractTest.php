<?php
/**
 * Created by PhpStorm.
 * User: Duty
 * Date: 4/28/19
 * Time: 1:58 PM
 * Email: duty.li@silksoftware.com
 */

abstract class Car{

    protected  $name;

    public function addOil(){

    }

    abstract function setName($vaue);

    public function getName(){
        return $this->name;
    }

}

class bmw extends Car{

    public function setName($vaue)
    {
        $this->name = $vaue;
    }
}

$bmw = new bmw();

$bmw->setName('bmw');
echo $bmw->getName();