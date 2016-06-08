<?php
/*
* Author:  @SmallOyster
* 文件用途: 会员系统-常用自定义函数
* 教学方向: function创建.使用.返回值|Switch使用
* 使用方式: require_once
*/

//自定义函数
function ColorSex($sexid){
  switch ($sexid){
    case 0:
      $sex="未知性别";break;
    case 1:
      $sex="<font color='aqua'>男性</font>";break;
    case 2:
      $sex="<font color='red'>女性</font>";break;
    default:
      $sex="<font color='green'>未定义</font>";break;
  }
  return $sex;
}

?>