<?php
/*
* Author:  @SmallOyster
* 文件用途: 会员系统-会员列表
* 教学方向: 数据库数据输出至表格|URL传参
* 使用方式: 登录后通过菜单访问
*/

//引用文件，具体看Wiki
require_once("ckLog.php");
require_once("sql.config.php");
require_once("base_utils.php");

//常规MySQL数据处理
//SQL语句定义
$sql="SELECT * FROM list ORDER BY id DESC";
//执行
$query=mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>小生蚝会员系统 - 会员列表</title>
</head>

<body>
<?php 
  include("nav.php");//包含文件,具体Wiki
?>
<center>
<table border=1>
<tr>
  <th width="80px">ID</th>
  <th width="80px">姓名</th>
  <th width="80px">性别</th>
  <th width="80px">编辑</th>
  <th width="80px">删除</th>
</tr>

<?php
//循环获取 
while($rs=mysqli_fetch_array($query)){

  //变量定义，$rs['xx']对应数据表字段名
  $id=$rs['id'];
  $name=$rs['name'];
  
  //制作表格
  echo "<tr>";
  echo "<td><center>".$id."</center></td>";
  echo "<td><center>".$rs['name']."</center></td>";
  //使用自定义函数
  echo "<td><center>".ColorSex($rs['sex'])."</center></td>";
  //echo中传参
  echo "<td><center><a href='editmember.php?id=$id&name=$name'>编辑</a></center></td>";
  echo "<td><center><a href='delmember.php?id=$id&name=$name'>删除</a></center></td>";
  echo "</tr>";
}
?>

</table>
</body>