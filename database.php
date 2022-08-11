<?php
class database {
    
    private $host;
    private $username;
    private $password;
    private $database;
    
    function __construct($host,$username,$password,$database) {
        ;
        $this->host         =   $host;
        $this->username     =   $username;
        $this->password     =   $password;
        $this->database     =   $database;
    }
    
    function connect(){
        return mysqli_connect($this->host,  $this->username,  $this->password,  $this->database);
    }
    
    function get($table){
        $data = mysqli_query($this->connect(), "select * from $table");
        $records = array();
        while($rows = mysqli_fetch_array($data)){
            $records[] = $rows;
        }
        
        return $records;
    }
    
    function insert($table,$data){
        $join = "";
        foreach ($data as $key=>$value){
            $join .= $key."='$value',";
        }
        
        $newData = substr($join, 0,-1);
        $insert = mysqli_query($this->connect(), "insert into $table SET $newData");
        if($insert){
            return 'Insert Datab Berhasil';
        }else{
            return 'Insert Data Gagal';
        }
    }
    
    function update($table,$data,$pk,$id){
        $join = "";
        foreach ($data as $key=>$value){
            $join .= $key."='$value',";
        }
        
        $newData = substr($join, 0,-1);
        $insert = mysqli_query($this->connect(), "update $table SET $newData where $pk='$id'");
        if($insert){
            return 'Update Data Berhasil';
        }else{
            return 'Update Data Gagal';
        }
    }
    
    function delete($table,$pk,$id){
        mysqli_query($this->connect(), "delete from $table where $pk='$id'");
    }
    
    
}
