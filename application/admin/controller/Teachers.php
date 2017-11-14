<?php
/**
 * Created by PhpStorm.
 * User: H
 * Date: 2017/10/9
 * Time: 11:50
 */

namespace app\admin\controller;
use think\Db;

/**
 * 师资力量
 * Class Teachers
 * @package app\admin\controller
 */
class Teachers extends Auth
{
    /**
     * 师资力量-首页
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function index(){
        $list   =   Db::name('teacher')
            ->where('status',0)
            ->where('one_id',3)
            ->paginate(3);
        $page   =   $list->render();
        return view('index',['list' => $list, 'page' => $page]);
    }

    /**
     * 师资力量添加
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function add(){
        $file       =   request()->file('image');
        $name       =   request()->post('tname');
        $job        =   request()->post('job');
        $t_age      =   request()->post('t_age');
        $t_subject  =   request()->post('t_subject');
        $undergo    =   request()->post('undergo');
        $content    =   request()->post('editorValue');
        $status     =   request()->post('status');
        $addtime    =time();
        $one_id     =   3;

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

                    $data = ['img_url' => $img_url, 'name' => $name, 'job' => $job, 't_age' => $t_age, 't_subject' => $t_subject, 'undergo' => $undergo, 'content' => $content, 'addtime' => $addtime,  'one_id' =>$one_id, 'status' => $status];

                    $res = Db::name('teacher')->insert($data);

                    if ($res) {
                        $this->redirect("admin/Teachers/index");
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
     * 师资力量-修改
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function mod(){
        $id                 =      input('param.id');
        $file               =   request()->file('image');
        $tid                =   request()->post('tid');
        $name               =   request()->post('tname');
        $job                =   request()->post('job');
        $t_age              =   request()->post('t_age');
        $t_subject          =   request()->post('t_subject');
        $undergo           =   request()->post('undergo');
        $content            =   request()->post('editorValue');
        $status             =   request()->post('status');
        if (request()->isPost()){
            if ($file) {
                $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
                if ($info) {
                    $imgurl = $info->getSaveName();
                    /**
                     * 把\转成/
                     */
                    $img_url = str_replace("\\", "/", $imgurl);

                    $res = Db::name('teacher')->update(['img_url' => $img_url, 'name' => $name, 'job' => $job, 't_age' => $t_age, 't_subject' => $t_subject, 'undergo' => $undergo, 'content' => $content, 'status' => $status, 'id' => $tid]);

                    if ($res) {
                        $this->redirect('admin/Teachers/index');
                    }
                }else{
                    // 上传失败获取错误信息
                    echo $file->getError();
                }
            }else{
                $res = Db::name('teacher')->update(['name' => $name, 'job' => $job, 't_age' => $t_age, 't_subject' => $t_subject, 'undergo' => $undergo, 'content' => $content, 'status' => $status, 'id' => $tid]);

                if ($res) {
                    $this->redirect('admin/Teachers/index');
                }
            }
        }else{
            $data   =       Db::name('teacher')->where('id',$id)->find();
            return view('mod', ['data' => $data]);
        }
    }

    /**
     * 师资力量-删除
     */
    public function del(){
        $id     =      input('post.tid');
        if (request()->post()){
            $res    =   Db::name('teacher')->update(['status' => 1,'id'=>$id]);

            if ($res){
                echo json_encode(["res" => 1]);
            }else{
                echo json_encode(["res" => 2]);
            }
        }
    }
}