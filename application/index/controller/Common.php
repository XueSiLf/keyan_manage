<?php
namespace app\index\controller;

use think\Controller;
use think\Session;
use think\Request;

class Common extends Controller
{
    protected function _initialize()
    {
        parent::_initialize();

        define('USER_ID', Session::has('user_id') ? Session::get('user_id'):null);

        $auth = new Auth();

        $request = Request::instance();
        $controller = $request->controller();
        $action = $request->action();
        $name = $controller.'/'.$action;
        $notCheck = array('User/login','User/checklogin','User/forgetpassword','Index/index','User/lst','User/logout');
        // 超级管理员不需要验证
        if(session('user_id')!=1)
        {
            // 不需要验证的权限
            if(!in_array($name,$notCheck))
            {
                dump($name);
                // die;
                if(!$auth->check($name,session('user_id')))
                {
                    $this->error('没有权限',url('Index/index'));
                }
            }
        }
    }

    //判断用户是否登陆,放在系统后台入口前面: index/index
    protected function isLogin()
    {
        if (is_null(USER_ID)) {
            $this -> error('用户未登录,无权访问',url('user/login'),'',1);
        }


    }

    //防止用户重复登陆,放在登陆操作前面:user/login
    protected function alreadyLogin(){
        if (USER_ID) {
            $this -> error('已登录过了,请勿重复登陆',url('index/index'),'',1);
        }
    }
}
