<?php
namespace app\index\model;

use think\Model;

class User extends Model
{
    protected $autoWriteTimestamp = true;

    protected $createTime = 'create_time';

    protected $updateTime = 'update_time';

    public function getSexAttr($value)
    {
        $sex = [0=>'-',1=>'男',2=>'女'];
        return $sex[$value];
    }

    public function getTitleAttr($value)
    {
        $title = [0=>'-',1=>'教授',2=>'副教授',3=>'讲师',4=>'助教'];
        return $title[$value];
    }

    public function getRoleAttr($value)
    {
        $role = [0=>'超级管理员',1=>'校级科研秘书',2=>'院级科研秘书',3=>'普通科研教师',4=>'dadas'];
        return $role[$value];
    }

    public function getStatusAttr($value)
    {
        $status= [1=>'已启用',0=>'已停用'];
        return $status[$value];
    }

    public function getBmidAttr($value)
    {
        //查询该用户所属部门
        $bm_id = model('Department')->where('bm_id',$value)->find();
        $bm_name = $bm_id['bm_name'];
        if($bm_id['bm_pid'] == 0)
        {
            return $bm_name;
        }else{
            $bm_pid = model('Department')->where('bm_id',$bm_id['bm_pid'])->find();
            if($bm_pid['bm_pid'] == 0)
            {
                return $bm_pid['bm_name'].'/'.$bm_name;
            }else{
                $bm_ppid = model('Department')->where('bm_id',$bm_pid['bm_pid'])->find();
                return $bm_ppid['bm_name'].'/'.$bm_pid['bm_name'].'/'.$bm_name;
            }
        }
    }
}