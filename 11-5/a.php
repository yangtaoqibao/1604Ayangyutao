<?php

// 第一种方法
$sum=0;
for($i=1;$i<=100;$i++){
	$sum+=$i;
}
echo $sum;
echo "<br>";

//第二种方法
$sum=$i=0;
while($i<=100){
	$sum+=($i++);
}
echo $sum;
echo "<br>";

//第三种方法
echo array_sum(range(1,100));
echo "<br>";
//第四种方法
function get_sum($n){
	return $n==1?1:$n+get_sum($n-1);
}
echo get_sum(100);
echo "<br>";



// function factorial($n){

//     $j=1;

//     for($i=1;$i<=$n;$i++){

//         $j*=$i;

//     }

//     return $j;

// }
// function getSum($n){

//     $sum=0;

//     for($i=1;$i<=$n;$i++){

//         $sum+=factorial($i);

//     }

// }

// $data=getSum(100);
// echo $data;


//判断是否为数字回文
 function ishuiwen($str){
  $len=strlen($str);
  $l=1;
  $k=intval($len/2)+1;
   for($j=0;$j<$k;$j++){
    if (substr($str,$j,1)!=substr($str,$len-$j-1,1))
     {
  $l=0;
  break;
   }
 }
 if ($l==1)
 {
 return 1;
 }
 else
 {
 return -1;
  }
 }
 $str=4554;
 echo ishuiwen($str);
echo "<br>";




//实现n的阶乘
 function demo($a)  
       {  
           if($a > 1)  
       {  
          $r=$a*demo($a-1);  
       }else  
       {  
          $r=$a;  
       }  
  
       return $r;  
       }  
         
       $a=8;  
       echo $a."的阶乘的值".demo($a);  
       echo "<br>";

function bigNumMulty($num1, $num2){
        $len1 = strlen($num1);
        $len2 = strlen($num2);
        $zeroNum1 = 0;
        $result = '0';
        for($i = $len1 - 1; $i >= 0; $i--){
            $zeroNum2 = 0;
            for($j = $len2 - 1; $j >= 0; $j--){
                $data = stringMulty($num1[$i], $num2[$j]);
                $data .= addZero($zeroNum1 + $zeroNum2);
                $result = bigNumAdd($result, $data);
                $zeroNum2++;
            }
            $zeroNum1++;
        }
        return $result;
    }



//定义一个Person类，有姓名、年龄属性
class Person{
	public function getName(){
		return "杨雨涛";
	}
	public function getAge(){
		return "19岁";
	}
}
$person=new Person();
echo "该同学的姓名为：".$person->getName();echo "<br>";
echo "该同学的年龄为：".$person->getAge();echo "<br>";



//定义一个Walk接口类，有行走的方法
interface Animal{
	public function walk();
 
	public function speak();
}


// require_once "animal.php";
class Dog implements Animal{
	public function walk(){
		echo "dogs can walk";
	}
 
	public function speak(){
		echo "dogs can speak";
	}
}



class monkey{
	public static function is_int($init){
		$sum=1;
		$chu=1;
		for($i=$sum; ; $i++){
			$j=$init/$chu;
			if($j>=1 && $j<10){
				return $i."位数";
				break;
			}
			$chu=$chu*10;
		}
	}
}
echo monkey::is_int(21212);



// class Person{ 


// }

// class Student extends Person {


// }

// class Student{
// 	$a=new A1();
// 	$b=new A2();
// 	$c=new A3();
// 	$d=new A4();
// 	$e=new A5();
// 	$f=new A6();
// 	$g=new A7();
// 	$h=new A8();
// }

?>