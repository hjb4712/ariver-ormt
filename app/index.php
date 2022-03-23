<?php
require_once (__dir__ . "/thinkORMT.php");
use biz\facade\Template;
use think\facade\Db;
use biz\App as BizApp;
use app\model\TestModel;
class App extends BizApp
{

    /**
     *  默认执行方法
     * http://192.168.1.121:9100/mycomposer/app/index.php
     */
    public function index()
    {
        dump(__file__);
        dump(__dir__ );
        echo " hello index!";
        echo "<br>";
    }

    /**
     * 模板操作
     * http://192.168.1.121:9341/app/index.php?a=index2
     * 
     * think\facade\Template 使用改方法
     * $Template= Template::config(ThinkTemplate())->fetch('index');die();
     */
    public function index2()
    {
      
        dump(Template::getConfig('view_path'));
        Template::assign(array('name1'=>'name1111'));
        //Template::display($content,['name' => 'think']);
        return Template::fetch('index',array('name2'=>'name2222'));
        
    }
    
    /**
     * 数据库操作
     * http://192.168.1.121:9341/app/index.php?a=index3
     */
    public function index3(){
    dump(Db::getConfig());   
    $rel= Db::name('api_log')->where('id', 1)->find();
    
    dump($rel);
    $rel= Db::connect('demo')->name('cdn2021')->where('id', 1)->find();  
    dump($rel);
    
    $logs = Db::getDbLog();
    dump($logs);
   }
   
   /**
    * http://192.168.1.121:9341/app/index.php?a=index4
    */
   public function  index4(){
   //添加   
    $add           = new TestModel;
    $add->name     = 'thinkphp';
    $add->add_time    = time();
    $add->save();
    //静态调用模型方法
    TestModel::aa();
    
    
   }
}

App::Run();
