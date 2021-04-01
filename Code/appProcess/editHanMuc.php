<?php
require_once("../dbConnect/lib_db.php");

$idHm = $_POST["id"];
$tenHm = $_POST["tenHm"];
$soTien = $_POST["soTien"];
$lapLai = $_POST["lapLai"];

$sql = "update hanmucchitieu set TenHanMuc = \"$tenHm\" , SoTien = $soTien , LapLai = \"$lapLai\" where ID = $idHm";

$rs = exec_update($sql);

echo $rs;
?>