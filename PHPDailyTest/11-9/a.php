<?php

function Yang($a,$b){
        return ($a.''.$b) > ($b.''.$a);
}

$arr=array(12,45,142);

//自定义排序
// 数组排序，使用自定义排序规则是 a.b>b.a   a 和 b互换位置

function Number($numbers)
{
        usort($numbers,'Yang');

        return (implode('',$numbers));
}
$result=Number($arr);
echo "第一种:".$result;
echo "<br><br>";
 

//冒泡方法

// 1.循环外层 i
// 2.内层循环 j，判断条件是j=i+1;j<arr.length;j++
// 3.内层调换 arr[i].arr[j] > arr[j].arr[i] 调换位置
function Number2($arr)
{
        $length=count($arr);

        for($i=0;$i<$length;$i++){

                for($j=$i+1;$j<$length;$j++){

                        if(($arr[$i].''.$arr[$j])>($arr[$j].''.$arr[$i])){
                                $temp=$arr[$i];

                                $arr[$i]=$arr[$j];

                                $arr[$j]=$temp;
                        }   
                }   
        }   
        return (implode('',$arr));
}

$result=Number2($arr);

echo "第二种:".$result;





// 122  21  45 325 

// 3251224521


?>