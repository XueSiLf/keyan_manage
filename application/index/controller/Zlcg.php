<?php
namespace app\index\controller;

use app\index\model\Zlcg as ZlcgModel;
use app\index\model\Department;

/**
 * 专利成果管理控制器
 */
class Zlcg extends Common
{
    /*专利成果信息列表*/
    public function zlcglst()
    {
        // 专利成果总数
        $this->view->count = ZlcgModel::where(['is_delete' => 0])->count();
        
        $list = ZlcgModel::where(['is_delete' => 0])->paginate(10);
        $this->view->assign('zlcg', $list);
        $page = $list->render();
        // 页面模板变量赋值
        $this->view->assign('page', $page);
        return $this->view->fetch();
    }

    /*专利新增*/
    public function add()
    {
        if (request()->isPost()) {
            $params = $this->request->param();
            // dump($params);
            // die;
            $params['zl_status'] = 0;
            $params['zl_apply_time'] = strtotime($params['zl_apply_time']);
            $zl_res = model('Zlcg')->save($params);
            if ($zl_res) {
                return ['code' => 1];
            } else {
                return ['code' => 0];
            }
        }
        return $this->view->fetch();
    }

    /*合同编辑*/
    public function edit()
    {
        $id = input('id');
        $res = HxxmhtModel::get($id);
        $this->assign('ht',$res);

        $res_httype = $res->getData('ht_type');
        $this->assign('res_ht_type',$res_httype);

        $res_jhtype = $res->getData('jh_type');
        $this->assign('res_jh_type',$res_jhtype);

        if (request()->isPost()) {
            $params = $this->request->param();
            // dump($params);
            // die;
            $id = input('id');
            if(empty($params['hxxm_id']))
            {
                $params['hxxm_id'] = '';
            }
            $params['ht_type'] = intval($params['ht_type']);
            $params['jh_type'] = intval($params['jh_type']);
            $params['status'] = 0;
            $params['ht_sxdate'] = strtotime($params['ht_sxdate']);

            // 获取表单上传文件 例如上传了001.jpg
            $file = request()->file('filepath');

            // 移动到框架应用根目录/public/uploads/ 目录下
            if($file){
                $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
                if($info){
                    // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
                    $params['filepath'] = $info->getSaveName();
                }else{
                    // 上传失败获取错误信息
                    echo $file->getError();
                }
            }else{
                return ['code'=>0,'msg'=>'请上传合同附件！'];
            }
            $params['filepath'] = str_replace('\\','/',$params['filepath']);

            $res = model('Hxxmht')->save($params,['id'=>$id]);
            if ($res) {
                return ['code' => 1];
            } else {
                return ['code' => 0];
            }
        }
        return $this->view->fetch();
    }

    /**
     * 删除专利成功
     */
    public function del()
    {
        $id = input('id');
        $res = ZlcgModel::get($id);
        $res->is_delete = 1;
        $res->save();
    }

    /**
     * 审核合同
     */
    public function check()
    {
        $id = input('id');
        $res = HxxmhtModel::get($id);
        $res->status = input('status');;
        $res->save();
    }
}



