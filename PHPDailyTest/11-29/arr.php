<?php
/**
 * Created by PhpStorm.
 * User: 杨雨涛
 * Date: 2018/11/29
 * Time: 8:15
 */
//输出所有值 values
$arr=array('sex'=>'nan','age'=>'18');
print_r(array_values($arr));
echo "<br>";
//输出所有键 keys
$arr=array('sex'=>'nv','age'=>'22');
print_r(array_keys($arr));echo "<br>";
//合并多个数组
$a=array('red','blue');
$b=array('yellow','oringe');
print_r(array_merge($a,$b));echo "<br>";
//把数组填补到指定长度
$a=array("red","green");
print_r(array_pad($a,5,"blue"));
echo "<br>";
//删除数组最后一个元素
$a=array("red","green","blue");
array_pop($a);
print_r($a);
echo "<br>";
//在数组末尾添加新元素
$a=array("red");
array_push($a,"blue","yellow");
print_r($a);
echo "<br>";
//在数组首位添加新元素
$a=array("red");
array_unshift($a,"bbb");
print_r($a);
echo "<br>";
//在数组首位删除元素
$a=array("red","asd","zxc");
array_shift($a);
print_r($a);
echo "<br>";

//计算数组的长度
$a=array("ree","fasdf","dff");
echo count($a);
echo "<br>";
echo dirname(__FILE__);





