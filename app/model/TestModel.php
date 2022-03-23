<?php
namespace app\model;

use think\Model;

class TestModel extends Model
{

     // 设置当前模型对应的完整数据表名称
    protected $table = 'easeus_test';
    
    // 设置当前模型的数据库连接
    protected $connection = 'mysql';
    
    protected static function init()
    {
        //TODO:初始化内容
        echo "easeus_test";
    }
    
    public function aa(){
        echo aa;
    }
    
    /**
     * 获取器
     */
    public function getTypeAttr($value)
    {
        $status = array(1=>'管理员',2=>'普通员工');
        return $status[$value];
    }
    
    /**
     * 修改器
     */
     public function setXgqAttr($value)
    {
        return ucwords($value) ;
    }
    /**
     * 搜索器
     */
    public function searchNameAttr($query, $value, $data)
    {
        $query->where('name','like', '%'.$value . '%');
    }
    
    public function testinfo()
    {
     return $this->hasOne(T2Model::class,'test_id','id')->bind(array('info'));
     
    }
}
