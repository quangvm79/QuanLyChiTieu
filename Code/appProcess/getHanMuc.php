<?php
session_start();
require_once("../dbConnect/lib_db.php");

$sql = "select ID from nguoidung where TaiKhoan = \"".$_SESSION["account"]."\"";

$dt = select_one($sql);


if($dt != null){
    $id = $dt["ID"];

    $sql = "select hanmucchitieu.ID as ID,hanmucchitieu.TenHanMuc as TenHanMuc,hanmucchitieu.SoTien as SoTien,danhmuc.TenDanhMuc as TenDanhMuc,vi.TenVi as TenVi,hanmucchitieu.LapLai as LapLai from hanmucchitieu,danhmuc,vi
    where hanmucchitieu.IDvi = vi.ID
    and hanmucchitieu.IDdm = danhmuc.ID
    and vi.ID in (select ID from vi where vi.IDtk =$id);";

    $rs = select_list($sql);

    echo json_encode($rs);
}

?>