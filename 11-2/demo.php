<?php
$a="have you ever gone shopping and";

// $a="fasffa7fadf5fsd4dada1dadsd";
function calFirst($a){
	$len=strlen($a);
	$arr=[];
	for ($i=0; $i < $len; $i++) { 
		if(isset($arr[$a[$i]])){
			$arr[$a[$i]]++;
		}else{
			$arr[$a[$i]]=1;
		}
		if($arr[$a[$i]]>=3){
			return $a[$i];
		}
	}
	return $res;
}
print_r(calFirst($a));die;





















// $string = "Have you ever gone shopping and";
//     function  calFirst($string)
//     {
//         $len = strlen($string);
//         $arr = [];
//         for($i=0;$i<$len;$i++){
//             if(isset($arr[$string[$i]]))
//             {
//                 $arr[$string[$i]]++;
//             }
//             else
//             {
//                 $arr[$string[$i]]= 1;
//             }
//             if( $arr[$string[$i]] >= 3)
//             {
//                 return $string[$i];
//             }
//         }
//         return $res;
//     }
// print_r(calFirst($string));




























?>