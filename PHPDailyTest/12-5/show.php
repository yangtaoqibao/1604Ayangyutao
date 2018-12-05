<?php  


$pdo=new PDO('mysql:host=127.0.0.1;dbname=11-23yuekao','root','root');
$sql="select * from PhoneGoods";
$data=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
// var_dump($res);
// return $data

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<center style="margin-top: 100px">
		<input type="text" name="search" style="width: 450px;"><button style="background-color: red;color: white">搜索</button>
		<p><a href="" style="color: red">清仓处理</a> 小米电视 酷爽冰饮 惊天满减 寒期阅读 华为免费 机票20元</p>
	<table border="1px" width="600px">
		<tr>
			<th>id</th>
			<th>商品名称</th>
			<th>商品价格(元)</th>
			<th>商品简介</th>
			<th>商家地址</th>
			<th>星级</th>
		</tr>
		<?php foreach ($data as $key => $value) :?>
			<tr>
				<td align="center"><?=$value['id']?></td>
				<td align="center"><?=$value['g_name']?></td>
				<td align="center">￥<?=$value['g_price']?></td>
				<td align="center"><?=$value['g_content']?></td>
				<td align="center"><?=$value['g_address']?></td>
				<td align="center"><?=$value['g_xing']?></td>
			</tr>
		<?php endforeach;?>
	</table>
	</center>
</body>
</html>