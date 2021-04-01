<?php
require_once("../dbConnect/lib_db.php");

$idvi = $_POST["idvi"];
$iddm = $_POST["iddm"];
$start = $_POST["start"];
$end = $_POST["end"];

$sql = "select sum(thuchi.SoTien) as TongTien from thuchi where thuchi.IDdm = $iddm and thuchi.IDvi = $idvi and thuchi.ThoiGian >= \"$start\" and thuchi.ThoiGian <= \"$end\" and thuchi.LoaiChiTieu = 1; ";


$rs = select_list($sql);

echo json_encode($rs);
?>