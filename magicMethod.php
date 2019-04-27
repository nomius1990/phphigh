<?php

// php 静态方法  __set  __get  访问不存在或者私有属性的时候能用上

class test{

    private $_name;
    private $_age;

    //设置默认值  当
    public function __get($name)
    {
        // TODO: Implement __get() method.
        $this->$name = 'default '.$name;
        return $this->$name;
    }

    //设置默认值
    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
        $this->$name = $value;
    }

    //防止调用不存在的方法
    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.

        echo "$name 方法不存在,调用参数是".json_encode($arguments).PHP_EOL;
    }

    //防止调用不存在的静态方法
    public static  function __callStatic($name, $arguments)
    {
        // TODO: Implement __callStatic() method.

        echo 'you are calling not exist static method '.$name.PHP_EOL;
    }

    //直接echo 对象的时候 会调用 __toString 方法
    public function __toString()
    {
        // TODO: Implement __toString() method.
        return 'this callled __toString method';
    }


}

$test = new test('2222');
echo $test;

//test::nimei();

//$test->haha('3333');
