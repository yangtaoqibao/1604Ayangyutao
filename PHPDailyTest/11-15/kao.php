<?php
/**
 * Created by PhpStorm.
 * User: 杨雨涛
 * Date: 2018/11/15
 * Time: 8:26
 */




    function ch($args,$length){
    $array=[1,2,4,7,11,15];
    $sum=15;
    $low=0;
    $height=$array.$length-1;
    for($i=0;$i<$array.$length;$i++){
        if($array[$low]+$array[$height]==$sum){
            break;
        }else if($array[$low]+$array[$height]>$sum){
            $height--;
        }else{
            $low++;
        }
    }
    var_dump("两个数分别为"+$array[$low]+""+$array[$height]);
    }


function FindNumbersWithSum($data, $length, $sum, $num1, $num2)
{
    $ret = 0;
	if ($data==NULL||$num1==NULL||$num2==NULL)
    {
        $ret = -1;
        return $ret;
    }
	$pBegin = 0;
	$pEnd = $length-1;
	while($pBegin < $pEnd)
    {
        $curSum = $data[$pBegin] + $data[$pEnd];
		if ($curSum == $sum)
        {
            $ret = 1;
            $num1 = $data[$pBegin];
            $num2 = $data[$pEnd];
            break;
        }
        else if($curSum<$sum)
            $pBegin++;
        else
            $pEnd--;
	}
	return $ret."666";
}
echo FindNumbersWithSum([1,2,5,4,8,15], 6, 15, 1, 2);






//function FindNumbersWithSum(self, $array, $tsum):
//        # write code here
//        $low = 0;
//        $high = $len(array) - 1;
//        $list=[];
//        while low<high:
//            res=array[low]+array[high]
//            if res>tsum:
//                high=high-1
//            elif res<tsum:
//                low=low+1
//            elif res==tsum:
//                list.append(array[low])
//                list.append(array[high])
//                return list
//        return list
