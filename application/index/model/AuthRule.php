<?php
namespace app\index\model;

use think\Model;

class AuthRule extends Model
{
    protected $tableName = 'ky_auth_rule';
    /*权限树*/
    public function authRuleTree()
    {
        $authruleres = $this->order('sort desc')->select();
        return $this->sort($authruleres);
    }

    /*权限排序*/
    /**
     * @param $data 要分类的权限数据
     * @param int $pid 上级权限id
     */
    public function sort($data,$pid=0)
    {
        static $arr = array();
        foreach ($data as $k=>$v)
        {
            if($v['pid'] == $pid) //找出第一个顶级栏目
            {
                $v['dataid']=$this->getparentid($v['id']);
                $arr[] = $v;
                $this->sort($data,$v['id']); //找当前栏目的子栏目
            }
        }
        return $arr;
    }

    public function getchildrenid($authRuleid)
    {
        $authRuleRes=$this->select();
        return $this->_getchildrenid($authRuleRes,$authRuleid);
    }

    public function _getchildrenid($authRuleRes,$authRuleid)
    {
        static $arr=array();
        foreach($authRuleRes as $k=>$v)
        {
            if($v['pid'] == $authRuleid)
            {
                $arr[] = $v['id'];
                $this->_getchildrenid($authRuleRes,$v['id']);
            }
        } 
        return $arr;
    }

    public function getparentid($authRuleid)
    {
        $authRuleRes=$this->select();
        return $this->_getparentid($authRuleRes,$authRuleid,True);
    }

    public function _getparentid($authRuleRes,$authRuleid,$clear=False)
    {
        static $arr=array();
        if($clear)
        {
            $arr=array();
        }
        foreach($authRuleRes as $k=>$v)
        {
            if($v['id'] == $authRuleid)
            {
                $arr[] = $v['id'];
                $this->_getparentid($authRuleRes,$v['pid'],False);
            }
        } 
        asort($arr);
        $arrStr=implode('-',$arr);
        return $arrStr;
    }

}



