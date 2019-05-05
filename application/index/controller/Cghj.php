<?php
namespace app\index\controller;

use app\index\model\Cghj as CghjModel;
use app\index\model\Department;



class Cghj extends Common
{
    /*成果获奖列表显示*/
    public function lst()
    {
        // 合同总数
        $this->view->count = CghjModel::where(['is_delete' => 0])->count();
        
        $list = CghjModel::where(['is_delete' => 0])->paginate(10);
        $this->view->assign('cghj', $list);
        $page = $list->render();
        // 页面模板变量赋值
        $this->view->assign('page', $page);
        return $this->view->fetch();
    }

    /*成果获奖新增*/
    public function add()
    {
        $list = model('Department');
        $bmres = $list->departtree();
        $this->view->assign('bmres', $bmres);

        if (request()->isPost()) {
            $params = $this->request->param();
            // dump($params);
            // die;
            $params['bmid'] = intval($params['bmid']);
            $params['status'] = 0;
            $params['reward_time'] = strtotime($params['reward_time']);
            $cghj_res = model('Cghj')->save($params);
            if ($cghj_res) {
                return ['code' => 1];
            } else {
                return ['code' => 0];
            }
        }
        return $this->view->fetch();
    }

    /*成果获奖编辑*/
    public function edit()
    {
        $id = input('id');
        $res = db('cghj')->where('id',$id)->find();
        $this->assign('cghj',$res);

        if (request()->isPost()) {
            $params = $this->request->param();
            // dump($params);
            // die;
            $params['bmid'] = intval($params['bmid']);
            $params['status'] = 0;
            $params['reward_time'] = strtotime($params['reward_time']);

            $res = model('Cghj')->save($params,['id'=>$id]);
            if ($res) {
                return ['code' => 1];
            } else {
                return ['code' => 0];
            }
        }
        $list = model('Department');
        $bmres = $list->departtree();
        $this->view->assign('bmres', $bmres);
        
        return $this->view->fetch();
    }

    /**
     * 删除成果获奖
     */
    public function del()
    {
        $id = input('id');
        $res = CghjModel::get($id);
        $res->is_delete = 1;
        $res->save();
    }

    /**
     * 审核成果获奖
     */
    public function check()
    {
        $id = input('id');
        $res = CghjModel::get($id);
        $status = input('status');
        if($status == '2'){
            // 审核驳回
            $res->save(['status'=>3],['id'=>$id]);
        }elseif($status ==  '1'){
            if( (session('group_id') == 1) || (session('group_id') == 2) ){
                // 超级管理员或者校级科研秘书审核通过
                $res->save(['status'=>2],['id'=>$id]);
            }elseif( session('group_id') == 3 ){
                // 院级科研秘书审核通过
                $res->save(['status'=>1],['id'=>$id]);
            }
        }
    }
}



