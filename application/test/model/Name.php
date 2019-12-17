<?php

namespace app\test\model;


use think\Model;
//数据库模型
class Name extends Model
{
    //设置主键
    protected $pk='id';
    //初始化方法
//    protected static function init()
//    {
//        echo '123';
//    }
    //获取器
    public function getStatusAttr($value)
    {
        $status = [-1=>'删除',0=>'禁用',1=>'正常',2=>'待审核'];
        return $status[$value];
    }
}