<?php
namespace app\index\controller;

use app\index\model\Gonggao as GonggaoModel;


class Gonggao extends Common
{
    /*公告列表*/
    public function lst()
    {

        $this->view->count = GonggaoModel::where(['is_delete' => 0])->count();
        $list = GonggaoModel::where(['is_delete' => 0])->order('is_top desc')->order('create_time desc')->paginate(10);
        $this->view->assign('gonggao', $list);
        $page = $list->render();
        // 模板变量赋值
        $this->view->assign('page', $page);
        return $this->view->fetch();
    }

    /*添加公告*/
    public function add()
    {
        if (request()->isPost()) {
            $params = $this->request->param();

            // 获取表单上传文件 例如上传了001.jpg
            $file = request()->file('filepath');

            $params['gg_poster'] = session('user_info.nickname');

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
                $params['filepath'] = str_replace('\\','/',$params['filepath']);
                unset($params['uploadfile-2']);
            }
            $gonggao = model('Gonggao')->save($params);
            if ($gonggao) {
                return ['code' => 1];
            } else {
                return ['code' => 0];
            }
        }
        return $this->view->fetch();
    }

    /*编辑公告*/
    public function edit()
    {
        $id = $this->request->param('id');
        $gonggao = GonggaoModel::get($id);
        $this->view->assign('gonggao',$gonggao);
        if($this->request->isPost())
        {
            $params = $this->request->param();
            // 获取表单上传文件 例如上传了001.jpg
            $file = request()->file('filepath');
            $params['gg_poster'] = session('user_info.nickname');
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
                $params['filepath'] = str_replace('\\','/',$params['filepath']);
            }else{
                unset($params['filepath']);
            }
            $gonggao1= GonggaoModel::get($params['id']);
            $res = $gonggao1->save($params);
            if($res){
                return ['code'=>1];
            }else{
                return ['code'=>0];
            }
        }
        return $this->view->fetch();
    }

    /*逻辑删除公告*/
    public function del()
    {
        $id = $this->request->param('id');
        $gonggao = GonggaoModel::get($id);
        $gonggao->is_delete = 1;
        $gonggao->save();
    }

    /*
     * 置顶
     * */
    public function istop()
    {
        $id = $this->request->param('id');
        $gonggao = GonggaoModel::get($id);
        if($gonggao->is_top)
        {
            $gonggao->is_top = 0;
        }else{
            $gonggao->is_top = 1;
        }
        $gonggao->save();
    }

    /**
     * 阅读公告
     */
    public function read($id = '')
    {
        $id = $this->request->param('id');
        $gonggao = GonggaoModel::get($id);
        $gonggao->read_counts += 1;
        $gonggao->save(); 
        $this->assign('gg_content',$gonggao->gg_content);
        return $this->fetch();
    }
}



