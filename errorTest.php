<?php
/**
 * Created by PhpStorm.
 * User: Duty
 * Date: 4/28/19
 * Time: 3:28 PM
 * Email: duty.li@silksoftware.com
 */


function selfError($errno,$errorstr,$errfile,$errline){

    echo "错误代码 $errno".PHP_EOL;
    echo "错误信息 $errorstr".PHP_EOL;
    echo "错误文件 $errfile".PHP_EOL;
    echo "错误行$errline".PHP_EOL;
}

set_error_handler('selfError',E_ALL | E_STRICT);

$a = ['o'=>2,3,4];
echo $a[o];

class shutDown{
    public function stop(){
        if(error_get_last()){
            print_r(error_get_last());
        }
        die('Stop.');
    }
}

register_shutdown_function(array(new shutDown(),'stop'));
trigger_error('nihao');
//$a = new a();
echo 'must stop';