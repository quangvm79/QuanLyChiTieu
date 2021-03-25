<?php
session_start();

require_once("../dbConnect/lib_db.php");

$sqlID = "select ID from nguoidung where TaiKhoan = \"".$_SESSION["account"]."\"";
$tenVi = $_POST["tenVi"];
$soTien = $_POST["soTien"];




$dt = select_one($sqlID);

if($dt != null){
    $id = $dt["ID"];


    $sql = "select * from vi where TenVi = \"$tenVi\" and IDtk = $id";
    $rs = select_one($sql);
    
    if(is_array($rs)){
        echo "error1";
        die();
    }

    $sql = "insert into vi(TenVi,SoTien,IDtk) values(\"$tenVi\",$soTien,$id)";

    $rs = exec_update($sql);
    if($rs == 1){
        echo "ok";
    }
    else{
        echo "error";
    }
}









?>