<?php
/*
* Author:  @SmallOyster
* 文件用途: 会员系统-编辑会员
* 教学方向: Get获取|编辑数据库记录
* 使用方式: 登录后通过会员列表访问
*/

require_once("ckLog.php");
require_once("sql.config.php");

//获取URL里ID参数的内容
$id=$_GET['id'];
$name=$_GET['name'];//参数内容可为中文

if(isset($_POST) && $_POST){
  
  //获取提交的值
  $n=$_POST['n'];
  $s=$_POST['s'];
  
  //判断是否为空
  if($n==""){die("False!");}
  
  //定义SQL语句
  $sql="UPDATE list SET name='{$n}',sex='{$s}' WHERE id='{$id}'";

  //执行(因为此处并非SELECT所以不用fetch)
  $rs=mysqli_query($conn,$sql);
  
  //$rs的返回值为布尔型
  if($rs==true){
    die("编辑成功 ~ <a href='list.php'>点此返回</a>");
  }
  else{
    die("编辑失败！<a href='list.php'>点此返回</a>");
  }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>小生蚝会员系统 - 编辑会员</title>
</head>
<body>
<center><b>
修改 <font color='blue'><?php echo $name;/*可中途插入echo*/ ?></font> 的资料

<form method="post">
用户名：<input name="n"><br>
性别：<select name="s">
  <option value="1">男</option>
  <option value="2">女</option>
</select><br>
<input type="submit">
</form>