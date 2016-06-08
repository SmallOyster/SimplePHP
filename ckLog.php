<?php
/*
* Author:  @SmallOyster
* 文件用途: 会员系统-检测登录状态
* 教学方向: 获取Session|跳转
* 使用方式: 不可访问
*/

//启用session
session_start();

//获取session-isLog值并存入变量
$log=$_SESSION['isLog'];

// !$log意思是判断是否有值
// 判断是否为false以确认是否登录
// header("Location: www.xxx.com");跳转
if(!$log || $log==false){
  header("Location: login.php");
}
?>