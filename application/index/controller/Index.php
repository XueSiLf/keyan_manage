<?php
namespace app\index\controller;

use think\Session;
use app\index\model\User;

class Index extends Common
{
    /*系统首页渲染*/
    public function index()
    {
        //判断用户是否登录
        $this->isLogin();

        $user = User::get(['id'=>Session::get('user_id')]);
        $role = $user->role;
        $this->view->assign('role',$role);
        // echo "<script>alert('fafa');</script>";
        return view();
    }

    /*我的桌面*/
    public function welcome()
    {
        return view();
    }
}
