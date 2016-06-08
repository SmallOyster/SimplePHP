<?php
/*
* Author:  @SmallOyster
* 文件用途: 会员系统-导航栏
* 教学方向: HTML代码嵌入PHP代码|使用Session
* 使用方式: include引用
*/
?>

<style type="text/css">
.list1 ul{overflow: hidden;background-color: #66FFFF;}
.list1 li{float: left;list-style-type: none;font-weight: bold;font-size: 20px;}
.list1 a{
  display: block;
  padding: 0 12px;
  text-decoration: none;
  color: #9933cc;
}
.list1 li+li a{border-left: 1px solid #aaa;}
.list1 a:hover{color: red;}
</style>

<body>
<!--在HTML内嵌入PHP代码-->
<?php echo $_SESSION['name']; ?>用户，欢迎您！
<br>
  <nav class="list1">
    <ul>
      <li><a href="list.php">会员列表</a></li>
      <li><a href="addmember.php">新增会员</a></li>
      <li><a href="out.php">注销</a></li>
    </ul>
  </nav>