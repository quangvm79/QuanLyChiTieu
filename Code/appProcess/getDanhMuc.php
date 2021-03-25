<?php
require_once("../dbConnect/lib_db.php");

$sql = "select * from danhmuc order by ID DESC";

$dm = select_list($sql);


if($dm != null){
    $rs = ["data"=>$dm];
}

echo json_encode($rs);
?>