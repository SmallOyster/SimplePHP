<?php

//启用Session，必须在所有PHP代码前使用。
session_start();

//引用文件，具体看Wiki
require_once("sql.config.php");

//判断是否已提交数据，若没有则不处理
if(isset($_POST) && $_POST){
  //获取usr编辑框的内容（usr为编辑框的Name）
  $usr=$_POST['usr'];
  $pw=$_POST['pw'];
  
  //定义要执行的SQL语句，在适当位置插入变量↓↓↓。常用SQL语句看Wiki
  $sql="SELECT * FROM user WHERE user='{$usr}'";
  //执行语句，第一个参数为数据库连接（已配置），第二个为SQL语句
  $query=mysqli_query($conn,$sql);
  //略……（除了SELECT，其他都不用fetch_array）
  $result=mysqli_fetch_array($query);
  
  //获取数据库中对应用户的密码，$result['xx']的xx为表字段名
  $indb_pw=$result['pw'];
  
} 
