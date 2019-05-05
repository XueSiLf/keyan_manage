<?php
namespace app\index\controller;

use app\index\model\AuthRule as AuthRuleModel;
use app\index\model\Department;


class AuthRule extends Common
{
    // protected $beforeActionList = [
    //     'delsonauth'=>['only','del'],
    // ];
    /*权限（规则）列表*/
    public function lst()
    {
        
        // $this->view->count = AuthRuleModel::where('is_delete',0)->count();
        // $res=AuthRuleModel::paginate(6);
        $authrule=new AuthRuleModel();
        if(request()->isPost())
        {
            $sorts=input('post.');
            foreach($sorts as $k=>$v)
            {
                $authrule->update(['id'=>$k,'sort'=>$v]);
            }
            $this->success('更新排序成功！');
            return;
        }

        $authRule = new AuthRuleModel();
        $authRuleRes = $authRule->authRuleTree();
        $this->assign('authRuleRes',$authRuleRes);
        return view();
    }

    /*新增权限（规则）*/
    public function add()
    {
        if(request()->isPost())
        {
            $data=input('post.');
            // 拿到上级权限的level
            $plevel=db('auth_rule')->where('id',$data['pid'])->field('level')->find();
            // dump($plevel);
            if($plevel)
            {
                $data['level']=$plevel['level']+1;
            }else{
                $data['level']=0;
            }
            
            $add=db('auth_rule')->insert($data);
            if($add)
            {
                return ['code'=>1];
            }else{
                return ['code'=>0];
            }
        }
        // $authruleres = db('auth_rule')->select();
        // $this->assign('authruleres',$authruleres);

        $authRule = new AuthRuleModel();
        $authRuleRes = $authRule->authRuleTree();
        $this->assign('authRuleRes',$authRuleRes);
        return view();
    }

    /*编辑权限（规则）*/
    public function edit()
    {
        $authRule = new AuthRuleModel();
        $authRuleRes = $authRule->authRuleTree();
        $this->assign('authRuleRes',$authRuleRes);

        $id = input('id');
        $authrule = $authRule->find($id);
        $this->assign('authrule',$authrule);
        
        if(request()->isPost())
        {
            $data=input('post.');
            // 拿到上级权限的level
            $plevel=db('auth_rule')->where('id',$data['pid'])->field('level')->find();
            // dump($plevel);
            if($plevel)
            {
                $data['level']=$plevel['level']+1;
            }else{
                $data['level']=0;
            }
            
            $update=db('auth_rule')->update($data);
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
     * 逻辑删除权限（权限）
     * 删除应该把子权限也删除掉
     */
    public function del()
    {
        $authRule = new AuthRuleModel();
        $authRuleIds=$authRule->getchildrenid(input('id'));
        // dump($authRuleIds);
        // die;
        $authRuleIds[]=input('id');
        $del=AuthRuleModel::destroy($authRuleIds);
    }
}



