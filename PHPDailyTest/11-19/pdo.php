<?php

class ConnClass{
    private $pdo;

    public function __construct(){
        $this->pdo=new PDO('mysql:host=127.0.0.1;dbname=7-2','root','root');
    }

    public function insert($sql){
        $this->pdo->exec($sql);
    }

    public function delete($sql){
        $this->pdo->exec($sql);
    }


    public function update($sql){
        $this->pdo->exec($sql);
    }


    public function selectOne($sql){
        $data=$this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
        return $data;
    }


    public function selectAll($sql){
        $data=$this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
}