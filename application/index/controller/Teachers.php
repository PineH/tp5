<?php
/**
 * Created by PhpStorm.
 * User: H
 * Date: 2017/10/23
 * Time: 10:34
 */

namespace app\index\controller;
use think\Controller;
use think\Db;

/**
 * 师资力量
 * Class Teachers
 * @package app\index\controller
 */
class Teachers extends Controller
{
    public function index(){
        $list   =   Db::name('teacher')->where('status',0)->select();
        return view('index',["list" => $list]);
    }

    /**
     * 师资力量详情
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function details(){
        $id     =   input('param.id');
        $data   =   Db::name('teacher')->where('id',$id)->find();
        return view('details',["data" => $data]);
    }
}