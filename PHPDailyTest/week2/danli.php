<?php

 header("content-type:text/html;charset=utf-8");
	// final修饰类->不能被继承
	final class single{
		// 定义一个私有属性，在构造方法中显示
		private $random;
		// 定义一个静态私有属性，为的是实例化后赋值给obj
		static private $obj;
		// 构造方法中random判断实例化的次数，并可进行比较
		private function __construct(){
			return $this->random=rand(1,999999999);
		}
		static public function getins(){
			// instanceof判断对象是否实例化
			if(self::$obj instanceof single)
			{
				return self::$obj;
			}else{
				return self::$obj = new single();
			}
		}
		// final类防止被克隆后实例化类被重写
		// public function __clone(){
		// 	echo "单例模式失败";
		// }
		private function __clone(){
			echo "单例模式失败";
		}
	}
	// 调用静态方法getins()验证实例化次数
	$sing = single::getins();
	$sings= single::getins();
	var_dump($sing);
	echo "
";
	var_dump($sings);
	echo "
";
	// 检测是否只实例化过一次(验证该类只有一个实例);
	if($sing == $sings)
	{
		echo "单例模式成功";
	}else{
		echo "单例模式失败";
	}

