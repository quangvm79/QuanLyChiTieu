<?php
session_start();
require_once("../dbConnect/lib_db.php");

if(isset($_POST["account"]) && isset($_POST["pass"])){
    $ac = $_POST["account"];
    $pw = $_POST["pass"];
    $un = $_POST["user"];
    $em = $_POST["email"];

    $sql = "insert into nguoidung(TaiKhoan,MatKhau,TenNguoiDung,Email) values(\"ac\",\"pw\",\"un\",\"em\")";
    $data = exec_update($sql);

    if($data == 1){
        $rs = ["success"=>"true"];
        $_SESSION["account"] = $_POST["account"];
        $_SESSION["userName"] = $un;
    } 
    else
        $rs = ["success"=>"false"];
    echo json_encode($rs);
}








?>