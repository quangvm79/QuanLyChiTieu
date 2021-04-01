<?php
session_start();
require_once("../dbConnect/lib_db.php");

$tenHm = $_POST["tenHm"];
$soTien = $_POST["soTien"];
$idVi = $_POST["idVi"];
$idDm = $_POST["idDm"];
$lapLai = $_POST["lapLai"];

$sqlCheck = "select * from hanmucchitieu where IDvi = $idVi and IDdm = $idDm";

$rs = select_one($sqlCheck);
if($rs != null){
    echo "error1";
    die();
}

$sql = "INSERT INTO hanmucchitieu(TenHanMuc, SoTien, IDvi, IDdm, LapLai) values(\"$tenHm\",$soTien,$idVi,$idDm,\"$lapLai\")";

$dt = exec_update($sql);
echo $dt;


?>