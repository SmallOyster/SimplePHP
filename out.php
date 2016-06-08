<?php
/*
* Author:  @SmallOyster
* 文件用途: 会员系统-注销
* 教学方向: 摧毁所有Session|用PHP执行JS代码
* 使用方式: 直接访问
*/

//先启用Session
session_start();

//然后摧毁所有Session
session_destroy();

//PHP花式执行JS代码
//echo "<script>...</script>"
echo "<script>alert('您已登出系统！');window.location.href='login.php';</script>";

?>