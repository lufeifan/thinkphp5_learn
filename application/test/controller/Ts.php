<?php


namespace app\test\controller;

//使用模型Name
use \app\test\model\Name;
use think\Controller;

class Ts extends Controller
{
    public function t(){
        $s=Name::select();
        return json($s);
    }
    //添加一条数据
    public function insert(){
        $name=new Name();
        $name->name='lululua';
        $name->save();
    }

}