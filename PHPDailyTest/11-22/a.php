<?php
/**
 * Created by PhpStorm.
 * User: 杨雨涛
 * Date: 2018/11/22
 * Time: 8:33
 */



//$a[2][100];//堆栈，用来定位
//function main()
//{
//    //k为堆栈指针
//$i=0;$j=0;$m=M;$n=N;$k=0;$num=0;$f1=0;$f2=0;$flag=0;
//	while($k!=-1)//直到堆栈中没有数，跳出循环
//    {
//        if($flag==0)
//        {
//            if($j<$n-1)
//            {
//                $j++;
//                $f2=1;
//            }
//            else if($i<$m-1)
//            {
//                $i++;
//                $f1=1;
//            }
//            if(($j<$n-1)&&($f1==1))
//            {
//                $a[0][$k]=$i-1;
//                $a[1][$k]=$j+1;
//                if($i==1&&$j==1)
//                    $f1=0;
//                $k++;
//            }
//            if(($i<$m-1)&&($f2==1))
//            {
//                $a[0][$k]=$i+1;
//                $a[1][$k]=$j-1;
//                $f2=0;
//                $k++;
//            }
//            $f2=$f1=0;
//        }
//        else
//        {
//            $i=$a[0][$k];
//            $j=$a[1][$k];
//            $flag=0;
//        }
//        if($j==$n-1&&$i==$m-1)//到达终点，出栈
//        {
//            $num++;
//            $k--;
//            $flag=1;
//        }
//    }
//	printf("%d\n",$num);
//}


function addd($x, $y)
{
    if ($x == 0 && $y == 1) return 1;
    if ($x == 1 && $y == 0) return 1;
    if ($x == 0) return addd($x, $y - 1);
	if ($y == 0) return addd($x - 1, $y);
	else return addd($x - 1, $y) + addd($x, $y - 1);
}
function main()
{
$x=0; $y=0;
	$sum=0;
	while (cin >> $x >> $y)
    {
        $sum = 0;
        $sum += addd($x, $y);
        cout << $sum << endl;
    }
	return 0;
}

echo addd(4,5);


