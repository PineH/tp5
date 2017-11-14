<?php
/**
 * Created by PhpStorm.
 * User: H
 * Date: 2017/10/26
 * Time: 13:42
 */

namespace app\index\controller;
use think\Controller;
use think\Db;
/**
 * 活动现场
 * Class Activity
 * @package app\index\controller
 */
class Activity extends Controller
{
    /**
     * 活动现场列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function index(){
        /**
         * 活动
         */
        $activity   =   Db::name('activity')->where('status',0)->select();

        return view('index',["activity" => $activity]);
    }

    /**
     * 活动现场详情
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function details(){
        $id     =   input('param.id');
        $data   =   Db::name('activity')->where('id',$id)->find();

        return view('details',["data" => $data]);
    }
}