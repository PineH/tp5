<?php
/**
 * Created by PhpStorm.
 * User: H
 * Date: 2017/10/23
 * Time: 13:07
 */

namespace app\index\controller;
use think\Controller;
use think\Db;

/**
 * 教学环境
 * Class Ambient
 * @package app\index\controller
 */
class Ambient extends Controller
{
    /**
     * 教学环境-列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function index(){
        $ambient    =   Db::name('ambient_data')->where('status',0)->select();
        return view('index',['ambient' => $ambient]);
    }

    /**
     * 教学环境-详情
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function details(){
        $id     =   input('param.id');

        $ambient   =   Db::name('ambient')
            ->where('two_id',$id)
            ->where('status',0)
            ->select();

        return view('details',['ambient' => $ambient]);
    }
}