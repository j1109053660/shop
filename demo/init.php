<?php
header('content-type:text/html;charset=utf-8');

//总引文
define("ROOTPATH",str_ireplace("\\","/",__DIR__));
// echo __DIR__; // 获取当前文件路径 路径是\ 需要替换成/
include "function.php";
include "mysql.class.php";
include "Page.class.php";
//后台所有页面均使用同一个库
$ku=new Mysql("shop");


