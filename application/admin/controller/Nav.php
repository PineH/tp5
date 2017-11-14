<?php
/**
 * Created by PhpStorm.
 * User: H
 * Date: 2017/9/26
 * Time: 16:46
 */
namespace app\admin\controller;
use think\Db;

/**
 * 一级导航
 * Class Nav
 * @package app\admin\controller
 */
class Nav extends Auth
{
    /**
     * 导航首页
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function index(){
        $list   =   Db::name('nav')->where('status',0)->paginate(9);
        //获取分页
        $page   =   $list->render();

        return view('index',['list' => $list, 'page' => $page]);
    }

    /**
     * 导航修改
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function mod(){
        $id     =   input('param.id');

        $tid        =   input('post.tid');
        $title      =   input('post.title');
        $title_en   =   input('post.title_en');
        $sort       =   input('post.sort');
        $status     =   input('post.status');

        if (request()->isPost()){
            $res    =   Db::name('nav')
                ->update(['title' => $title, 'title_en' => $title_en, 'sort' => $sort, 'status' => $status, 'id' => $tid]);

            if ($res){
                echo json_encode(["res" => 1]);
            }else{
                echo json_encode(["res" => 2]);
            }
        }else{
            $data   =   Db::name('nav')->where('id',$id)->find();

            return view('mod',['data' => $data]);
        }
    }

    /**
     * 导航添加
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function add(){
        $title      =   input('post.title');
        $title_en   =   input('post.title_en');
        $sort       =   input('post.sort');
        $status     =   input('post.status');
        if (request()->isPost()){
            $data = ['title' => $title, 'title_en' => $title_en, 'sort' => $sort, 'status' => $status];
            $res    =   Db::name('nav')->insert($data);

            if ($res){
                echo json_encode(["res" => 1]);
            }
        }else{
            return view('add');
        }
    }

    /**
     * 导航删除
     */
    public function del(){
        $id =   input('param.tid');

        if (request()->isPost()){
            $res    =   Db::name('nav')->update(['status' => 1,'id'=>$id]);

            if ($res){
                echo json_encode(["res" => 1]);
            }
        }
    }
}