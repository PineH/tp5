<?php
/**
 * Created by PhpStorm.
 * User: H
 * Date: 2017/10/11
 * Time: 17:43
 */

namespace app\admin\controller;
use think\Db;

/**
 * 网站设置-详情
 * Class Intercalate
 * @package app\admin\controller
 */
class Intercalate extends Auth
{
    public function index(){
        $data   =   Db::name('intercalate')->find();
        return view('index', ['data' => $data]);
    }

    /**
     * 网站设置-修改
     */
    public function mod(){
        $id             =   input('post.iid');
        $title          =   input('post.title');
        $keywords       =   input('post.keywords');
        $qyxdescribe    =   input('post.qyxdescribe');
        if (request()->isPost()){
            $res    =   Db::name('intercalate')->update(['title' => $title, 'keywords' => $keywords, 'qyxdescribe' => $qyxdescribe, 'id' =>$id]);

            if ($res){
                echo json_encode(["res" => 1]);
            }else{
                echo json_encode(["res" => 2]);
            }
        }
    }
}