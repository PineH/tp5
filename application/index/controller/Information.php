<?php
/**
 * Created by PhpStorm.
 * User: H
 * Date: 2017/10/20
 * Time: 10:32
 */

namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Request;

/**
 * 音乐资讯
 * Class Information
 * @package app\index\controller
 */
class Information extends Controller{
    /**
     * 音乐资讯-首页
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function index(){
        $i      =   input('param.i');
        /**
         * 音乐小知识
         */
        $small  =   Db::name('trends')
            ->where('status',0)
            ->where('two_id',5)
            ->select();

        /**
         * 行业动态
         */
        $trade  =   Db::name('trends')
            ->where('two_id',1)
            ->where('status',0)
            ->select();

        /**
         * 招聘 列表
         */
        $recruit    =   Db::name('recruit')->where('status',0)->select();

        /**
         *  招聘 底部信息
         */
        $recruit_bottom     =    Db::name('recruit')->where('id',1)->find();

        /**
         * 公告 列表
         */
        $affiche_list   =   Db::name('affiche')->where('status',0)->select();

        /**
         * 公告 默认内容
         */
        $affiche_data   =   Db::name('affiche')->where('status',0)->limit(1)->find();

        return view('index',["i" => $i, "small" => $small,
            'trade' => $trade, 'recruit' => $recruit,
            'recruit_bottom' => $recruit_bottom, 'affiche_list' => $affiche_list, 'affiche_data' => $affiche_data]);
    }

    /**
     * 音乐资讯-公告-选择公告列表：内容更新
     */
    public function getid(){
        $font_id    =   input('post.font_id');
        if (request()->isPost()){
            $data   =   Db::name('affiche')->where('id',$font_id)->find();
            echo json_encode(["res" => $data]);
        }
    }

    /**
     * 行业动态 and  音乐小知识 详情
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function details(){
        return view('details');
    }
}