<?php


// function xiao($n,$m){
// 	$diyi=m;
// 	$m=m-1;
// 	for($i=0;$i<=$m;$i++){
// 		if($j=$n-1){
// 			for($j=0;$j<=($i-1);$j++){
// 				$number++;
// 			}
// 		}
// 	}
// 	return $number;
// }
// echo xiao(32,11);


// 问题---   有个游戏是这样的:首先,让小朋友们围成一个大圈。然后,他随机指定一个数m,让编号为0的小朋友开始报数。每次喊到m-1的那个小朋友要出列并且不再回到圈中,从他的下一个小朋友开始,继续0…m-1报数….这样下去….直到剩下最后一个小朋友,求最后一个小朋友的编号 
// (注：小朋友的编号是从0到n-1)

// 举个例子，现在有6个人，编号从0到5，每次删除第3个人。 
// 第一次删除2，还剩 0,1,3,4,5，然后从3开始继续报数和删除的过程 
// 第二次删除5，还剩 0,1,3,4, 然后从0开始继续 
// 第三次删除3，还剩 0,1,4, 然后从4开始继续 
// 第四次删除1，还剩 0,4, 然后从4开始继续 
// 第五次删除4，还剩 0，结束


//第一种方法
function cho($n,$m)
{
	if ($n < 1 || $m < 1) {
		return -1;
	}
	$sum = 0;
	for ($i = 2; $i <= $n; $i++) {
		$sum = ($sum + $m) % $i;
	}
	return $sum;
}
echo cho(45,3);
echo "<br><br>";


//第二种方法
function yy($n,$m) {
        if($n==0)
            return -1;
        if($n==1)
            return 0;
        else
            return (yy($n-1,$m)+$m)%$n;
    }
echo yy(6,3);echo "<br><br>";

//第三个
function sixOne($n,$m)
{
    echo "<pre>";
    $a = 0;
    $arr = range(0,$n-1);
    while(true){
        if(count($arr)==1){
            return array_keys($arr)[0];
        }
        foreach($arr as $key=>$val){
            $a++;
            if($a==$m-1){
                unset($arr[$key]);
                $a=0;
            }
        }
    }
}
echo sixOne(6,3);
echo "<br><br>";









// 第一个
$test = 'aaaaaa';
$abc = & $test;
unset($test);
echo $abc;
echo "<br><br>";

//6.求两个日期的差数，例如2007-2-5 ~ 2007-3-6 的日期差数。（5分） A-01
class Dtime{
    function get_days($date1, $date2)    {
        $time1 = strtotime($date1);
        $time2 = strtotime($date2);
        return ($time2-$time1)/86400;
    }
}
date_default_timezone_set('PRC') ;
$Dtime = new Dtime;
echo $Dtime->get_days('2007-2-5', '2007-2-16');
echo "<br><br>";

//第二个
//字符串“open_door” 转换成 “OpenDoor”、”make_by_id” 转换成 ”MakeById”。
$name="open_door";

$name="make_by_id";
$arr=explode("_", $name);
array_walk($arr,function(&$v){$v=ucwords($v);} );

$y= implode("", $arr);
print_r($y);
echo "<br><br>";



//将1234567890转换成1,234,567,890 每3位用逗号隔开的形式。  
    // $str1 = "1234567890000";  
    // preg_match('/^(/d{1,3})((/d{3})+)$/',$str1,$out);  
    // echo '<pre>';  
    // print_r($out);  
    // echo '</pre>';  
    // $new_str = preg_replace('/^(/d{1,3})((/d{3})+)$/','$1,$2',$str1);  
    // print $new_str."/n";  
    // $new_str = preg_replace('/(?<=/d{3})(/d{3})/',',$1',$new_str);  
    // print $new_str."/n";  
    // exit;


//第三个
// 请写一个函数将1234567890转换成1,234,567,890 每3位用逗号隔开的形式。（
 function str($str){     //先反转字符串
    $new_str=strrev($str);
    //在用chunk_split函数将字符串用“ , ” 分割成小块
    $new_str= chunk_split($new_str,3,',');
     //去掉右边的逗号，返回出去
    return strrev(rtrim($new_str,','));
 }
echo str(123456789);








?>