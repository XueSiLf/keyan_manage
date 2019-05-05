<?php
namespace app\index\controller;

use app\index\model\Downloadfile as DownloadfileModel;



class Downloadfile extends Common
{
    /*文件列表*/
    public function lst()
    {
        $this->view->count = DownloadfileModel::where(['is_delete' => 0])->count();
        $list = DownloadfileModel::where(['is_delete' => 0])->paginate(1);
        $this->view->assign('downloadfile', $list);
        $page = $list->render();
        // 模板变量赋值
        $this->view->assign('page', $page);
        return $this->view->fetch();
    }

    /*上传文件*/
    public function add()
    {
        if (request()->isPost()) {
            $params = $this->request->param();

            // 获取表单上传文件 例如上传了001.jpg
            $file = request()->file('filepath');

            $params['df_uploader'] = session('user_info.nickname');

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
            }
            $params['filepath'] = str_replace('\\','/',$params['filepath']);
            unset($params['uploadfile-2']);
            $downloadfile = model('Downloadfile')->save($params);
            if ($downloadfile) {
                return ['code' => 1];
            } else {
                return ['code' => 0];
            }
        }
        return $this->view->fetch();
    }


    /*逻辑删除文件*/
    public function del()
    {
        $id = $this->request->param('id');
        $downloadfile = DownloadfileModel::get($id);
        $downloadfile->is_delete = 1;
        $downloadfile->save();
    }

    /*增加文件下载次数*/
    public function addDownload()
    {
        $id = $this->request->param('id');
        $downloadfile = DownloadfileModel::get($id)->setInc('download_counts');
    }
}



