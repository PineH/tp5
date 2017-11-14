<?php
/**
 * Created by PhpStorm.
 * User: H
 * Date: 2017/9/29
 * Time: 11:32
 */

namespace app\admin\controller;
use think\Db;

/**
 * 二级导航
 * Class Twonav
 * @package app\admin\controller
 */
class Twonav extends Auth
{
    /**
     * 二级导航首页
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function index(){
        $list   =   Db::name('twonav')
            ->alias('two')
            ->join('qyx_nav nav','two.one_id=nav.id')
            ->where('two.status',0)
            ->order('nav.sort asc')
            ->paginate(8);

        $page   =   $list->render();
        return view('index',['list' => $list,'page' => $page]);
    }

    /**
     * 二级导航添加
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function add(){
        $two_title      =   input('post.title');
        $nav_id         =   input('post.nav_id');
        $status         =   input('post.status');

        if (request()->isPost()){
            $data = ['two_title' => $two_title, 'one_id' => $nav_id, 'status' => $status];
            $res    =   Db::name('twonav')->insert($data);

            if ($res){
                echo json_encode(["res" => 1]);
            }
        }else{
            $nav    =     Db::name("nav")->where('status',0)->select();
            return view('add',['nav' => $nav]);
        }
    }

    /**
     * 二级导航修改
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function mod(){
        $id         =   input('param.id');

        $two_id      =   input('post.two_id');
        $two_title      =   input('post.two_title');
        $one_id     =   input('post.one_id');
        $status     =   input('post.status');
        if (request()->isPost()){
            $res    =   Db::name('twonav')
                ->update(['two_title' => $two_title, 'one_id' => $one_id, 'status' => $status, 'two_id' => $two_id]);
            if ($res){
                echo json_encode(["res" => 1]);
            }else{
                echo json_encode(["res" => 2]);
            }
        }else{
            $nav    =     Db::name("nav")->where('status',0)->select();
            $data   =   Db::name('twonav')->where('two_id',$id)->find();
            return view('mod',['data' => $data, 'nav' => $nav]);
        }
    }

    /**
     * 二级导航删除
     */
    public function del(){
        $two_id    =    input('post.tid');

        if (request()->isPost()){
            $res    =   Db::name('twonav')->update(['status' => 1,'two_id'=>$two_id]);

            if ($res){
                echo json_encode(["res" => 1]);
            }
        }
    }
}