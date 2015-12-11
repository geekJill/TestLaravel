<?php

/**
 *导入需要被实现的接口和被适配的类
 */
include('./test.interface.php');
include('./Source.php');

/**
 *这就是一个是适配器类
 *
 */
class Adapter implements test {

    public function test()
    {
        echo 'implements interface test method';
    } 

    public function test2()
    {

    }

    public function doSomeThing($inAWord)
    {
	$source = new Source();
        $source->doSomeThing($inAWord);
    }

}
