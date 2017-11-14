<?php

/**
 * Created by PhpStorm.
 * User: H
 * Date: 2017/9/25
 * Time: 13:20
 */
namespace app\admin\controller;
use think\Controller;
use think\Session;
use think\Db;

class Index extends Controller{
    /**
     * admin首页
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function index(){
        $name   =   Session::get('uname');
        if (empty(Session::get('uname'))){
            $data   =   Db::name('intercalate')->find();
            return view('login',['data' => $data]);
        }else{
             // 查询网站描述
            $data   =   Db::name('intercalate')->find();
            return view('index',['name' => $name, 'data' => $data]);
        }
    }

    /**
     * 用户登录
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function login(){
        $name   =   input('post.uname');
        $pwd    =   md5(input('post.upwd'));
        if (request()->isPost()){
            $res    =   Db::name('user')
                ->where('uname',$name)
                ->where('password',$pwd)->find();

            if ($res){
                Session::set('uname',$name);
                echo json_encode(["res" => 1]);
            }else{
                echo json_encode(['res' => 2]);
            }
        }else{
            return view('login');
        }
    }

    /**
     * 用户退出
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function quit(){
        Session(null);
        $data   =   DB::name('intercalate')->find();
        return $this->fetch("Index/login", ['data' => $data]);
    }
}