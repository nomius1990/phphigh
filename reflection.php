<?php

//反射的作用
//反射可以用于生成文档,因此可以用他对文建里面的类进行扫描,逐个生成描述文档, 或者实现hook

class p{

    public $name;

    public function getName(){
        return $this->name;
    }

    public function setName($value){
        $this->name = $value;
    }

    public function showTest(){
        echo 'i am from class p'.PHP_EOL;
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
$com2 = new com();
$com->setName('Smith');
//echo $com->getName();

$reflect = new ReflectionObject($com);
$props = $reflect->getProperties();
foreach ($props as $prop){
    echo $prop->getName().PHP_EOL;
}

foreach ($reflect->getMethods() as $prop ){
    echo $prop->getName().PHP_EOL;
}


//获取对象属性列表所属的类
var_dump(get_class($com2));

//返回对象属性的关联数组
var_dump(get_object_vars($com));

//返回类的所有方法
var_dump(get_class_methods(get_class($com)));

//返回由类的属性所组成的数组
var_dump(get_class_vars(get_class($com)));
