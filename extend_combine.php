<?php
/**
 * Created by PhpStorm.
 * User: Duty
 * Date: 4/28/19
 * Time: 12:52 PM
 * Email: duty.li@silksoftware.com
 *
 * 类的组合和继承
 * 类和类之间有一种父子关系,子类继承父类的属性和方法称为继承在继承里,子类拥有父类的方法和属性,同时子类也可以有自己的方法和属性   --- 继承
 * 在对象中 某个属性是一个类,并调用它的方法处理问题,这种复用的方式教组合
 *
 */

class p{

    public $name;

    public function getName(){
        return $this->name;
    }

    public function setName($value){
        $this->name = $value;
    }


}




class c{

    public $age;

    public function getAge(){
        return $this->age;
    }

    public function setAge($value){
        $this->age = $value;
    }

}

class com{

    public $age;
    public $name;

    public function __construct()
    {
        $this->age = new c();
        $this->name = new p();
    }

    public function getName(){
        return $this->name->getName();
    }

    public function setName($value){
        $this->name->setName($value);
    }

    public function getAge(){
        return $this->age->getAge();
    }

}

$com = new com();
$com->setName('i am name');
echo $com->getName();