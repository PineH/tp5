<?php
/**
 * Created by PhpStorm.
 * User: H
 * Date: 2017/10/30
 * Time: 15:11
 */

namespace app\admin\controller;
use think\Db;
/**
 * banner
 * Class Banner
 * @package app\admin\controller
 */
class Banner extends Auth
{
    /**
     * banner 列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function index(){
        $list   =   Db::name('banner')->where('status',0)->paginate(3);
        $page   =   $list->render();
        return view('index', ['list' => $list, 'page' => $page]);
    }

    /**
     * banner 添加
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function add(){
        // 获取表单上传文件 例如上传了001.jpg
        $file       =   request()->file('image');
        $status     =   request()->post('status');
        $addtime    =   time();
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

                    $data = ['img_url' => $img_url, 'addtime' => $addtime, 'status' => $status];

                    $res = Db::name('banner')->insert($data);

                    if ($res) {
                        $this->redirect("admin/Banner/index");
                    }
                }else{
                    // 上传失败获取错误信息
                    echo $file->getError();
                }
            }
        }else {
            return view('add');
        }
    }

    /**
     * banner 修改
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function mod(){
        $id     =   input('param.id');
        $file   =   request()->file('image');
        $bid    =   request()->post('bid');
        $status =   request()->post('status');

        if (request()->isPost()){
            if ($file) {
                $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
                if ($info) {
                    $imgurl = $info->getSaveName();
                    /**
                     * 把\转成/
                     */
                    $img_url = str_replace("\\", "/", $imgurl);

                    $res = Db::name('banner')->update(['img_url' => $img_url, 'status' => $status, 'id' => $bid]);

                    if ($res) {
                        $this->redirect('admin/Banner/index');
                    }
                } else {
                    // 上传失败获取错误信息
                    echo $file->getError();
                }
            }else{
                $res = Db::name('banner')->update([ 'status' => $status, 'id' => $bid]);

                if ($res) {
                    $this->redirect('admin/Banner/index');
                }
            }
        }else{
            $data = Db::name('banner')->where('id',$id)->find();
            return view('mod',['data' => $data]);
        }
    }

    /**
     * banner 删除
     */
    public function del(){
        $id =   input('post.bid');

        if (request()->isPost()){
            $res    =   Db::name('banner')->update(['status' => 1,'id'=>$id]);

            if ($res){
                echo json_encode(["res" => 1]);
            }else{
                echo json_encode(["res" => 2]);
            }
        }
    }
}