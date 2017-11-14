<?php
/**
 * Created by PhpStorm.
 * User: H
 * Date: 2017/9/30
 * Time: 11:35
 */

namespace app\admin\controller;
use think\Db;

/**
 * 录音棚
 * Class Tape
 * @package app\admin\controller
 */

class Tape extends Auth
{
    /**
     * 录音棚-首页
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function index(){
        $list   =   Db::name('tape')
            ->where('status',0)
            ->where('one_id',7)
            ->paginate(2);
        $page   =   $list->render();
        return view('index',['list' => $list, 'page' => $page]);
    }

    /**
     * 录音棚-添加
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function add(){
        $file       =   request()->file('image');
        $title      =   request()->post('title');
        $en_title   =   request()->post('en_title');
        $content    =   request()->post('editorValue');
        $status     =   request()->post('status');
        $addtime    =   time();
        $one_id     =   7;

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

                    $data = ['img_url' => $img_url, 'title' => $title, 'en_title' => $en_title, 'addtime' => $addtime, 'content' => $content, 'one_id' =>$one_id, 'status' => $status];

                    $res = Db::name('tape')->insert($data);

                    if ($res) {
                        $this->redirect("admin/Tape/index");
                    }
                }else{
                    // 上传失败获取错误信息
                    echo $file->getError();
                }
            }
        }else{
            return view('add');
        }
    }

    /**
     * 录音棚-删除
     */
    public function del(){
        $id     =      input('post.tid');
        if (request()->post()){
            $res    =   Db::name('tape')->update(['status' => 1,'id'=>$id]);

            if ($res){
                echo json_encode(["res" => 1]);
            }else{
                echo json_encode(["res" => 2]);
            }
        }
    }

    /**
     * 录音棚-修改
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function mod(){
        $id         =      input('param.id');
        $file       =   request()->file('image');
        $tid        =   request()->post('tid');
        $title      =   request()->post('title');
        $en_title   =   request()->post('en_title');
        $content    =   request()->post('editorValue');
        $status     =   request()->post('status');
        if (request()->isPost()){
            if ($file) {
                $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
                if ($info) {
                    $imgurl = $info->getSaveName();
                    /**
                     * 把\转成/
                     */
                    $img_url = str_replace("\\", "/", $imgurl);

                    $res = Db::name('tape')->update(['img_url' => $img_url, 'title' => $title, 'en_title' => $en_title, 'content' => $content, 'status' => $status, 'id' => $tid]);

                    if ($res) {
                        $this->redirect('admin/Tape/index');
                    }
                }else{
                    // 上传失败获取错误信息
                    echo $file->getError();
                }
            }else{
                $res = Db::name('tape')->update(['title' => $title, 'en_title' => $en_title, 'content' => $content, 'status' => $status, 'id' => $tid]);

                if ($res) {
                    $this->redirect('admin/Tape/index');
                }
            }
        }else{
            $data   =       Db::name('tape')->where('id',$id)->find();
            return view('mod', ['data' => $data]);
        }
    }

    /**
     * 录音棚附表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function tape_assistant(){
        $list   =   Db::name('tape_data')
            ->where('tdata.status',0)
            ->alias('tdata')
            ->join('qyx_tape tape','tdata.tape_id = tape.id')
            ->paginate(2);

        $page   =   $list->render();

        return view('assistant',["list" => $list,"page" => $page]);
    }

    /**
     * 录音棚附表添加
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function tape_assistant_add(){
        /**
         * 查询录音棚类型
         */
        $tape_type   =   Db::name('tape')->where('status',0)->select();
        // 获取表单上传文件 例如上传了001.jpg
        $file       =   request()->file('image');
        $tape_id    =   request()->post('tape_type');
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

                    $data = ['tape_id' =>$tape_id ,'img_url' => $img_url, 'addtime' => $addtime, 'status' => $status];

                    $res = Db::name('tape_data')->insert($data);

                    if ($res) {
                        $this->redirect("admin/Tape/assistant");
                    }
                }else{
                    // 上传失败获取错误信息
                    echo $file->getError();
                }
            }
        }else {
            return view('assistant_add',["tape_type" => $tape_type]);
        }
    }

    public function tape_assistant_mod(){
        $id     =     input('param.id');
        /**
         * 查询录音棚类型
         */
        $tape_type   =   Db::name('tape')
            ->where('status',0)
            ->select();
        // 获取表单上传文件 例如上传了001.jpg
        $file       =   request()->file('image');
        $tape_id    =   request()->post('tape_type');
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

                    $data = ['tape_id' =>$tape_id ,'img_url' => $img_url, 'addtime' => $addtime, 'status' => $status];

                    $res = Db::name('tape_data')->insert($data);

                    if ($res) {
                        $this->redirect("admin/Tape/assistant");
                    }
                }else{
                    // 上传失败获取错误信息
                    echo $file->getError();
                }
            }
        }else {
            return view('assistant_mod',["tape_type" => $tape_type]);
        }
    }
}