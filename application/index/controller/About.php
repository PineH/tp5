<?php
/**
 * Created by PhpStorm.
 * User: H
 * Date: 2017/10/25
 * Time: 15:05
 */

namespace app\index\controller;
use think\Controller;
use think\Db;
/**
 * 关于我们
 * Class About
 * @package app\index\controller
 */
class About extends Controller
{
    public function index(){
        /**
         * 关于我们
         */
        $about  =   Db::name('about')->find();

        /**
         * 关于我们 下部 联系我们
         */
        $contact    =   Db::name('twonav')
            ->alias('nav')
            ->join('qyx_contact c','c.two_id = nav.two_id')
            ->select();
        return view('index',['about' => $about, 'contact' => $contact]);
    }
}