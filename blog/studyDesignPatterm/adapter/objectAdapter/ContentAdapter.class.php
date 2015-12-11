<?php

include('./insert.interface.php');

class ContentAdapter implements insert {

    /**
     *@access private
     *
     *@var 被适配的对象
     */
    private $contentObj;

    /**
     *@author jerry
     *@date 2015-12-10
     *@description 内容适配器初始化时需要传递被适配的对象
     *@param object $conentObj 需要被适配的对象
     *@return bool  失败返回false,成功把适配的对象赋值给成员属性($contentObj)
     */
    public function __construct($contentObj)
    {
        if(is_object($contentObj))
        {
            $this->contentObj = $contentObj;
        }
        else
        {
            $error = false;
	    return $error;
        }
    }

    /**
     *@author jerry
     *@date 2015-12-10
     *@description 把insert接口的重写
     */
    public function insertContent($data)
    {
	$this->contentObj->insert($data);
    }

}
