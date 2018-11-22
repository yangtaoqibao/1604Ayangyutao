<?php

//    非递归
 function binary(&$arr,$low,$top,$target){
        while($low <= $top){
//由于php取商是有小数的，所以向下取整，不过也可不加，数组也会取整
            $mid = floor(($low+$top)/2);
            if($arr[$mid]==$target){
                return $mid;
            }elseif($arr[$mid]<$target){
                $low = $mid+1;                
            }else{
                $top = $mid-1;
            }
        }
        return -1;
    }
$arr = array(1,3,9,23,54);
echo binary($arr, 0, sizeof($arr), 9);



//    递归
function binaryRecursive(&$arr,$low,$top,$target){
        if($low<=$top){
            $mid = floor(($low+$top)/2);
            if($arr[$mid]==$target){
                return $mid;
            }elseif($arr[$mid]<$target){
                return binaryRecursive($arr,$mid+1,$top,$target);
            }else{
                return binaryRecursive($arr,$low,$mid-1,$target);
            }
        }else{
            return -1;
        }
    }
$arr = array(1,3,9,23,54);
echo binaryRecursive($arr, 0, sizeof($arr), 9);
