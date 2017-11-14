<?php
/**
 * Created by PhpStorm.
 * User: H
 * Date: 2017/10/10
 * Time: 15:05
 */


namespace app\admin\controller;
use think\Db;

/**
 * 音乐资讯
 * Class Information
 * @package app\admin\controller
 */
class Information extends Auth
{
    /**
     * 行业动态-列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function index(){
        $list   =   Db::name('trends')
            ->where('status',0)
            ->where('two_id',1)
            ->paginate(2);
        $page   =   $list->render();
        return view('index', ['list' => $list, 'page' => $page]);
    }

    /**
     * 行业动态-添加
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function add(){
        $file       =   request()->file('image');
        $title      =   request()->post('title');
        $content    =   request()->post('editorValue');
        $status     =   request()->post('status');
        $two_id     =   1;
        $addtime    =   time();


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

                    $data = ['two_id' =>$two_id, 'img_url' => $img_url, 'title' => $title, 'content' => $content, 'addtime' => $addtime, 'status' => $status];

                    $res = Db::name('trends')->insert($data);

                    if ($res) {
                        $this->redirect("admin/Information/index");
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
     * 行业动态-修改
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function mod(){
        $id         =      input('param.id');
        $iid        =   request()->post('iid');
        $file       =   request()->file('image');
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

                    $res = Db::name('trends')->update(['img_url' => $img_url, 'title' => $title, 'content' => $content, 'status' => $status, 'id' => $iid]);

                    if ($res) {
                        $this->redirect('admin/Information/index');
                    }
                }else{
                    // 上传失败获取错误信息
                    echo $file->getError();
                }
            }else{
                $res = Db::name('trends')->update(['title' => $title, 'content' => $content, 'status' => $status, 'id' => $iid]);

                if ($res) {
                    $this->redirect('admin/Information/index');
                }
            }
        }else{
            $data   =       Db::name('trends')->where('id',$id)->find();
            return view('mod', ['data' => $data]);
        }
    }

    /**
     * 行业动态-删除
     */
    public function hydel(){
        $id    =    input('post.iid');

        if (request()->isPost()){
            $res    =   Db::name('trends')->update(['status' => 1,'id'=>$id]);

            if ($res){
                echo json_encode(["res" => 1]);
            }else{
                echo json_encode(["res" => 2]);
            }
        }
    }

    /**
     * 音乐小知识-列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function ongaku(){
        $list   =   Db::name('trends')
            ->where('status',0)
            ->where('two_id',5)
            ->paginate(2);
        $page   =   $list->render();
        return view('ongaku', ['list' => $list, 'page' => $page]);
    }

    /**
     * 音乐小知识-添加
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function orgakuadd(){

        $file       =   request()->file('image');
        $title      =   request()->post('title');
        $content    =   request()->post('editorValue');
        $status     =   request()->post('status');
        $two_id     =   5;
        $addtime    =   time();

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

                    $data = ['two_id' =>$two_id, 'img_url' => $img_url, 'title' => $title, 'content' => $content, 'addtime' => $addtime, 'status' => $status];

                    $res = Db::name('trends')->insert($data);

                    if ($res) {
                        $this->redirect("admin/Information/ongaku");
                    }
                }else{
                    // 上传失败获取错误信息
                    echo $file->getError();
                }
            }
        }else{
            return view('orgakuadd');
        }
    }

    /**
     * 音乐小知识-修改
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function orgakumod(){
        $id         =      input('param.id');
        $iid        =   request()->post('iid');
        $file       =   request()->file('image');
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

                    $res = Db::name('trends')->update(['img_url' => $img_url, 'title' => $title, 'content' => $content, 'status' => $status, 'id' => $iid]);

                    if ($res) {
                        $this->redirect('admin/Information/ongaku');
                    }
                }else{
                    // 上传失败获取错误信息
                    echo $file->getError();
                }
            }else{
                $res = Db::name('trends')->update(['title' => $title, 'content' => $content, 'status' => $status, 'id' => $iid]);

                if ($res) {
                    $this->redirect('admin/Information/ongaku');
                }
            }
        }else{
            $data   =       Db::name('trends')->where('id',$id)->find();
            return view('mod', ['data' => $data]);
        }
    }

    /**
     * 音乐小知识-删除
     */
    public function orgakudel(){
        $id    =    input('post.iid');

        if (request()->isPost()){
            $res    =   Db::name('trends')->update(['status' => 1,'id'=>$id]);

            if ($res){
                echo json_encode(["res" => 1]);
            }else{
                echo json_encode(["res" => 2]);
            }
        }
    }

