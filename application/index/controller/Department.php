<?php
namespace app\index\controller;

use app\index\model\Department as DepartModel;


class Department extends Common
{
    /*部门列表*/
    public function lst()
    {
        // 部门总数
        $this->view->count = DepartModel::where(['is_delete' => 0])->count();

        // 输出部门
        // $list = DepartModel::where(['is_delete' => 0])->paginate(10);
        // $this->view->assign('bm', $list);
        // $page = $list->render();

        // 模板变量赋值
        // $this->view->assign('page', $page);

        $depart = new DepartModel();
        $depart_res = $depart->departtree();
        $this->assign('bm',$depart_res);
        return $this->view->fetch();
    }

    /*添加部门*/
    public function add()
    {
        // $list = DepartModel::where(['is_delete' => 0])->select();
        // $this->view->assign('bmres', $list);
        $list = new DepartModel();
        $bmres = $list->departtree();
        $this->view->assign('bmres', $bmres);

        if (request()->isPost()) {
            $params = $this->request->param();
            $params['bm_build_time'] = strtotime($params['bm_build_time']);
            $depar = model('Department')->save($params);
            if ($depar) {
                return ['code' => 1];
            } else {
                return ['code' => 0];
            }
        }
        return $this->view->fetch();
    }

    /*编辑部门*/
    public function edit()
    {
        // 上级部门
        $list = model('Department');
        $bmres = $list->departtree();
        $this->view->assign('bmres', $bmres);

        $id = input('id');
        $list = new DepartModel();
        $bmres = $list->get($id);
        $this->view->assign('bm_res', $bmres);

        if (request()->isPost()) {
            $params = $this->request->param();
            $params['bm_build_time'] = strtotime($params['bm_build_time']);
            $depar1 = model('Department')->get($params['bm_id']);
            $res = $depar1->save($params);
            if ($res) {
                return ['code' => 1];
            } else {
                return ['code' => 0];
            }
        }
        return $this->view->fetch();
    }

    /*逻辑删除部门*/
    public function del()
    {
        $id = $this->request->param('id');
        $depar = DepartModel::get($id);
        $depar->is_delete = 1;
        $depar->save();
    }

    /*检测添加部门的合法性*/
    //检测部门名称是否可用
    public function checkBmName()
    {
        $bm_name = trim(input('bm_name'));
        $code = 1;
        $msg = '部门名称可用';
        $res = DepartModel::where(['bm_name'=>$bm_name])->find();
        if($res) {
            //如果在表中查询到该部门名称
            $code = 0;
            $msg = '部门名称已存在,请重新输入~~';
        }
        return ['code'=>$code,'msg'=>$msg];
    }
}



