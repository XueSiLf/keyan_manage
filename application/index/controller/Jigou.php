<?php
namespace app\index\controller;

use app\index\model\Jigou as JigouModel;

class Jigou extends Common
{
    /*机构列表*/
    public function lst()
    {
        $this->view->count = JigouModel::where(['is_delete' => 0])->count();
        $list = JigouModel::where(['is_delete' => 0])->paginate(10);
        $this->view->assign('jigou', $list);
        $page = $list->render();
        // 模板变量赋值
        $this->view->assign('page', $page);
        return $this->view->fetch();
    }

    /*添加科研机构*/
    public function add()
    {
        if (request()->isPost()) {
            $params = $this->request->param();
            $jigou = model('Jigou')->save($params);
            if ($jigou) {
                return ['code' => 1];
            } else {
                return ['code' => 0];
            }
        }
        return $this->view->fetch();
    }

    /*编辑科研机构*/
    public function edit()
    {
        $id = input('id');
        $jgres = JigouModel::get($id);
        $this->assign('jgres',$jgres);

        if (request()->isPost()) {
            $params = $this->request->param();
            unset($params['id']);
            $res = model('Jigou')->save($params,['id'=>$id]);
            if ($res) {
                return ['code' => 1];
            } else {
                return ['code' => 0];
            }
        }
        return $this->view->fetch();
    }

    /*检测添加和编辑数据的合法性*/
    //检测机构名称是否可用
    public function checkJgName(Request $request)
    {
        $jg_name = trim($request -> param('jg_name'));
        $status = 1;
        $message = '机构名称可用';
        if (JigouModel::get(['jg_name'=> $jg_name])) {
            //如果在表中查询到该用户名
            $status = 0;
            $message = '机构名称已存在,请重新输入~~';
        }
        return ['status'=>$status, 'message'=>$message];
    }

    /*逻辑删除机构*/
    public function del()
    {
        $id = $this->request->param('id');
        $depar = JigouModel::get($id);
        $depar->is_delete = 1;
        $depar->save();
    }
}



