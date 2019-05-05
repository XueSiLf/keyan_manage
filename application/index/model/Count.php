<?php
namespace app\index\model;
use think\Model;

/**
 * 经费模型
 */
class Count extends Model
{
    // 指定表名
    protected $table = 'ky_count';
    // 开启自动写入时间戳
    // protected $autoWriteTimestamp = true;
    // protected $createTime = 'create_time';
    // protected $updateTime = 'update_time';

    // 合同状态字段获取器
    public function getStatusAttr($value)
    {
        $status = [0=>'待审核',1=>'学校通过',2=>'驳回'];
        return $status[$value];
    }
    // 是否到账字段获取器
    public function getIsdzAttr($value)
    {
        $Isdz = [0=>'未到账',1=>'已到账'];
        return $Isdz[$value];
    }

    // 立项时间获取器
    public function getLxdateAttr()
    {
        // 纵向经费
        if($this->type == 1)
        {

        }else{

        }
        // $lxdate = Db::table('')
        // return $status[$value];
        return '还为开发';
    }
    // 合同经费获取器
    public function getHtcountAttr()
    {
        // 纵向经费
        if($this->type == 1)
        {

        }else{

        }
        // $lxdate = Db::table('')
        // return $status[$value];
        return '还为开发';
    }
}