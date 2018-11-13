<?php

//第一种方式
function sum($n){
    $ans=$n;
    $ans && ($ans += sum($n-1));
//    分析：&& 运算，当前面为假时，后面自动不算。
    return $ans;
}
echo sum(5);
echo "<hr>";

//第二种方式
function sum1($n) {
    $sum = $n;
      //boolean b = (n > 0) && (sum += sum_solution1(n-1)) > 0;
      $b = ($n == 0) || ($sum += sum1($n - 1)) > 0;
      return $sum;
}
echo sum1(4);
echo "<hr>";

//第三种方式
function sum2($n) {
    $ret = 0;
      $d = ($n == 0) || ($ret = sum2($n - 1)) > 0;
      return $n + $ret;
}
echo sum2(5);


//
//function sumn($n) {
//              $r = 0;
//          $n && ($r = (sumn($n - 1) + $n));
//          return $r;
//      }
//
//      $t = new Test();
//      echo $t->sum(5) . "<br>";
//      echo sumn(5);
