<?php
namespace app;
use biz\facade\Template;
use think\facade\Db;
use biz\App as BizApp;
class Base extends BizApp
{

protected $Db;
protected $Template;
public function __construct(){
   //$this->$Db=new Db;
   //$this->$Template=Template; 
   dump('app\base __construct');
    
}

}