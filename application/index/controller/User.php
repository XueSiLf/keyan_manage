<?php
namespace app\index\controller;

use app\index\model\User as UserModel;
use think\Cookie;
use think\Request;
use think\Session;
use app\index\model\Department as DepartModel;

class User extends Common
{
    public function _initialize()
    {
        parent::_initialize();
        $list = model('Department');
        $bmres = $list->departtree();
        $this->view->assign('bmres', $bmres);
    }

    /*用户登录*/
    public function login()
    {
        $this->alreadyLogin();
        return $this->view->fetch();
    }

    /*检测用户登录*/
    //登录验证
    public function checkLogin(Request $request)
    {
        $status = 0; //验证失败标志
        $result = '登录失败'; //失败提示信息
        $data = $request -> param();

        //验证规则
        $rule = [
            'username|教工编号' => 'require',
            'password|教工密码'=>'require',
            // 'captcha|验证码' => 'require|captcha'
        ];

        //验证数据 $this->validate($data, $rule, $msg)
        $result = $this -> validate($data, $rule);

        //通过验证后,进行数据表查询
        //此处必须全等===才可以,因为验证不通过,$result保存错误信息字符串,返回非零
        if (true === $result) {
            
            //查询条件
            $map = [
                'username' => $data['username'],
                'password' => $data['password'],
            ];
            $user1 = UserModel::get(['username'=>$data['username']]);

            //数据表查询,返回模型对象
            $user = UserModel::get($map);

            if(null == $user1) {
                $result = '该用户不存在,请检查';
            }elseif(null === $user){
                $result = '密码错误,请重新输入!';
            }else{
                $status = 1;
                $result = '登录成功,点击[确定]后进入系统';

                $user->login_time = strtotime('now');
                $user->save();

                //创建2个session,用来检测用户登陆状态和防止重复登陆
                Session::set('user_id', $user -> id);
                Cookie::set('user_id', $user -> id);
                // 获取用户所属用户组id group_id 并且写入会话Session
                $group_id = db('auth_group_access')->where('uid',$user->id)->value('group_id');
                Session::set('group_id',$group_id);
                // 获取用户所属用户组中文名称title 并且写入会话Session
                $group_title = db('auth_group')->where('id',$group_id)->value('title');
                Session::set('group_title',$group_title);

                Session::set('user_info', $user -> getData());
                Cookie::set('user_info', $user -> getData());
                //更新用户登录次数:自增1
                // $user -> setInc('login_count');
            }
        }
        return ['status'=>$status, 'message'=>$result, 'data'=>$data];
    }

    /*用户注销登录*/
    public function logout()
    {
        //退出前先更新登录时间字段,下次登录时就知道上次登录时间了
        UserModel::where(['id'=> Session::get('user_id')])->update(['logout_time'=>time()]);
        Session::delete('user_id');
//        Cookie::delete('user_id');
        Session::delete('user_info');
//        Cookie::delete('user_info');

        $this -> success('注销成功,正在返回',url('login'),'',0);
    }

    /*人员列表*/
    public function lst()
    {
        $auth = new Auth();
        $groups = $auth->getGroups(session('id'));
        // dump($groups); die;
        $this->view->count = UserModel::where(['is_delete'=>0])->count();
        $list = UserModel::where(['is_delete'=>0])->order('create_time desc')->paginate(10);
        foreach($list as $k=>$v)
        {
            $_groupTitle=$auth->getGroups($v['id']);
            $groupTitle=$_groupTitle[0]['title'];
            // dump($groupTitle);
            $v['groupTitle']=$groupTitle;
        }
        $this->view->assign('user',$list);
        $page = $list->render();
        // 模板变量赋值
        $this->view->assign('page', $page);

        
        return $this->view->fetch();
    }

