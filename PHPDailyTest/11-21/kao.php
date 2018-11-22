<?php


/**
 *  插入数据返回地址
 *
 *  @param arr   数组
 *  @param len   数组长度
 *  @param value 要插入的数
 *
 *  @return <#return value description#>
 */
function insertItemLoc($arr,$len, $value){
    $low = 0;$high = $len-1;$mid;
    while ($low <= $high) {
        $mid = ($low + $high)/2;
        if ($value > $arr[$mid]) {
            $low = $mid+1;
        }else if ($value < $arr[$mid]){
            $high = $mid - 1;
        }else{
            return $mid+1;
        }
    }
    return $low;
}
echo insertItemLoc([1,2,3,4,5],5,4);




function searchItem($arr,$len,$value){
    $low = 0;$high = $len-1;$mid;
    while ($low <= $high) {
        $mid = ($low + $high)/2;
        if ($value > $arr[$mid]) {
            $low = $mid+1;
        }else if ($value < $arr[$mid]){
            $high = $mid - 1;
        }else{
            return $mid;
        }
    }
    return -1;
}

// function main($argc, $argv) {
//     //数组必须是有序数组
//     $a[10] = {1,2,31,45,52,62,73,86,90,100};
//     //查找86元素
//     $l = searchItem($a,10,86);
//     printf("loc = %d\n",$l);
//     return 0;
// }

echo searchItem([1,2,3,4,5],5,4);


function FindByTwo($nums,$numsSize,$number)
 {
     $mid;     $left=0;
     $right=$numsSize-1;
     
 
     while($left!=$right)
     {
         $mid=($left+$right)/2;    
         if($number==$nums[$mid])
         {
             return true;
         }
         else
         {
             if($number>$nums[$mid])
             {
                 $left=$mid+1;
             }
            if($number<$nums[$mid])
            {
                $right=$mid-1;
            }
        }
    } 

    return false;
}
echo FindByTwo([1,2,3,4,5],5,4);


function main()
{
	$a = [11, 22, 33, 44, 55, 66, 77, 88, 99]  ;
	$size = sizeof($a) / sizeof($a[0]);
	$goal = 44;
	$index = binsearch($a, $size, $goal);
	printf("%d\n", index);
	system("pause");
	return 0;
}



 // $a[15] = { 15, 14, 13, 12, 11, 10, 9, 8, 7, 6, 5, 4, 3, 2, 1 };
	// $l = 0, $h = 14, x, m;
	// printf("输入数字：");
	// scanf("%d", &x);
	// while ($l<$h)
	// {
	// 	$m = ($l + $h) / 2;
	// 	if ($x == $a[$m]) break;
	// 	if ($x>$a[$m])
	// 		$h = $m;
	// 	else
	// 		$l = $m;
	// 	if (($l == $h) && $x != $a[$h]) {
	// 		printf("-1");
	// 		return 0;
	// 	}
	// }
	// printf("是第%d个元素", $m + 1);
	// return 0;
