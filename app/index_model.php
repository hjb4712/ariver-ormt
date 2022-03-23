<?php
require_once (__dir__ . "/thinkORMT.php");
use biz\App as BizApp;
use app\model\TestModel;
use app\model\T2Model;
class App extends BizApp
{

    /**
     *  模型添删改
     * http://192.168.1.121:9341/app/index_model.php?a=index
     * 
    */
    
    public function index()
    {
    //添加   
    $user           = new TestModel;
    $user->name     = 'thinkphp';
    $user->add_time    = time();
    $user->save();
    dump("添加成功");
    
    //2
    $user = TestModel::find(1);
    $user->name     = 'ariver'.time();
    $user->save();
    dump("查找并更新");
    
    
   //3
    TestModel::destroy(2);  //TestModel::where('id','=',2)->delete();
    dump("删除");
  
   // 4
   $list = TestModel::select();
   foreach($list as $key=>$user){
    echo $user->name;
   }
   dump("遍历输出");
  
  //5 转化数组
   dump($list->toArray());
   
  //6
    TestModel::aa();
   }
   
   


   
   /**
    * http://192.168.1.121:9341/app/index_model.php?a=index2
    */
   public function  index2(){
    
   //获取器 
    $user= TestModel::find(1);
    dump($user->type);
    dump($user->getData('type'));  //获取原始数据
    
   //修改器
   $user = new TestModel();
   $user->xgq = 'think ariver';
   $user->save();
   dump($user->xgq);
    
   //搜索器
   $rel= TestModel::withSearch(array('name'), array('name'=>'ar'))->select();
   dump($rel->toArray());
   }
   
/**
 * http://192.168.1.121:9341/app/index_model.php?a=index3
 * 1对1关联
 */
   public function index3(){
    
 //关联查询
    $user = TestModel::find(1);
    echo $user->testinfo->info;
    dump('关联查询');
 
 //关联保存
   $user->testinfo->save(array('info'=>'鲁班7号yyds'.time()));
   dump('关联保存');
    
// 绑定
    $user = TestModel::with('testinfo')->find(1);
    dump('绑定');
    dump($user->toArray());
    dump($user->info);
 }
   
   
   
   
   
}

App::Run();
