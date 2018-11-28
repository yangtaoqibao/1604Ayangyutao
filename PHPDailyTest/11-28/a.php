<?php?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<style>
	.a{
		width: 200px;
		height: 100px
		;background-color: red;
		animation:myfirst 2s;
	}
		@keyframes myfirst
			{	
		0% {background:red;}
		25%{background:yellow;}
		50%{background:blue;}
		70%{background:green;}
		100% {background:grey;}
		}

</style>
<body>
	<div class="a" style="">MyfirstFlash</div>

</body>
</html>
