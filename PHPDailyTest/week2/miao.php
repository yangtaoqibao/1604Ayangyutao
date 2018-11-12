<?php
?>

<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 
<title>无标题文档</title>
<style>
div{
 
 display:inline;
 }
</style>
<script type="text/javascript">
var d = new Date();
//document.write(d.getTime()+"显示据当前的毫秒<br/>"  );
 

var old = Date.parse("Sep  10, 2012");
//document.write(old); 
var a;    
a=(Date.parse("Sep 10, 2012")-d.getTime());
//alert(a);
function  jishi(){

yearTime=a/1000/60/60/24/30/12;
//alert(yearTime);
//间隔的年数
b=Math.floor(a/1000/60/60/24/30/12);
//取得那个整的数值
 
//document.write(b+"年");
  
monthTime=(yearTime-b)*12;
//计算还有多少个月

//alert(monthTime);
c=Math.floor(monthTime);
//document.write(c+"月");
//alert(c);
dayTime=(monthTime-c)*30;
//alert(dayTime);
//计算还有多少天
d=Math.floor(dayTime);
//document.write(d+"日");
//alert(d);
hourTime=(dayTime-d)*24;
//alert(hourTime);
h=Math.floor(hourTime);
//document.write(h+"小时");
//alert(h);
minuteTime=(hourTime-h)*60;
//alert(minuteTime);
m=Math.floor(minuteTime);
//alert(m);
//document.write(m+"分钟");
secondTime=(minuteTime-m)*60;
//alert(secondTime);

s=Math.floor(secondTime);
//document.write(s+"秒");
document.getElementById("monthdiv").innerHTML=c;
document.getElementById("daydiv").innerHTML=d;
document.getElementById("hourdiv").innerHTML=h;
document.getElementById("mdiv").innerHTML=m;
document.getElementById("sdiv").innerHTML=s;
setTimeout("jishi()",1000);
}

</script>
 
</head>

<body onload="jishi()">
倒计时：据2012年9月10日还有
<div id="monthdiv" style="background-color:#3F9;width:10px;height:4px"></div>月
<div id="daydiv" style="background-color:#0F0;width:10px;height:4px"></div>天 
<div id="hourdiv" style="background-color:#F00;width:5px;height:4px"></div>小时
<div id="mdiv" style="background-color:#6F9;width:5px;height:4px"></div>分钟
<div id="sdiv" style="background-color:#CF9;width:5px;height:4px"></div>秒

 

</body>
</html>