    /*添加科研人员*/
    public function add()
    {
        // $list = model('Department')->where(['is_delete' => 0])->select();
        // $this->view->assign('bmres', $list);

        if(request()->isPost())
        {
            $params = $this->request->param();
            $params['birthday'] = strtotime($params['birthday']);
            $data['group_id'] = $params['group_id'];
            unset($params['group_id']);
            $user = model('User')->allowField(true)->save($params);
            if($user)
            {
                $data['uid'] = model('User')->getLastInsID();
                db('auth_group_access')->insert($data);
                return ['code'=>1];
            }else{
                return ['code'=>0];
            }
        }

        $authGroupRes=db('auth_group')->select();
        $this->assign('authGroupRes',$authGroupRes);
        return $this->view->fetch();
    }

    /*编辑科研人员*/
    public function edit()
    {
        // $list = model('Department')->where(['is_delete' => 0])->select();
        // $this->view->assign('bmres', $list);

        $id = $this->request->param('id');
        $user = UserModel::get($id);
        $this->view->assign('user',$user);
        $bmids = $user->getData('bmid');
        $this->view->assign('bmids',$bmids);
        if($this->request->isPost())
        {
            $params = $this->request->param();
            if(empty($params['password']))
            {
                unset($params['password']);
                unset($params['password2']);
            }
            $params['birthday'] = strtotime($params['birthday']);

            $data['group_id'] = $params['group_id'];
            unset($params['group_id']);

            //去掉表单中为空的数据,即没有修改的内容
            foreach ($params as $key => $value ){
                if (empty($value)){
                    unset($params[$key]);
                }
            }
            $user1 = UserModel::get($params['id']);
            $res = $user1->update($params);
            if($res){
                $data['uid'] = input('id');
                db('auth_group_access')->where('uid',$data['uid'])->update(['group_id'=>$data['group_id']]);
                return ['code'=>1];
            }else{
                return ['code'=>0];
            }

        }
        $authGroupAccess=db('auth_group_access')->where('uid',input('id'))->find();
        $this->assign('group_id',$authGroupAccess['group_id']);

        $authGroupRes=db('auth_group')->select();
        $this->assign('authGroupRes',$authGroupRes);
        return $this->view->fetch();
    }

    /*逻辑删除科研人员*/
    public function del()
    {
        $id = $this->request->param('id');
        $user = UserModel::get($id);
        $user->is_delete = 1;
        $user->save();
    }

    //科研人员状态变更
    public function setStatus(Request $request)
    {
        $user_id = $request -> param('id');
        $result = UserModel::get($user_id);
        if($result->getData('status') == 1) {
            UserModel::update(['status'=>0],['id'=>$user_id]);
        } else {
            UserModel::update(['status'=>1],['id'=>$user_id]);
        }
    }

    /*检测添加数据的合法性*/
    //检测用户名是否可用
    public function checkUserName(Request $request)
    {
        $userName = trim($request -> param('name'));
        $status = 1;
        $message = '用户名可用';
        if (UserModel::get(['username'=> $userName])) {
            //如果在表中查询到该用户名
            $status = 0;
            $message = '用户名重复,请重新输入~~';
        }
        return ['status'=>$status, 'message'=>$message];
    }

    //检测用户邮箱是否可用
    public function checkUserEmail(Request $request)
    {
        $userEmail = trim($request -> param('email'));
        $status = 1;
        $message = '邮箱可用';
        if (UserModel::get(['email'=> $userEmail])) {
            //查询表中找到了该邮箱,修改返回值
            $status = 0;
            $message = '邮箱重复,请重新输入~~';
        }
        return ['status'=>$status, 'message'=>$message];
    }

    //检测用户手机是否可用
    public function checkPhone(Request $request)
    {
        $userPhone = trim($request -> param('phone'));
        $status = 1;
        $message = '手机号可用';
        if (UserModel::get(['phone'=> $userPhone])) {
            //查询表中找到了该邮箱,修改返回值
            $status = 0;
            $message = '手机号重复,请重新输入~~';
        }
        return ['status'=>$status, 'message'=>$message];
    }

    /**
     * 忘记密码
     */
    public function forgetpassword()
    {
        if(request()->isPost())
        {
            $email = input('email');
            $new_pass = input('password');
            $email_yzm = input('password');
            dump(input());
        }
        return $this->fetch();
    }
}
