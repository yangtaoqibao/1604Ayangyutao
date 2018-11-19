<?php
/**
 * Created by PhpStorm.
 * User: 杨雨涛
 * Date: 2018/11/19
 * Time: 9:36
 */
include 'pdo.php';
$conn=new ConnClass();
$sql="select id,title,author from article limit 200";
$data=$conn->selectAll($sql);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="jq.js"></script>
</head>
<body>
<h2>商品详情</h2>
<div>
    <input type="text" name="keyword" id="keyword">
    <button value="搜索" id="search">搜索</button>
    <button value="全部静态化" id="allStatic">全部静态化</button>
    <button value="批量静态化" id="batchStatic">批量静态化</button>
    <div><br>
        <table border="1">
            <thead>
            <tr>
                <th><input type="checkbox" id="chk1"></th>
                <th>序号</th>
                <th>标题</th>
                <th>作者</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($data as $key=>$value):?>
                <tr>
                    <td><input type='checkbox' class='chk1' data-id="<?=$value['id']?>"></td>	
                    <td><?=$key+1?></td>
                    <td><a href="process.php?flag=static&id=<?=$value['id']?>"><?=$value['title'];?></a></td>
                    <td><?=$value['author'];?></td>
                    <td><a href=''>编辑</a> | <a href='del.php'>删除</a> | <a href=''>静态化</a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <a href="">下一页</a><a href="">1,2,3</a>
</body>
</html>
<script>
    $(function(){

        $('#search').click(function(){
            var keyword=$('#keyword').val();
            $.ajax({

                url:'process.php?flag=query',

                type:'get',

                dataType:'json',

                data:{'keyword':keyword},

                success:function(data){
                    var str='';

                    $.each(data,function(i,v){
                        str+="<tr><td><input type='checkbox' class='chk1' data-id="+v['id']+"></td>";
                        str+="<td>"+(i+1)+"</td><td>"+v['title']+"</td><td>"+v['author']+"</td>";
                        str+="<td><a href=''>编辑</a> | <a href=''>删除</a> | <a href=''>静态化</a></td></tr>";
                    });

                    $('tbody').html(str);
                }
            });
        });


        $('#revert').click(function(){

            $(".chk1").each(function () {
                this.checked = !this.checked;
            })
        });


        $('#batchStatic').on('click',function(){
            var str='';

            $('.chk1').each(function(){

                if(this.checked){
                    str+=$(this).attr('data-id')+',';
                }
            });

            $.ajax({
                url:'process.php?flag=batch',
                type:'get',
                dataType:'json',
                data:{'str':str},
                success:function(data){
                    if(data){
                        alert('批量静态化成功!')
                    }
                }
            });
        });


        $('#allStatic').on('click',function(){

            $.ajax({
                url:'process.php?flag=all',
                type:'get',
                dataType:'json',
                success:function(data){
                    if(data){
                        alert('全部静态化成功!')
                    }
                }
            });
        });
    });
</script>
