<?php

/**
 *这个类的用户是用来测试适配器
 */

/**
 *导入适配器类
 */
include('./Adapter.class.php');

class TestApi {

    public function run()
    {
        $adapter = new Adapter();
        $adapter->test();
        echo "\r\n";
        $adapter->doSomeThing('一句话');
        echo "\r\n"; 
    }

}

$testApi = new TestApi();
$testApi->run();
