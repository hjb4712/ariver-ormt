<?php
require_once (__dir__ . "/thinkORMT.php");
use app\Base;
use think\facade\Db;
use biz\facade\Template;

class App extends Base
{

    /**
     *  默认执行方法
     * http://192.168.1.121:9341/app/index_base.php
     */
    public function index()
    {
        dump(__file__);
        dump(__dir__ );
        echo " hello index!";
        echo "<br>";
    dump(Db::getConfig());
    dump(Template::getConfig('view_path'));
        
    }

   
}

App::Run();
