<?php
session_start();
require_once("../dbConnect/lib_db.php");



    if(isset($_SESSION["account"])){
        $id = $_SESSION["account"];

        $sql = "select ID from nguoidung where TaiKhoan = \"$id\"";
        $dt = select_one($sql);
        $id = $dt["ID"];
       
        $t = $_POST["money"];
        $sql = "insert into vi(IDtk,TenVi,SoTien) values($id,\"TienMat\",$t)";
        
        $checkInsertVi = exec_update($sql);
       
        if($checkInsertVi == 1){
            $rs["success"] = "true";
        }
        else{
            $rs["success"] = "false";
        }
        echo json_encode($rs);
    }else{
        echo json_encode("no session");
    }
    

?>