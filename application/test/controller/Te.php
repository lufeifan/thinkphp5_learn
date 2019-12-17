<?php

namespace app\test\controller;
use think\Controller;
use think\Db;
//数据库的增删查改，关联，视图，权限
class Te extends Controller
{
    public function t(){
        $s=Db::table("user")->select(); //查询全部数据
        return json($s);
    }

    public function que(){
        //name 有前缀
        //table 无前缀
//        $s=Db::name("user")->where('username',"John")->find();  //返回一条数据
        $s=Db::table("user")->where('username',"John")->find();
//        $s=Db::name("user")->where('username',"John")->select();             //返回多条数据
        return json($s);
    }

    public function inser(){
        //删除数据
        $s=Db::table('user')->where('id','<',2)->delete();
        //更新数据表中的数据
//        $s=Db::table('user')->where('id', 1)->update(['username' => 'thinkphp']);
        //查询某一列的值
//        $s=Db::table("user")->column("username");
        //返回某个字段
//        $s=Db::table("user")->where("id",1)->value("username");
        //插入数据
//        $s=Db::table("user")->insert(["username"=>'name',"goodsaddress"=>'goodsaddress',"images"=>'134']);
        return json($s);
    }
}