    /**
     * 公告-列表
     */
    public function affiche(){
        $list   =   Db::name('affiche')
            ->where('status',0)
            ->paginate(5);
        $page   =   $list->render();
        return view('affiche',['list' => $list, 'page' => $page]);
    }

    /**
     * 公告-添加
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function afficheadd(){
        $title      =       input('post.title');
        $content    =       input('post.content');
        $addtime    =       time();
        $two_id     =       6;
        $status     =       input('post.status');
        if (request()->isPost()){
            $data   =   ['title' => $title, 'content' =>$content, 'addtime' => $addtime, 'two_id' => $two_id, 'status' => $status];
            $res    =   Db::name('affiche')->insert($data);
            if($res){
                echo json_encode(["res" => 1]);
            }
        }else{
            return view('afficheadd');
        }
    }

    /**
     * 公告-修改
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function affichemod(){
        $aid        =       input('param.id');

        $id         =       input('post.aid');
        $title      =       input('post.title');
        $content    =       input('post.content');
        $status     =       input('post.status');
        if (request()->isPost()){
            $res    =    Db::name('affiche')->update(['title' => $title, 'content' => $content, 'status' => $status, 'id' => $id]);
            if ($res){
                echo json_encode(["res" => 1]);
            }else{
                echo json_encode(["res" => 2]);
            }
        }else{
            $data   =   Db::name('affiche')->where('id',$aid)->find();
            return view('affichemod',['data' => $data]);
        }
    }

    /**
     * 公告-删除
     */
    public function affichedel(){
        $id    =    input('post.aid');

        if (request()->isPost()){
            $res    =   Db::name('affiche')->update(['status' => 1,'id'=>$id]);

            if ($res){
                echo json_encode(["res" => 1]);
            }
        }
    }

    /**
     * 招聘-列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function recruit(){
        $list   =   Db::name('recruit')
            ->where('status',0)
            ->paginate(4);
        $page   =   $list->render();
        return view('recruit',['list' => $list, 'page' => $page]);
    }

    /**
     * 招聘-添加
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function recruitadd(){
        $job            =   input('post.job');
        $job_describe   =   input('post.job_describe');
        $address        =   input('post.address');
        $tel            =   input('post.tel');
        $status         =   input('post.status');
        $two_id         =   7;
        if (request()->isPost()){
            $data   =   ['two_id' => $two_id, 'job' => $job, 'job_describe' => $job_describe, 'address' => $address, 'tel' => $tel, 'status' => $status];
            $res    =   Db::name('recruit')->insert($data);
            if($res){
                echo json_encode(["res" => 1]);
            }
        }else{
            return view('recruitadd');
        }
    }

    /**
     * 招聘-删除
     */
    public function  recruitdel(){
        $id    =    input('post.rid');

        if (request()->isPost()){
            $res    =   Db::name('recruit')->update(['status' => 1,'id'=>$id]);

            if ($res){
                echo json_encode(["res" => 1]);
            }
        }
    }

    /**
     * 招聘-修改
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function recruitmod(){
        $rid            =       input('param.id');

        $id             =       input('post.rid');
        $job            =       input('post.job');
        $job_describe   =       input('post.job_describe');
        $address        =       input('post.address');
        $tel            =       input('post.tel');
        $status         =       input('post.status');
        if (request()->isPost()){
            $res    =    Db::name('recruit')->update(['job' => $job, 'job_describe' => $job_describe, 'address' => $address, 'tel' => $tel, 'status' => $status, 'id' => $id]);
            if ($res){
                echo json_encode(["res" => 1]);
            }else{
                echo json_encode(["res" => 2]);
            }
        }else{
            $data   =   Db::name('recruit')->where('id',$rid)->find();
            return view('recruitmod',['data' => $data]);
        }
    }
}