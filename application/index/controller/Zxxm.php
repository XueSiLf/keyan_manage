<?php
namespace app\index\controller;

use app\index\model\Zxxm as ZxxmModel;
use app\index\model\Department;


class Zxxm extends Common
{
    /*纵向项目列表*/
    public function lst()
    {

        $this->view->count = ZxxmModel::count();
        $list = ZxxmModel::where(['is_delete' => 0])->paginate(10);
        $this->view->assign('zxxm', $list);
        $page = $list->render();
        // 模板变量赋值
        $this->view->assign('page', $page);
        return $this->view->fetch();
    }

    /*纵向项目申报*/
    public function add()
    {

        $list = new Department();
        $bmres = $list->departtree();
        $this->view->assign('bmres', $bmres);

        if (request()->isPost()) {
            $params = $this->request->param();


            $params['zxxm_bmid'] = intval($params['zxxm_bmid']);
            $params['zxxm_type'] = intval($params['zxxm_type']);
            $params['zxxm_status'] = 0;
            $params['zxxm_lx_time'] = strtotime($params['zxxm_lx_time']);
            $params['zxxm_plan_finishtime'] = strtotime($params['zxxm_plan_finishtime']);
            $params['zxxm_jx_time'] = strtotime($params['zxxm_jx_time']);
            $params['zxxm_cgxs'] = intval($params['zxxm_cgxs']);
            $params['zxxm_counts'] = floatval($params['zxxm_counts']);

            dump($params);
            die;

            $zzxm = model('Zxxm')->save($params);
            if ($zzxm) {
                return ['code' => 1];
            } else {
                return ['code' => 0];
            }
        }
        return $this->view->fetch('apply');
    }
}



