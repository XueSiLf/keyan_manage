<?php
namespace app\index\controller;

use app\index\model\Hxxm as HxxmModel;
use app\index\model\Department;


class Hxxm extends Common
{
    /*横向项目列表*/
    public function lst()
    {
        // 项目总数
        $this->view->count = HxxmModel::where(['is_delete' => 0])->count();
        // 项目输出
        $list = HxxmModel::where(['is_delete' => 0])->paginate(10);
        $this->view->assign('hxxm', $list);
        $page = $list->render();
        // 页面模板变量赋值
        $this->view->assign('page', $page);
        return $this->view->fetch();
    }

    /**
     * 横向项目删除
     */
    public function del()
    {
        $id = input('id');
        $res = HxxmModel::get($id);
        $res->is_delete = 1;
        $res->save();
    }

    /**
     * 横向项目删除审核
     */
    public function check()
    {
        $id = input('id');
        $res = HxxmModel::get($id);
        $res->status = input('status');;
        $res->save();
    }
}



