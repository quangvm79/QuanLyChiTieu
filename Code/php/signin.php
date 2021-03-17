<?php
session_start();
require_once("lib_db.php");

if(isset($_POST)){
    if($_POST["account"] != "" && $_POST["pass"] != ""){
        $ac = $_POST["account"];
        $p = $_POST["pass"];
        $sql = "insert into nguoidung(taikhoan,matkhau) values (\"$ac\",\"$p\")";
    
        if(exec_update($sql) === 1){
            echo "ok";
        }else{
            echo "false";
        }
    }
}
