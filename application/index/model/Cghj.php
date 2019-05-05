<?php
namespace app\index\model;
use think\Model;

/**
 * 成果获奖模块模型
 */
class Cghj extends Model
{
    // 指定表名
    protected $table = 'ky_cghj';
    // 开启自动写入时间戳
    protected $autoWriteTimestamp = true;
    protected $createTime = 'create_time';
    protected $updateTime = 'update_time';

    // 所属单位字段获取器
    public function getBmidAttr($value)
    {
        $bm_name = db('Department')->where('bm_id',$value)->value('bm_name');
        return $bm_name;
    }

    // 成果获奖状态字段获取器
    public function getStatusAttr($value)
    {
        $status = [0=>'待学院审核',1=>'待学校审核',2=>'审核通过',3=>'审核驳回'];
        return $status[$value];
    }
}