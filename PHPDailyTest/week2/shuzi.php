<?php
header("content-type: text/html; charset=utf-8"); 

//a b c d 分别代表4个数字 num代表组成的个数和
$a=0;$b=0;$c=0;$num=0;
//for 循环先判断a  a有4个 a是递增的
for($a=1;$a<5;$a++){
	//for a开头之后再循环判断b也有4个 b 也是递增的
	for($b=1;$b<5;$b++){
		//for b里面在套个c c循环判断4个 c也是递增的
		for($c=1;$c<5;$c++){
			//if 判断 他们当中不能有重复的组合 
				if(($a!=$b) && ($a!=$c) && ($c!=$b)==1){
					//$num++   是计算所有组合数量的  依次递增
					$num++;
					//printf 打印出 所有的三位数组合
					printf("%d%d%d\n",$a,$b,$c);
				}
			}
		}
	}
	//再次打印出 所有组合的数量 用$num代表
printf("一共有=%d\n",$num);
echo "<br><br>";


	$i = 0;
	$j = 0;
	$k = 0;
	$count = 0;
	for ($i = 1; $i < 5; $i++)
	{
		for ($j = 1; $j < 5; $j++)
		{
			for ($k = 1; $k < 5; $k++)
			{
				if (($i != $j) && ($i != $k) && ($j != $k) == 1)
				{
					printf("%d%d%d\n", $i, $j, $k);
					$count++;//记录有多少个三位数
				}
			}
		}
	}
	printf("%d\n", $count);
	
