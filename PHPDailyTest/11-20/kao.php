<?php
/**
 * Created by PhpStorm.
 * User: 杨雨涛
 * Date: 2018/11/20
 * Time: 8:26
 */



function numberof1($n){
    $count=0;
    while($n){
        if($n & 1) $count++;
        $n=$n>>1;
    }
    return $count;
}

echo numberof1(9);
echo "<br>";





function cofd($c){
    $result=0;
    while($c!=0){
        $c &=($c-1);
        $result++;
    }
    return $result;
}
echo cofd(9);
echo "<br>";




//思路：把一个整数减去1，再和原整数做与运算，会把该整数的最右边的1变成0。那么一个整数的二进制表示中有多少个1，就可以进行多少次这样的操作。
//举个例子：1100，它的第二位是从最右边数起的一个1.减去1后，第二位变成0，它后面的两位0变成1，而前面的1保持不变，因此得到的结果为1011.

function numof1($b){

    $count=0;
    while($b){
        ++$count;
        $b=($b-1) & $b;
    }
    return $count;
}
echo numof1(9);








