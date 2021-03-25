<?php


require_once("../dbConnect/lib_db.php");


$sql = "select thuchi.ID,ThoiGian,thuchi.SoTien,GhiChu,LoaiChiTieu,TenDanhMuc,LoaiDanhMuc,TenVi from thuchi,danhmuc,vi where thuchi.IDdm = danhmuc.ID and thuchi.IDvi = vi.ID order by ThoiGian desc";


$dt = select_list($sql);

if(count($dt) > 0)
    if($dt != null){
        echo json_encode($dt);
        die();
    }

echo "-1";
?>