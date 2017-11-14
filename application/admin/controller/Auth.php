<?php
/**
 * Created by PhpStorm.
 * User: H
 * Date: 2017/9/27
 * Time: 11:39
 */

namespace app\admin\controller;
use think\Controller;
use think\Session;

class Auth extends Controller
{
    public function __construct()
    {
        if (empty(Session::get('uname'))) {
            $this->redirect("admin/Index/login");
        }
    }
}