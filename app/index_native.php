<?php
//http://192.168.1.121:9341/app/index_native.php
require_once (__dir__ . "/thinkORMT.php"); //require __DIR__ . '/vendor/autoload.php';
use think\facade\Db;
use biz\facade\Template;

//初始化ThinkORM
empty(function_exists('ThinkORM')) ? '' : Db::setConfig(ThinkORM());
//初始化ThinkTemplate
empty(function_exists('ThinkTemplate')) ? '' : Template::config(ThinkTemplate());


//使用数据库
dump(Db::getConfig());
$rel = Db::name('api_log')->where('id', 1)->find();
dump($rel);
$rel = Db::connect('demo')->name('cdn2021')->where('id', 1)->find();
dump($rel);

//使用模板引擎
dump(Template::getConfig('view_path'));
Template::assign(array('name1' => "think1"));
Template::fetch('index', array('name2' => "think2"));
