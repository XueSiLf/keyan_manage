<?php
namespace app\index\controller;

use app\index\model\Paper as PaperModel;
use app\index\model\Department;


class Paper extends Common
{
    public function _initialize()
    {
        parent::_initialize();
        $list = model('Department');
        $bmres = $list->departtree();
        $this->view->assign('bmres', $bmres);
    }

    /*论文列表*/
    public function lst()
    {
        // 论文总数
        $this->view->count = PaperModel::where(['is_delete' => 0])->count();
        
        $list = PaperModel::where(['is_delete' => 0])->paginate(10);
        $this->view->assign('paper', $list);
        $page = $list->render();
        // 页面模板变量赋值
        $this->view->assign('page', $page);
        return $this->view->fetch();
    }

    /*论文新增*/
    public function add()
    {
        if (request()->isPost()) {
            $params = $this->request->param();
            $params['bmid'] = intval($params['bmid']);
            $params['publish_time'] = strtotime($params['publish_time']);
            $params['status'] = 0;
            $paper_res = model('Paper')->save($params);
            if ($paper_res) {
                return ['code' => 1];
            } else {
                return ['code' => 0];
            }
        }
        return $this->view->fetch();
    }

    /*论文编辑*/
    public function edit()
    {
        $id = input('id');
        $res = PaperModel::get($id);
        $this->assign('paper',$res);

        $bmids = $res->bmid;
        $this->assign('bmids',$bmids);

        if (request()->isPost()) {
            $params = $this->request->param();
            $id = input('id');

            $params['bmid'] = intval($params['bmid']);
            $params['publish_time'] = strtotime($params['publish_time']);
            $params['status'] = 0;

            $res = model('Paper')->save($params,['id'=>$id]);
            if ($res) {
                return ['code' => 1];
            } else {
                return ['code' => 0];
            }
        }
        return $this->view->fetch();
    }

    /**
     * 删除论文
     */
    public function del()
    {
        $id = input('id');
        $res = PaperModel::get($id);
        $res->is_delete = 1;
        $res->save();
    }

    /**
     * 审核提交的论文
     */
    public function check()
    {
        $id = input('id');
        $res = PaperModel::get($id);
        $res->status = input('status');;
        $res->save();
    }
}



