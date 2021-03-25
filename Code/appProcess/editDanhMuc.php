<?php
session_start();
require_once("../dbConnect/lib_db.php");

$sqlID = "select ID from nguoidung where TaiKhoan = \"".$_SESSION["account"]."\"";

$dt = select_one($sqlID);

$idtk = $dt["ID"];


$id = $_POST["id"];
$newName = $_POST["newName"];

$sql = "update danhmuc set TenDanhMuc = \"$newName\" where ID = $id and IDtk = $idtk";

$rs = exec_update($sql);

if($rs == 1)
    echo "ok";
?>