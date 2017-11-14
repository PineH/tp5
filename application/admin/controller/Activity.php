<?php
/**
 * Created by PhpStorm.
 * User: H
 * Date: 2017/10/11
 * Time: 14:45
 */

namespace app\admin\controller;
use think\Db;

/**
 * 现场活动
 * Class Activity
 * @package app\admin\controller
 */
class Activity extends Auth
{
    /**
     * 活动现场-列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function index(){
        $list   =   Db::name('activity')
            ->where('status',0)
            ->where('one_id',6)
            ->paginate(2);
        $page   =   $list->render();
        return view('index',['list' => $list, 'page' => $page]);
    }

    /**
     * 活动现场-添加
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function add(){
        $one_id     =   6;
        $file       =   request()->file('image');
        $title      =   request()->post('title');
        $content    =   request()->post('editorValue');
        $addtime    =   time();
        $status     =   request()->post('status');

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

                    $data = ['one_id' =>$one_id, 'img_url' => $img_url, 'title' => $title, 'content' => $content, 'addtime' => $addtime,   'status' => $status];

                    $res = Db::name('activity')->insert($data);

                    if ($res) {
                        $this->redirect("admin/Activity/index");
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
     * 活动现场-修改
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function mod(){
        $id         =      input('param.id');
        $file       =   request()->file('image');
        $aid        =   request()->post('aid');
        $title      =   request()->post('title');
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

                    $res = Db::name('activity')->update(['img_url' => $img_url, 'title' => $title, 'content' => $content, 'status' => $status, 'id' => $aid]);

                    if ($res) {
                        $this->redirect('admin/Activity/index');
                    }
                }else{
                    // 上传失败获取错误信息
                    echo $file->getError();
                }
            }else{
                $res = Db::name('activity')->update(['title' => $title, 'content' => $content, 'status' => $status, 'id' => $aid]);

                if ($res) {
                    $this->redirect('admin/Activity/index');
                }
            }
        }else{
            $data   =       Db::name('activity')->where('id',$id)->find();
            return view('mod', ['data' => $data]);
        }
    }

    /**
     * 活动现场-删除
     */
    public function del(){
        $id     =      input('post.aid');
        if (request()->post()){
            $res    =   Db::name('activity')->update(['status' => 1,'id'=>$id]);

            if ($res){
                echo json_encode(["res" => 1]);
            }else{
                echo json_encode(["res" => 2]);
            }
        }
    }
}