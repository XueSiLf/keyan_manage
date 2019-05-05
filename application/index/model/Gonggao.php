<?php
namespace app\index\model;

use think\Model;

class Gonggao extends Model
{
    protected $autoWriteTimestamp = true;

    protected $createTime = 'create_time';

    protected $updateTime = false;

    public function getFilepathAttr($value)
    {
        if($value)
        {
            return "<a target='_blank' download='' href='/uploads/".$value."'>点击下载附件</a>";
        }else{
            return '暂无附件';
        }

    }

//
//    public function getTitleAttr($value)
//    {
//        $title = [0=>'-',1=>'教授',2=>'副教授',3=>'讲师',4=>'助教'];
//        return $title[$value];
//    }
//
//    public function getRoleAttr($value)
//    {
//        $role = [0=>'-',1=>'校级管理员',2=>'院级管理员',3=>'院级科研秘书',4=>'普通科研教师'];
//        return $role[$value];
//    }
//
//    public function getStatusAttr($value)
//    {
//        $status= [1=>'已启用',0=>'已停用'];
//        return $status[$value];
//    }
}