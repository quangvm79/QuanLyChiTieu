<?php

require_once("../dbConnect/lib_db.php");

$id = $_POST["id"];
$newName = $_POST["newName"];

$sql = "update danhmuc set TenDanhMuc = \"$newName\" where ID = $id";

$rs = exec_update($sql);

if($rs == 1)
    echo "ok";
?>