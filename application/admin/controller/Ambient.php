<?php
/**
 * Created by PhpStorm.
 * User: H
 * Date: 2017/9/27
 * Time: 14:20
 */

namespace app\admin\controller;
use think\Db;
use think\File;

/**
 * 教学环境
 * 江北校区，南坪校区
 * Class Ambient
 * @package app\admin\controller
 */
class Ambient extends Auth
{
    /**
     * 江北校区-列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function index(){
        $list   =   Db::name('ambient')
            ->where('status',0)
            ->where('two_id',2)
            ->paginate(2);
        //获取分页
        $page   =   $list->render();
        return view('index', ['list' => $list, 'page' => $page]);
    }

    /**
     * 江北校区-修改
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function mod()
    {
        $id = input('param.id');

        $file = request()->file('image');
        $aid = request()->post('aid');
        $status = request()->post('status');
        $two_id = request()->post('two_id');

        if (request()->isPost()) {
            if ($file) {
                $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
                if ($info) {
                    $imgurl = $info->getSaveName();
                    /**
                     * 把\转成/
                     */
                    $img_url = str_replace("\\", "/", $imgurl);

                    $res = Db::name('ambient')->update(['img_url' => $img_url, 'two_id' => $two_id, 'status' => $status, 'id' => $aid]);

