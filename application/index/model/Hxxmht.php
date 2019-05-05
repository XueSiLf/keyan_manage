<?php
namespace app\index\model;
use think\Model;

/**
 * 横向合同列表模型
 */
class Hxxmht extends Model
{
    // 指定表名
    protected $table = 'ky_hxxm_ht';
    // 开启自动写入时间戳
    protected $autoWriteTimestamp = true;
    protected $createTime = 'create_time';
    protected $updateTime = 'update_time';

    // 合同类别字段获取器
    public function getHttypeAttr($value)
    {
        $httype = [0=>'-',1=>'开发',2=>'服务'];
        return $httype[$value];
    }
    // 计划类别字段获取器
    public function getJhtypeAttr($value)
    {
        $jhtype = [0=>'-',1=>'国家、部门计划',2=>'省计划',3=>'地、市、县计划'];
        return $jhtype[$value];
    }
    // 合同状态字段获取器
    public function getStatusAttr($value)
    {
        $status = [0=>'待审核',1=>'通过',2=>'驳回'];
        return $status[$value];
    }

    //合同附件字段获取器
    public function getFilepathAttr($value)
    {
        if($value)
        {
            return "<a target='_blank' download='' href='/uploads/".$value."'>点击下载附件</a>";
        }else{
            return '暂无附件';
        }
    }
}