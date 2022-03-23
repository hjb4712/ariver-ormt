<?php
error_reporting(E_ERROR | E_PARSE);
require __dir__ . '/../vendor/autoload.php';

/**  系统内置方法:同1 开头命名 ------------------------------------------------------------  **/
/**
 * ThinkORM 数据库配置  参考地址 https://www.kancloud.cn/manual/think-orm/1257998
 */
function ThinkORM()
{

    return [ // 默认数据连接标识
        'default' => 'mysql', // 数据库连接信息
        'connections' => ['mysql' => [ // 数据库类型
        'type' => 'mysql', // 主机地址
        'hostname' => '127.0.0.1', // 用户名
        'username' => 'root', 'password' => '17e736120c2ff53a', // 数据库名
        'database' => 'order_center', // 数据库编码默认采用utf8
        'charset' => 'utf8', // 数据库表前缀
        'prefix' => 'easeus_', // 数据库调试模式
        'debug' => true, ], 'demo' => [ // 数据库类型
        'type' => 'mysql', // 主机地址
        'hostname' => '192.168.1.39', // 用户名
        'username' => 'root', 'password' => '17e736120c2ff53a', // 数据库名
        'database' => 'timing', // 数据库编码默认采用utf8
        'charset' => 'utf8', // 数据库表前缀
        'prefix' => 'erp_', // 数据库调试模式
        'debug' => true, ]], ];
}

/**
 *  ThinkTemplate 模板配置 查看地址
 */
function ThinkTemplate()
{
    return ['view_path' => __dir__ . '/template/', 
            'cache_path' => __dir__ . '/runtime/', 
            'view_suffix' => 'html', 
            ];
}
/** 全局自定义函数 --------------------------------------------------------------------------  **/
/**
 * 简单的调试打印
 */
function dump($array)
{
    echo "<pre>";
    var_dump($array);
    echo "</pre>";
}
