<?php
include "demo/init.php";
//echo "<pre>";
//print_r($_GET);
//echo "</pre>";
/*-------------------------------------------------------------*/
$biao=$_GET['b'];//接表名
$sid=$_GET['sid'];
$key=array_flip($_GET);//查找的键名
$zd=$key[$sid];//按找值来找字段名
//echo "字段名为：".$zd;
//删数据
$list = $ku->delete("{$biao}", "{$zd} in ({$sid})");
success("删除成功","list.php");