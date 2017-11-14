<?php
namespace app\index\controller;

use think\Controller;
use think\Db;

class Index extends Controller
{
    /**
     * 首页
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function index()
    {
        /**
         * banner 查询
         */
        $banner     =   Db::name('banner')->where('status',0)->select();

        /**
         * 全部老师数量
         */
        $teacher_count   =   Db::name('teacher')->where('status',0)->count();

        /**
         * 师资力量 查询
         */
        $teacher    =   Db::name('teacher')->where('status',0)->limit(4)->select();

        /**
         * 音乐小知识 查询
         */
        $small      =   Db::name('trends')
            ->where('two_id',5)
            ->where('status',0)->limit(2)->select();

        /**
         * 教学环境 查询
         */
        $ambient    =   Db::name('ambient')->where('status',0)->select();

        /**
         * 活动现场 查询
         */
        $activity   =   Db::name('activity')->where('status',0)->select();

        /**
         * 联系我们 查询
         */
        $contact    =   Db::name('twonav')
            ->alias('nav')
            ->join('qyx_contact c','c.two_id = nav.two_id')
            ->select();

        return view('index',["banner" => $banner, "teacher" => $teacher,
            "teacher_count" => $teacher_count, "small" => $small, 'ambient' => $ambient, 'activity' => $activity,
            'contact' => $contact]);
    }
}
