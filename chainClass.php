<?php

    class test{

        public function test1(){
            echo 'test1';
            return $this;
        }

        public function test2(){
            echo 'test2';
            return $this;
        }

    }

    $test = new test();
    $test->test1()->test2();

?>