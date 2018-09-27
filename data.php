<?php
/**
 * Created by IntelliJ IDEA.
 * User: bbsyr
 * Date: 2018/9/25
 * Time: 下午2:32
 * --php class 用法---
 */

class data
{
    function echo_int(){
        echo "------------********-----------\n";
        $test_int_10 = -100;
        var_dump($test_int_10);
        $test_int_8 = 0100;
        var_dump($test_int_8);
        $test_int_16 = 0x100;
        var_dump($test_int_16);
    }

    function echo_float(){
        echo "------------********-----------\n";
        $test_float_1 = 120.2432;
        var_dump($test_float_1);
        $test_float_2 = 2.4e3;
        var_dump($test_float_2);
        $test_float_3 = 8E+5;
        var_dump($test_float_3);
    }

    function echo_array(){
        $test_array = array("string_a","string_b","string_c");
        var_dump($test_array);
    }

    function echo_bool(){
        echo "------------********-----------\n";
        $test_true = true ;
        var_dump($test_true);
        $test_false = false ;
        var_dump($test_false);
    }

    function echo_null(){
        echo "------------********-----------\n";
        $test_null = null ;
        var_dump($test_null);
    }


}

echo "------------********-----------\n";
$test_object = new data();
var_dump($test_object);

$test_object->echo_int();
$test_object->echo_float();
$test_object->echo_array();
$test_object->echo_bool();
$test_object->echo_null();














