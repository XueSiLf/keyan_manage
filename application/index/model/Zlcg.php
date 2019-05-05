<?php
namespace app\index\model;
use think\Model;

/**
 * 针对专利成果信息模型
 */
class Zlcg extends Model
{
    // 指定表名
    protected $table = 'ky_zlcg';

    // 专利成果状态字段获取器
    public function getZlstatusAttr($value)
    {
        $Zlstatus = [0=>'待学院审核',1=>'待学校审核',2=>'完成',3=>'驳回'];
        return $Zlstatus[$value];
    }

    // 开启自动写入时间戳
    // protected $autoWriteTimestamp = true;
    // protected $createTime = 'create_time';
    // protected $updateTime = 'update_time';

    // 专利所属单位获取器
    public function getZlownerbmidAttr($value)
    {
        $Zlownerbmid = db('department')->where('bm_id',$value)->value('bm_name');
        // dump($Zlownerbmid);
        return $Zlownerbmid;
    }
    // // 计划类别字段获取器
    // public function getJhtypeAttr($value)
    // {
    //     $jhtype = [0=>'-',1=>'国家、部门计划',2=>'省计划',3=>'地、市、县计划'];
    //     return $jhtype[$value];
    // }
    

    // //合同附件字段获取器
    // public function getFilepathAttr($value)
    // {
    //     if($value)
    //     {
    //         return "<a target='_blank' download='' href='/uploads/".$value."'>点击下载附件</a>";
    //     }else{
    //         return '暂无附件';
    //     }
    // }
}