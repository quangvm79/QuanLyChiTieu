<?php

require_once("../dbConnect/lib_db.php");

$tendm = $_POST["tendm"];
$loaidm = $_POST["loaidm"];

$sql = "select * from danhmuc where TenDanhMuc = \"$tendm\" and LoaiDanhMuc = $loaidm";
$rs = select_one($sql);

if(is_array($rs)){
    echo "error1";
    die();
}

$sql = "insert into danhmuc(TenDanhMuc,LoaiDanhMuc) values(\"$tendm\",$loaidm)";


$rs = exec_update($sql);


if($rs == 1){
    echo "ok";
}
else{
    echo "error";
}

?>