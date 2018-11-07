<?php

//第一种方法
function chou($num){
  for($i = 2;;$i*=1){
    if(is_int($num/2)){
      $num = $num/2;
      echo $num;
    }else if($num == 1){
      return '是丑数';
    }else{
      for($j = 3;;$j*=1){
        if(is_int($num/$j)){
          $num = $num/$j;
        }else if($num == 1){
          return '是丑数';
        }else{
          for($o = 5;;$o*=1){
            if(is_int($num/$o)){
              $num = $num/$o;
            }else if($num == 1){
              return '是丑数';
            }else{
              return '您输入的不是丑数';
            }
          }
        }
      }
    }

  }
}

echo chou(16);
echo "<br><br><br><br>";

//第二种方法
function ch($num){
	$arr=[2,3,5];
	foreach ($arr as $key => $val) {
		$o=0;
		for($i=$val;$o==0;$i*=1){
			if(is_int($num/$i)){
				$num=$num/$i;
			}else if($num==1){
				return '是丑数';
			}else{
				$o=1;
			}
		}
	}
	return '不是丑数';
}
echo ch(12);















// $number=0;
// function ab($a,$b){
// 	$number
// }

// echo ugly(25);
// function ugly($ugly)
// {
//     if($ugly==1)return 1;
//     if(getUgly($ugly)==false)return "不是丑数";
//     $j = 1;
//     for($i=2;;$i++)
//     {
//         $a = getUgly($i);
//         if($a){
//             $j++;
//         }
//         if($i==$ugly){
//             return $j;
//         }
//     }
// }
// function getUgly($ugly)
// {
//    if($ugly<=0) return false;
//    while($ugly!=1)
//    {
//        while($ugly%2==0)
//        {
//            $ugly = $ugly/2;
//        }
//        while($ugly%3==0){
//            $ugly = $ugly/3;
//        }
//        while($ugly%5==0){
//            $ugly = $ugly/5;
//        }
//        return $ugly==1?true:false;
//    }
// }














  ?>