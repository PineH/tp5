<?php
/**
 * Created by PhpStorm.
 * User: H
 * Date: 2017/9/25
 * Time: 14:00
 */

namespace app\admin\controller;
use think\Db;
use think\Request;

class User extends Auth
{
    /**
     * 用户首页
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function index(){
        $list = Db::name('user')->where('status',0)->paginate(2);
        // 获取分页显示
        $page = $list->render();
        return view('index', ['list' => $list, 'page' => $page]);
    }

    /**
     * 用户修改
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function mod(){
        $id = input('param.id');

        $uid    =   input('post.uid');
        $name   =   input('post.uname');
        $pwd    =   md5(input('post.upwd'));
        $status =   input('post.status');

        if(request()->isPost()){

            $res    =   Db::name('user')
                ->update(['uname' => $name, 'password' => $pwd, 'status' => $status, 'id' => $uid]);

            if ($res){
                echo json_encode(["res" => 1]);
            }else{
                echo json_encode(["res" => 2]);
            }

        }else{

            $data = Db::name('user')->where('id',$id)->find();
            return view('mod', ['data' => $data]);
        }
    }

    /**
     * 用户添加
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function add(){
        $name       =   input('post.uname');
        $pwd        =   md5(input('post.upwd'));
        $status     =   input('post.status');

        if (request()->isPost()) {

            $data = ['uname' => $name, 'password' => $pwd, 'status' => $status];
            $res    =   Db::name('user')->insert($data);

            if ($res){
                echo json_encode(["res" => 1]);
            }
        } else {
            return view('add');
        }
    }

    /**
     * 用户删除
     */
    public function del(){
        $id     =   input('param.uid');

        if (request()->isPost()){
            $res    =   Db::name('user')->update(['status' => 1,'id'=>$id]);

            if ($res){
                echo json_encode(["res" => 1]);
            }
        }

    }
}