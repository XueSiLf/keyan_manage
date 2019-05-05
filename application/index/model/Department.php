<?php
namespace app\index\model;

use think\Model;
use think\Db;

class Department extends Model
{
    protected $pk = 'bm_id';

    protected $autoWriteTimestamp = true;

    protected $createTime = 'create_time';

    protected $updateTime = 'update_time';

    /*部门树*/
    public function departtree()
    {
        $departres = $this->where('is_delete = 0')->order('weight desc')->select();
        return $this->sort($departres,0,0);
    }

    /*部门排序*/
    /**
     * @param $data 要分类的部门数据
     * @param int $pid 上级部门id
     * @param int $level 部门级别level 层级显示
     */
    public function sort($data,$pid=0,$level=0)
    {
        static $arr = array();
        foreach ($data as $k=>$v)
        {
            if($v['bm_pid'] == $pid) //找出第一个顶级栏目
            {
                $v['level'] = $level; //赋予层级
                $arr[] = $v;
                $this->sort($data,$v['bm_id'],$level+1); //找当前栏目的子栏目
            }
        }
        return $arr;
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