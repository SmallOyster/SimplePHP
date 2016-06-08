<?php
/*
* Author:  @SmallOyster
* 文件用途: 会员系统-删除会员
* 教学方向: Get获取|编辑数据库记录
* 使用方式: 登录后通过会员列表访问
*/

require_once("ckLog.php");
require_once("sql.config.php");

//获取URL里ID参数的内容
$id=$_GET['id'];
$name=$_GET['name'];//参数内容可为中文

if(isset($_POST) && $_POST){
  if(isset($_POST['yes']) && $_POST['yes']){
  //定义SQL语句
  $sql="DELETE FROM list WHERE id='{$id}'";

  //执行(因为此处并非SELECT所以不用fetch)
  $rs=mysqli_query($conn,$sql);
  if($rs==true){
    die("删除成功 ~ <a href='list.php'>点此返回</a>");
  }
  else{
    die("删除失败！<a href='list.php'>点此返回</a>");
  }
  }
  
  else if(isset($_POST['no']) && $_POST['no']){
    header("Location: list.php");
  }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>小生蚝会员系统 - 删除会员</title>
</head>
<body>
<center><b>
删除 <font color='blue'><?php echo $name;/*可中途插入echo*/ ?></font> 的资料

<form method="post">
<input type="submit" name="yes" value="确认删除">&nbsp;&nbsp;
<input type="submit" name="no" value="取消操作">
</form>