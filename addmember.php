<?php
/*
* Author:  @SmallOyster
* 文件用途: 会员系统-新增会员
* 教学方向: 获取表单数据|新增数据库记录
* 使用方式: 登录后通过菜单访问
*/

require_once("ckLog.php");
require_once("sql.config.php");

if(isset($_POST) && $_POST){
  //获取提交的值
  $n=$_POST['n'];
  $s=$_POST['s'];
  
  //判断是否为空
  if($n==""){die("False!");}
  
  //定义SQL语句
  $sql="INSERT INTO list SET name='{$n}',sex='{$s}'";

  //执行(因为此处并非SELECT所以不用fetch)
  $rs=mysqli_query($conn,$sql);
  
  //$rs的返回值为布尔型
  if($rs==true){
    die("新增成功 ~ <a href='list.php'>点此返回</a>");
  }
  else{
    die("新增失败！<a href='list.php'>点此返回</a>");
  }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>小生蚝会员系统 - 新增会员</title>
</head>
<body>
<?php 
  include("nav.php");//包含文件,具体Wiki
?>

<form method="post">
用户名：<input name="n"><br>
性别：<select name="s">
  <option value="1">男</option>
  <option value="2">女</option>
</select><br>
<input type="submit" value="新 增">
</form>