<?php
/**
 * Created by PhpStorm.
 * User: H
 * Date: 2017/10/9
 * Time: 17:30
 */

namespace app\admin\controller;
use think\Db;

class About extends Auth
{
    /**
     * 关于我们-显示
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function index(){
        $data   =   Db::name('about')->find();
        return view('index', ['data' => $data]);
    }

    /**
     * 关于我们-修改
     */
    public function mod(){
        $id             =   input('post.aid');
        $idea           =   input('post.idea');
        $trait          =   input('post.trait');
        $synopsis    =   input('post.synopsis');
        if (request()->post()){
            $res    =    Db::name('about')->update(['idea' => $idea, 'trait' => $trait, 'synopsis' => $synopsis, 'id'=>$id]);
            if ($res){
                echo json_encode(["res" => 1]);
            }else{
                echo json_encode(["res" => 2]);
            }
        }
    }

    /**
     * 联系我们-列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function contact(){
        $list   =   Db::name('contact')
            ->alias('c')
            ->where('c.status',0)
            ->join('qyx_twonav two','two.two_id = c.two_id')
            ->paginate(2);
        //获取分页
        $page   =   $list->render();
        return view('contact', ['list' => $list, 'page' => $page]);
    }

    /**
     * 联系我们-修改
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function contact_mod(){
        $id         =   input('param.id');
        $aid        =   input('post.aid');
        $two_id     =   input('post.two_id');
        $address    =   input('post.address');
        $tel        =   input('post.tel');
        $wechat     =   input('post.wechat');
        $qq         =   input('post.qq');
        $url        =   input('post.url');
        $status     =   input('post.status');

        if (request()->isPost()){
            $res   =   Db::name('contact')->update(['two_id' => $two_id, 'address' => $address, 'tel' => $tel, 'wechat' => $wechat, 'qq' => $qq, 'url' => $url ,'status' => $status, 'id'=>$aid]);
            if ($res){
                echo json_encode(['res' => 1]);
            }else{
                echo json_encode(['res' => 2]);
            }
        }else{
            $data   =   Db::name('contact')
                ->alias('c')
                ->join('qyx_twonav two','two.two_id = c.two_id')
                ->where('id',$id)
                ->find();

            $twonav    =     Db::name("twonav")
                ->where('status',0)
                ->where('one_id',5)
                ->select();
            return view('contact_mod',['data' => $data, 'twonav' => $twonav]);
        }
    }

    /**
     * 联系我们-添加
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function contact_add(){
        $two_id     =   input('post.two_id');
        $address    =   input('post.address');
        $tel        =   input('post.tel');
        $wechat     =   input('post.wechat');
        $qq         =   input('post.qq');
        $url        =   input('post.url');
        $status     =   input('post.status');
        if (request()->isPost()){
            $data = ['two_id' => $two_id, 'address' => $address, 'tel' => $tel, 'wechat' => $wechat, 'qq' => $qq, 'url' => $url, 'status' => $status];
            $res    =   Db::name('contact')->insert($data);
            if ($res){
                echo json_encode(['res' => 1]);
            }
        }else{
            $twonav    =     Db::name("twonav")
                ->where('status',0)
                ->where('one_id',5)
                ->select();
            return view('contact_add', ['twonav' => $twonav]);
        }
    }

    /**
     * 联系我们-删除
     */
    public function contact_del(){
        $id     =     input('param.cid');

        $res    =     Db::name('contact')->update(['status' => 1, 'id' => $id]);

        if ($res){
            echo json_encode(["res" => 1]);
        }
    }
}