                    if ($res) {
                        $this->redirect('admin/Ambient/index');
                    }
                } else {
                    // 上传失败获取错误信息
                    echo $file->getError();
                }
            }else{
                $res = Db::name('ambient')->update([ 'two_id' => $two_id, 'status' => $status, 'id' => $aid]);

                if ($res) {
                    $this->redirect('admin/Ambient/index');
                }
            }
        }else{
            $two_nav    =   Db::name('twonav')->where('one_id',5)->select();

            $data = Db::name('ambient')->where('id', $id)->find();
            return view('mod', ['data' => $data, 'two_nav' => $two_nav]);
        }
    }

    /**
     * 江北校区-添加
     * @return \think\response\View
     */
    public function add(){
// 获取表单上传文件 例如上传了001.jpg
        $file   =   request()->file('image');
        $status =   request()->post('status');
        $two_id =   request()->post('two_id');
        if(request()->isPost()){
            // 移动到框架应用根目录/public/uploads/ 目录下
            if($file) {
                $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
                if ($info) {
                    // 成功上传后 获取上传信息
                    // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
                    $imgurl = $info->getSaveName();
                    /**
                     * 把\转成/
                     */
                    $img_url = str_replace("\\", "/", $imgurl);

                    $data = ['img_url' => $img_url, 'addtime' => time(), 'two_id' => $two_id, 'status' => $status];

                    $res = Db::name('ambient')->insert($data);

                    if ($res) {
                        $this->redirect("admin/Ambient/index");
                    }
                }else{
                    // 上传失败获取错误信息
                    echo $file->getError();
                }
            }
        }else {
            $two_nav    =   Db::name('twonav')->where('one_id',5)->select();

            return view('add',['two_nav' => $two_nav]);
        }
    }

    /**
     * 江北校区-删除
     */
    public function del(){
        $id =   input('post.aid');

        if (request()->isPost()){
            $res    =   Db::name('ambient')->update(['status' => 1,'id'=>$id]);

            if ($res){
                echo json_encode(["res" => 1 ]);
            }else{
                echo json_encode(["res" => 2]);
            }
        }
    }

    /**
     * 南坪校区-列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function nindex(){
        $list   =   Db::name('ambient')
            ->where('status',0)
            ->where('two_id',3)
            ->paginate(2);
        //获取分页
        $page   =   $list->render();
        return view('nindex',['list' => $list, 'page' => $page]);
    }

    /**
     * 南坪校区-添加
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function nadd(){
        $file   =   request()->file('image');
        $status =   request()->post('status');
        $two_id =   request()->post('two_id');
        if(request()->isPost()){
            // 移动到框架应用根目录/public/uploads/ 目录下
            if($file) {
                $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
                if ($info) {
                    // 成功上传后 获取上传信息
                    // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
                    $imgurl = $info->getSaveName();
                    /**
                     * 把\转成/
                     */
                    $img_url = str_replace("\\", "/", $imgurl);

                    $data = ['img_url' => $img_url, 'addtime' => time(), 'two_id' => $two_id, 'status' => $status];

                    $res = Db::name('ambient')->insert($data);

                    if ($res) {
                        $this->redirect("admin/Ambient/nindex");
                    }
                }else{
                    // 上传失败获取错误信息
                    echo $file->getError();
                }
            }
        }else {
            $two_nav = Db::name('twonav')->where('one_id', 5)->select();

            return view('nadd', ['two_nav' => $two_nav]);
        }
    }

    /**
     * 南坪校区-修改
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function nmod(){
        $id     =   input('param.id');

        $file   =   request()->file('image');
        $aid    =   request()->post('aid');
        $status =   request()->post('status');
        $two_id =   request()->post('two_id');

        if (request()->isPost()) {
            if ($file) {
                $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
                if ($info) {
                    $imgurl = $info->getSaveName();
                    /**
                     * 把\转成/
                     */
                    $img_url = str_replace("\\", "/", $imgurl);

                    $res = Db::name('ambient')->update(['img_url' => $img_url, 'two_id' => $two_id, 'status' => $status, 'id' => $aid]);

                    if ($res) {
                        $this->redirect('admin/Nambient/index');
                    }
                }else{
                    // 上传失败获取错误信息
                    echo $file->getError();
                }
            }else{
                $res = Db::name('ambient')->update(['two_id' => $two_id, 'status' => $status, 'id' => $aid]);

                if ($res) {
                    $this->redirect('admin/Ambient/nindex');
                }
            }
        }else{
            $two_nav    =   Db::name('twonav')->where('one_id',5)->select();

            $data = Db::name('ambient')->where('id', $id)->find();
            return view('nmod', ['data' => $data, 'two_nav' => $two_nav]);
        }
    }

    /**
     * 南坪校区-删除
     */
    public function ndel(){
        $id =   input('post.aid');

        if (request()->isPost()){
            $res    =   Db::name('ambient')->update(['status' => 1,'id'=>$id]);

            if ($res){
                echo json_encode(["res" => 1]);
            }else{
                echo json_encode(["res" => 2]);
            }
        }
    }

    /**
     * 教学环境-校区分类
     * 参数
     * 二级导航表：（qyx_twonav）   =   教学环境表(qyx_ambient)
     *                  id        =  	    two_id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function ambienttype(){
        $list   =   Db::name('ambient_data')->where('status',0)->paginate(3);

        //获取分页
        $page   =   $list->render();
        return view('Ambient_type',['list' => $list, 'page' => $page]);
    }

    /**
     * 教学环境-校区分类-添加
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function ambient_type_add(){
        $file       =   request()->file('image');
        $two_id     =   request()->post('two_id');
        $addtime    =   time();
        $status     =   request()->post('status');

        $two_nav    =   Db::name('twonav')
            ->where('status',0)
            ->where('one_id',5)
            ->select();

        if (request()->isPost()){
            if ($file){
                $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
                if ($info) {
                    // 成功上传后 获取上传信息
                    // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
                    $imgurl = $info->getSaveName();
                    /**
                     * 把\转成/
                     */
                    $img_url = str_replace("\\", "/", $imgurl);

                    $data = ['ambient_id' => $two_id, 'addtime' => $addtime, 'img_url' => $img_url, 'status' => $status];

                    $res = Db::name('ambient_data')->insert($data);

                    if ($res) {
                        $this->redirect("admin/Ambient/ambienttype");
                    }
                }else{
                    // 上传失败获取错误信息
                    echo $file->getError();
                }
            }
        }else{
            return view('Ambient_type_add',['two_nav' => $two_nav]);
        }
    }

    /**
     * 教学环境-校区分类-修改
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function ambient_type_mod(){
        $id     =   input('param.id');

        $file           =   request()->file('image');
        $aid            =   request()->post('aid');
        $ambient_id     =   request()->post('two_id');
        $status         =   request()->post('status');


        $data   =   Db::name('ambient_data')
            ->where('id',$id)
            ->where('status',0)
            ->find();

        $two_nav    =   Db::name('twonav')
            ->where('status',0)
            ->where('one_id',5)
            ->select();

        if (request()->isPost()) {
            if ($file) {
                $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
                if ($info) {
                    $imgurl = $info->getSaveName();
                    /**
                     * 把\转成/
                     */
                    $img_url = str_replace("\\", "/", $imgurl);

                    $res = Db::name('ambient')->update(['img_url' => $img_url, 'ambient_id' => $ambient_id, 'status' => $status, 'id' => $aid]);

                    if ($res) {
                        $this->redirect('admin/Ambient/ambienttype');
                    }
                }else{
                    // 上传失败获取错误信息
                    echo $file->getError();
                }
            }else{
                $res = Db::name('ambient_data')->update(['ambient_id' => $ambient_id, 'status' => $status, 'id' => $aid]);

                if ($res) {
                    $this->redirect('admin/Ambient/ambienttype');
                }
            }
        }else{
            return view('Ambient_type_mod',['two_nav' => $two_nav, 'data' => $data]);
        }
    }

    /**
     * 教学环境-校区分类-删除
     */
    public function Ambient_type_del(){

        $id =   input('post.aid');

        if (request()->isPost()){
            $res    =   Db::name('ambient_data')->update(['status' => 1,'id'=>$id]);

            if ($res){
                echo json_encode(["res" => 1]);
            }else{
                echo json_encode(["res" => 2]);
            }
        }
    }
}