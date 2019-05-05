<?php
namespace app\index\controller;

use app\index\model\AuthGroup as AuthGroupModel;
use app\index\model\Department;


class AuthGroup extends Common
{
    /*角色（用户组）列表*/
    public function lst()
    {
        $this->view->count = AuthGroupModel::where('is_delete',0)->count();
        $res=AuthGroupModel::where('is_delete',0)->paginate(6);
        $this->assign('authGroupRes',$res);
        return view();
    }

    /*新增角色（用户组）*/
    public function add()
    {
        if(request()->isPost())
        {
            $data=input('post.');
            if(isset($data['rules']))
            {
                $data['rules']=implode(',',$data['rules']);
            }
            // dump($data);
            // unset($data['rules']);
            $add=db('auth_group')->insert($data);
            if($add)
            {
                return ['code'=>1];
            }else{
                return ['code'=>0];
            }
        }
        $authRule=new \app\index\model\AuthRule();
        $authRuleRes=$authRule->authRuleTree();
        $this->assign('authRuleRes',$authRuleRes);
        return view();
    }

    /*编辑角色（用户组）*/
    public function edit()
    {
        $id = input('id');
        $authGroup = db('auth_group')->find($id);
        $this->assign('authGroup',$authGroup);

        $authRule=new \app\index\model\AuthRule();
        $authRuleRes=$authRule->authRuleTree();
        $this->assign('authRuleRes',$authRuleRes);

        if(request()->isPost())
        {
            $data=input('post.');
            if(isset($data['rules']))
            {
                $data['rules']=implode(',',$data['rules']);
            }
            $update=db('auth_group')->update($data);
            if($update)
            {
                return ['code'=>1];
            }else{
                return ['code'=>0];
            }
        }
        return view();
    }

    /**
     * 逻辑删除角色（用户组）
     */
    public function del()
    {
        $id = input('id');
        $res = AuthGroupModel::get($id);
        $res->is_delete = 1;
        $res->save();
    }

    /**
     * 角色（用户组）启用/禁用
     */
    public function change()
    {
        $id = input('id');
        $status=input('status');
        $res = AuthGroupModel::get($id);
        $res->status = $status;
        $res->save();
    }
}



