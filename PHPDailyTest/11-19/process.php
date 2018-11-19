<?php
/**
 * Created by PhpStorm.
 * User: 杨雨涛
 * Date: 2018/11/19
 * Time: 9:52
 */
include 'pdo.php';
$conn=new ConnClass();
$mem=new Memcache();
$mem->connect('127.0.0.1',11211);


if($_GET['flag']=='query'){

    $keyword=$_GET['keyword'];
    if($mem->get($keyword)){

        $data=$mem->get($keyword);
    }else{
        $sql="select id,title,author from article where title like '%$keyword%'";
        $data=$conn->selectAll($sql);
        $mem->set($keyword,$data,0,0);
    }

    echo json_encode($data);

}


if($_GET['flag']=='batch'){
    $str=$_GET['str'];
    $str=rtrim($str,',');

    $sql="select id,title,author from article where id in ($str)";
    $data=$conn->selectAll($sql);



    foreach($data as $key=>$value){
        ob_start();
        include 'model.html';
        $str=ob_get_contents();
        $filename='html/goods_'.$value['id'].'.html';
        file_put_contents($filename, $str);
        ob_end_clean();
    }


    echo 1;
}


if($_GET['flag']=='all'){

    $sql="select id,title,article from article";
    $data=$conn->selectAll($sql);

    foreach($data as $key=>$value){
        ob_start();	// 开启缓冲区
        include 'model.html';	// 包含模板文件
        $str=ob_get_contents();		// 获取缓冲区中的内容
        $filename='html/goods_'.$value['id'].'.html';	// html/goods_5.html
        file_put_contents($filename, $str);
        ob_end_clean();
    }


    echo 1;
}


if($_GET['flag']=='static'){
    $id=$_GET['id'];
    $filename='html/goods_'.$id.'.html';
    if(is_file($filename) && time()-filemtime($filename)<50){
        // 文件存在且未过期
        echo 'jingtai';
        include $filename;
    }else{
        echo 'dongtai';



        $sql="select id,title,author from article where id='$id'";
        $data=$conn->selectOne($sql);
        $value['title']=$data['title'];
        $value['author']=$data['author'];

        ob_start();	// 开启缓冲区
        include 'model.html';	// 包含模板文件
        $str=ob_get_contents();		// 获取缓冲区中的内容
        file_put_contents($filename, $str);
        ob_end_flush();
    }
}


