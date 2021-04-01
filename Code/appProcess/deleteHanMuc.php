<?php
require_once("../dbConnect/lib_db.php");

$idHm = $_POST["idHm"];

$sql = "delete from hanmucchitieu where ID = $idHm";

$rs = exec_update($sql);

echo $rs;
?>