<?php



//第一种方式
function nu($n,$m) {
    $number = 0;
    for($i=$n;$i<=$m;$i++) {
        $a = substr_count((string)$i,"1");
        if($a!==false) {
            $number = $number+$a;
        }
        //echo $i."\n";
    }
    echo $number."次数";echo "<br>";
}
nu(1,333);


//第二次方式
function one($a,$b)
{
    $c = range($a,$b);
    $c = implode($c);
    // echo $c;
    $arr = str_split($c);
    return array_count_values($arr)[1];
}
echo one(1,333);echo "<br>";

// function one($a,$b){
// 	$q=range($a)
// }

//第三次方式
function two($a,$b){
	$number=0;
	for($i=$a;$i<=$b;$i++){
		$i=(string)$i;
		for($j=0;$j<strlen($i);$j++){
			if($i[$j]==1){
				$number++;
			}
		}
	}
	echo $number;
}

echo two(1,13);




// $sum=0;
// for($i=1;$i<=100;$i++){
// 	$sum+=$i;
// }
// echo $sum;

// $sum=0;
// for($i=1;$i<=100;$i++){
// 	$sum+=$i;
// }
// echo $sum;
// echo "<br>";

// class Sum{
// 	public function A(){
// 		return "1-13的整数";
// 	}
// 	public function B(){
// 		return "1,10,11,12,13";
// 	}
// }
// $sum=new Sum();
// echo $sum->A();echo "<br>";echo "<br>";
// echo $sum->B();


// absturct class aaa{
// 	public function aa(){

// 	}
// }
// class bbb extends aaa{

// }
?>