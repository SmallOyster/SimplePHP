<?php
/*
* Author:  @SmallOyster
* 文件用途: 数据库连接配置文件
* 教学方向: 连接数据库|使用部分PHP内置函数
* 使用方式：require_once
*/

  //此处使用Mysqli连接，在之后的开发也必须使用Mysqli。
  //设定变量conn，在之后的开发只需引入此文件，并使用$conn连接即可。
  $conn=@mysqli_connect("localhost","root","","simplephp");

  //PHP内置函数（Errno为错误码）
  if(mysqli_connect_errno($conn)){
    die("无法连接数据库，错误代码:".mysqli_connect_errno($conn));
  }

  //设定为UTF-8
  mysqli_set_charset($conn,"utf8");
?>
