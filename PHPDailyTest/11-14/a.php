<?php
/**
 * Created by PhpStorm.
 * User: 杨雨涛
 * Date: 2018/11/14
 * Time: 8:27
 */

//第一种方法  迭代方法
function add($num1,$num2){
    if($num2==0){
        return $num1;
    }
    if($num1==0){
        return $num2;
    }
    return add(($num1&$num2)<<1,$num1^$num2);
}
echo add(1,3);
echo "<br>";



//第二种方法  非迭代方法


/*
首先看十进制是如何做的： 5+7=12，三步走
第一步：相加各位的值，不算进位，得到2。
第二步：计算进位值，得到10. 如果这一步的进位值为0，那么第一步得到的值就是最终结果。
第三步：重复上述两步，只是相加的值变成上述两步的得到的结果2和10，得到12。
同样我们可以用三步走的方式计算二进制值相加： 5-101，7-111
第一步：相加各位的值，不算进位，得到010，二进制每位相加就相当于各位做异或操作，101^111。
第二步：计算进位值，得到1010，相当于各位做与操作得到101，再向左移一位得到1010，(101&111)<<1。
第三步重复上述两步， 各位相加 010^1010=1000，进位值为100=(010&1010)<<1。
继续重复上述两步：1000^100 = 1100，进位值为0，跳出循环，1100为最终结果。
*/
function ass($num1,$num2){
    while($num2!=0){
        $sum=$num1^$num2;
        $num2=($num1&$num2)<<1;
        $num1=$sum;
    }
    return $num1;
}
echo ass(1000,100);
echo "<br>";





  function abc($x,$y){
        $sum=0;
        $carry=0;
        while(true){
            $sum=$x^$y;
            $carry=($x&$y) << 1;
            $y=$carry;
            $x=$sum;
            if($y==0){
                break;
            }
        }
        return $sum;
    }
echo abc(3,6);
echo "<br>";




function q($num1,$num2){
    $sum=0;
    $mark=0;
    do{
        $sum=$num1^$num2;
        $mark=($num1&$num2)<<1;
        $num1=$sum;
        $num2=$mark;
    }while($num2!=0);
    return $num1;
}
echo q(3,8);
