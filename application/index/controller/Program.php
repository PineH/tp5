<?php
/**
 * Created by PhpStorm.
 * User: H
 * Date: 2017/10/31
 * Time: 15:18
 */

namespace app\index\controller;
use think\Controller;
use think\Db;

/**
 * 教学项目 and 录音棚
 * Class Program
 * @package app\index\controller
 */
class Program extends Controller
{
    /**
     * 首页
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function index(){
        /**
         *教学项目 标题
         */
        $title_list     =     Db::name('tape')->select();

        /**
         * 内容第一次加载
         */
        $content    =   Db::name('tape')->where('id',1)->find();
        return view('index',["title_list" => $title_list, "data" => $content]);
    }

    /**
     * 点击标题查询内容
     */
    public function getconotent(){
        $id     =     input('post.pid');
        $data   =     Db::name('tape')->where('id',$id)->find();
        echo json_encode([ "data" => $data]);
    }
}