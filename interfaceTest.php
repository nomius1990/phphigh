<?php
/**
 * Created by PhpStorm.
 * User: Duty
 * Date: 4/28/19
 * Time: 1:46 PM
 * Email: duty.li@silksoftware.com
 */

interface person{
    public function getAge();
}

class student implements person{

    public function getAge()
    {
        echo 'the age is 18';
    }

    public function study(){

    }
}

class teacher implements person{

    public function getAge()
    {
        echo 'the age is 30';
    }

    public function teach(){

    }
}


function run(person $obj){
    $obj->teach();
}

run(new teacher());
//run(new student());
