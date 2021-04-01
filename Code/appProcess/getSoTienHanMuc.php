<?php
require_once("../dbConnect/lib_db.php");

$idvi = $_POST["idvi"];
$iddm = $_POST["iddm"];

$sql = "select SoTien,LapLai from hanmucchitieu where IDvi = $idvi and IDdm = $iddm";

$rs = select_list($sql);

echo json_encode($rs);
?>