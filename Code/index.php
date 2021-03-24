<?php
session_start();
// $_SESSION["user"] = "1";
//session_destroy();
if(isset($_SESSION["account"])){

}else{
    header("Location:dangnhap.php");
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý chi tiêu</title>
    <link rel="stylesheet" href="./css/layoutIndex.css">
    <link rel="stylesheet" href="css/vi.css">
    <link rel="stylesheet" href="css/style_danhmuc.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<!--     <script src="./js/jquery.min.js" ></script> -->
    <link rel="stylesheet" href="./css/quanLyChiTieu.css">

</head>
<body>
    <div class="layout-left">
        <div class="top-left">
            <div class="logo"><a href="#"><img src="./images/iconlogo.png" alt="logo"></a></div>
            <div>Xin chào</div>
            <div>
            <?php
            if(isset($_SESSION["userName"])){
                $user = $_SESSION["userName"];
                echo "<span class=\"name-custome\">$user</span>";
            }
            ?>
                
            </div>
        </div>
        <div class="bottom-left">
<!-- =========== Menu ================= -->
            <ul class="menu">
                <li data-menu="chi-tieu" class="active"><i class="fas fa-shopping-cart"></i>Chi tiêu</li>
                <li data-menu="thu-nhap"><i class="fas fa-hand-holding-usd"></i>Thu nhập</li>
                <li data-menu="vi" ><i class="fas fa-wallet"></i>Ví</li>
                <li data-menu="danh-muc" ><i class="fas fa-bars"></i>Danh mục</li>
                <li data-menu="thong-ke"><i class="fas fa-chart-bar"></i>Thống kê</li>
            </ul>

        </div>
    </div>

    <div class="layout-right main">
        <!-- ====== Chi tieu =============== -->
        <div class="chi-tieu content">
        
            <div class="chi-tieu-top">
                <div class="btn-top">
                    <button class="btn btn-them-chi-tieu">Thêm chi tiêu</button>
                    <button class="btn">Thêm hạn mức</button>
                </div>
                <div class="list-chi-tieu">
                    <div class="list-chi-tieu__info">
                        <div>Ngày tháng năm</div>
                        <div>Tổng cộng 5000</div>
                    </div>
                    <div class="list-chi-tieu__detail">
                        <div class="row-chi-tieu" data-id="1">
                            <span>Đi học</span>
                            <span>50000 vnđ</span>
                            <span class="btn-xoa-chi-tieu">Xóa</span>
                        </div>

                        <div class="row-chi-tieu" data-id="1">
                            <span>Đi học</span>
                            <span>50000 vnđ</span>
                            <span class="btn-xoa-chi-tieu">Xóa</span>
                        </div>
                    </div>
                </div>
                <div class="list-chi-tieu">
                    <div class="list-chi-tieu__info">
                        <div>Ngày tháng năm</div>
                        <div>Tổng cộng 5000</div>
                    </div>
                    <div class="list-chi-tieu__detail">
                        <div class="row-chi-tieu" data-id="1">
                            <span>Đi học</span>
                            <span>50000 vnđ</span>
                            <span class="btn-xoa-chi-tieu">Xóa</span>
                        </div>

                        <div class="row-chi-tieu" data-id="1">
                            <span>Đi học</span>
                            <span>50000 vnđ</span>
                            <span class="btn-xoa-chi-tieu">Xóa</span>
                        </div>
                    </div>
                </div>
            </div>
         
            <div class="modal-chi-tieu" style="display:none;">
                <h3>Thêm chi tiêu của bạn</h3>
                <form action="#" method="POST" id="form-chi-tieu" class="form-chi-tieu">
                    <div class="form-chi-tieu__sotien half-form">
                        <label for="sotien">Số tiền đã chi</label>
                        <input type="number" name="sotien">
                    </div>
                    <div class="form-chi-tieu__vi half-form">
                        <label for="vi">Chọn ví</label>
                        <select name="vi" id="vi-chi-tieu">
                            <option value="1">Tiền mặt</option>
                            <option value="2">Thẻ Viettien</option>
                        </select>
                    </div>
                    <div class="form-chi-tieu__danhmuc half-form">
                        <label for="danhmuc">Loại chi tiêu</label>
                        <select name="danhmuc" id="danhmuc-chi-tieu">
                            <option value="1">Ăn uống</option>
                            <option value="2">Đổ xăng</option>
                        </select>
                    </div>
                    <div class="form-chi-tieu__vitien half-form">
                        <label for="vitien">Số tiền trong ví</label>
                        <input type="text" name="vitien" disabled value="10000 vnđ" style="color:white" data-money="10000">
                    </div>
                    <div class="form-chi-tieu__ngaychi half-form">
                        <label for="ngaychi">Ngày chi</label>
                        <input type="date" id="ngay-chi" name="ngaychi">
                    </div>
                    <div class="form-chi-tieu__ghichu">
                        <label for="ngaychi">Ghi chú</label></br>
                        <textarea name="ghichu" maxlength="100"></textarea>
                    </div>
                    <div class="form-chi-tieu__btn">
                        <button id="btn-them-thu-chi" class="btn" type="submit">Thêm</button>
                        <button id="btn-huy-thu-chi" class="btn">Hủy</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- ====== Thu nhập =============== -->
        <div class="thu-nhap content" style="display:none;">
    
            <div class="chi-tieu-top thu-nhap-top">
                <div class="btn-top">
                    <button class="btn btn-them-thu-nhap">Thêm thu nhập</button>
                </div>
                <div class="list-chi-tieu list-thu-nhap">
                    <div class="list-chi-tieu__info">
                        <div>Ngày tháng năm</div>
                        <div>Tổng cộng 5000</div>
                    </div>
                    <div class="list-chi-tieu__detail">
                        <div class="row-chi-tieu" data-id="1">
                            <span>Đi học</span>
                            <span>50000 vnđ</span>
                            <span class="btn-xoa-chi-tieu">Xóa</span>
                        </div>

                        <div class="row-chi-tieu" data-id="1">
                            <span>Đi học</span>
                            <span>50000 vnđ</span>
                            <span class="btn-xoa-chi-tieu">Xóa</span>
                        </div>
                    </div>
                </div>
                <div class="list-chi-tieu list-thu-nhap">
                    <div class="list-chi-tieu__info">
                        <div>Ngày tháng năm</div>
                        <div>Tổng cộng 5000</div>
                    </div>
                    <div class="list-chi-tieu__detail">
                        <div class="row-chi-tieu" data-id="1">
                            <span>Đi học</span>
                            <span>50000 vnđ</span>
                            <span class="btn-xoa-chi-tieu">Xóa</span>
                        </div>

                        <div class="row-chi-tieu" data-id="1">
                            <span>Đi học</span>
                            <span>50000 vnđ</span>
                            <span class="btn-xoa-chi-tieu">Xóa</span>
                        </div>
                    </div>
                </div>
            </div>
         
            <div class="modal-chi-tieu modal-thu-nhap" style="display:none;">
                <h3>Thêm thu nhập của bạn</h3>
                <form action="#" method="POST" id="form-thu-nhap" class="form-chi-tieu">
                    <div class="form-chi-tieu__sotien half-form">
                        <label for="sotien">Số tiền thu</label>
                        <input type="number" name="sotien">
                    </div>
                    <div class="form-chi-tieu__vi half-form">
                        <label for="vi">Chọn ví</label>
                        <select name="vi" id="vi-chi-tieu">
                            <option value="1">Tiền mặt</option>
                            <option value="2">Thẻ Viettien</option>
                        </select>
                    </div>
                    <div class="form-chi-tieu__danhmuc half-form">
                        <label for="danhmuc">Loại thu nhập</label>
                        <select name="danhmuc" id="danhmuc-chi-tieu">
                            <option value="1">Ăn uống</option>
                            <option value="2">Đổ xăng</option>
                        </select>
                    </div>
                    <div class="form-chi-tieu__vitien half-form">
                        <label for="vitien">Số tiền trong ví</label>
                        <input type="text" name="vitien" disabled value="10000 vnđ" style="color:white" data-money="10000">
                    </div>
                    <div class="form-chi-tieu__ngaychi half-form">
                        <label for="ngaychi">Ngày chi</label>
                        <input type="date" id="ngay-chi" name="ngaychi">
                    </div>
                    <div class="form-chi-tieu__ghichu">
                        <label for="ngaychi">Ghi chú</label></br>
                        <textarea name="ghichu" maxlength="100"></textarea>
                    </div>
                    <div class="form-chi-tieu__btn">
                        <button id="btn-them-thu-nhap" class="btn" type="submit">Thêm</button>
                        <button id="btn-huy-thu-nhap" class="btn">Hủy</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- ====== Ví =============== -->

        <div class="vi content content-vi" style="display:none;">
            <div class="bt_them">
                <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="button btn_themvi">Thêm Ví</button>
                <button class="button btn_themhanmuc">Thêm Hạn Mức</button>
            </div>
            <div class="grid_vi">
                <table class="table" style="color: white;">
                    <thead>
                        <tr>
                            <th>Tên Ví</th>
                            <th>Số Tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>noi dung ten vi</td>
                            <td>noi dung so tien</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="chuyen-tien">
                <h1>CHUYỂN TIỀN</h1>
                <div class="row">
                    <div class="col">
                        <p>Ví chuyển tiền</p>
                        <select name="" id="">
                            <option value="" disabled selected>Chọn ví chuyển tiền</option>
                            <option value="">Techcombank</option>
                            <option value="">viettinbank</option>
                        </select>

                        <p class="so-tien">Số tiền</p>
                        <input type="text" placeholder="Nhập số tiền" name="money" required>
                        
                    </div>
                    <div class="col">
                        <p>Ví nhận tiền</p>
                        <select name="" id="">
                            <option value="" disabled selected>Chọn ví nhận tiền</option>
                            <option value="">Techcombank</option>
                            <option value="">viettinbank</option>
                        </select>
                        
                    </div>
                    
                </div>
                <button class="btn_chuyentien">Chuyển tiền</button>
            </div>
        </div>


        <!-- ====== Danh mục =============== -->
        <div class="danh-muc content" style="display:none;">
        <div class="quanly-dm">
                <h1>Quản lý danh mục</h1>
                <div class="row">
                    <div class="col">
                        <div class="chitieu">
                            <p>Chi tiêu</p>
                            <ul class="fa-ul">
                                <li><a href="#"></a><span class="fa-li"><i class="fas fa-trash-alt"></span></a></i>Ăn uống</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="thunhap">
                            <p>Thu nhập</p>
                            <ul class="fa-ul">
                                <li><a href="#"></a><span class="fa-li"><i class="fas fa-trash-alt"></span></a></i>Ăn uống</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="them-dm">   
                <h1>Thêm danh mục</h1>
                <div class="row">
                    <div class="col">
                        <p>Tên danh mục</p>
                        <input type="text" placeholder= "Nhập tên danh mục" name="tendm">
                    </div>
                    <div class="col">
                        <p>Loại danh mục</p>
                        <select name="" id="">
                            <option value="Chitieu">Chi Tiêu</option>
                            <option value="Thunhap">Thu nhập</option>
                        </select>
                    </div>
                </div>
                <div class="tacvu">
                    <button class="button btn_them_dm">Thêm</button>
                </div>
            </div>
        </div>

        <!-- ====== Thống kê =============== -->
        <div class="thong-ke content" style="display:none;">this is chi tiêu</div>

        <!-- ====== Tài khooản =============== -->
    </div>


<!-- chon MENU -->
    <script>
        let menu = document.querySelectorAll(".menu li");
        menu.forEach(function(li){
            li.onclick = function(){
                let menuText = this.getAttribute("data-menu");
                let mainPart = document.querySelectorAll(".main .content");

                mainPart.forEach(function(content){
                    if(content.classList.contains(menuText)){
                        content.style.display = 'block';
                    }else{
                        content.style.display = 'none';
                    }
                });

                menu.forEach(function(liMenu){
                    liMenu.classList.remove("active");
                });
                li.classList.add("active");
            }
        });
    </script>
<!-- Them vi -->
<div id="id01" class="modal">
    
  <form class="modal-content animate"  method="post">
    <div class="container">
      <label for="name"><b>Tên ví</b></label>
      <input type="text" placeholder="Nhập tên ví" name="tenvi" required>

      <label for="money"><b>Số tiền</b></label>
      <input type="text" placeholder="Nhập số tiền trong ví" name="sotien" required>
        
      <button type="submit">Lưu</button>
      
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

<script>
// Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
<!-- tab CHI TIEU -->
    <script>
        const chiTieuTop = document.querySelector(".chi-tieu-top");
        const btnOpenModalChiTieu = document.querySelector(".btn-them-chi-tieu");
        const btnHuy = document.querySelector("#btn-huy-thu-chi");
        const modalChiTieu = document.querySelector(".modal-chi-tieu");
        const btnThem = document.querySelector("#btn-them-thu-chi");

        btnOpenModalChiTieu.onclick = function(){
            chiTieuTop.style.display = "none";
            modalChiTieu.style.display = "block";
        }

        btnHuy.onclick = function(e){
            e.preventDefault();
            modalChiTieu.style.display = "none";
            chiTieuTop.style.display = "block";
        }

        btnThem.onclick = function(e){
            e.preventDefault();

            let soTienChi = document.querySelector("#form-chi-tieu input[name=sotien]").value;
            let vi = document.querySelector("#form-chi-tieu select[name=vi]").value;
            let danhMuc = document.querySelector("#form-chi-tieu select[name=danhmuc]").value;
            let tienTrongVi = document.querySelector("#form-chi-tieu input[name=vitien]").getAttribute("data-money");
            let ngayChi = document.querySelector("#form-chi-tieu input[name=ngaychi]").value;
            let ghiChu = document.querySelector("#form-chi-tieu textarea[name=ghichu]").value;
            if(ghiChu == "")
                ghiChu = "-";
            if(soTienChi == "" || ngayChi == ""){
                alert("Điền đủ thông tin");
            }else if(soTienChi > tienTrongVi){
                alert("Bạn không đủ tiền");
            }else{
                $.ajax({
                    url:"./appProcess/themChiTieu.php",
                    method:"POST",
                    data:{
                        sotienchi:soTienChi,
                        vi:vi,
                        danhmuc:danhMuc,
                        thoigian:ngayChi,
                        ghichu:ghiChu,
                        loai:1
                        },
                    success:function(data,status){
                        console.log(data);
                         let rs = JSON.parse(data);  

                         if(rs.success == "true"){
                             alert("Thêm mới thành công");
                             document.querySelector("#form-chi-tieu input[name=sotien]").value = "";
                             document.querySelector("#form-chi-tieu textarea[name=ghichu]").value = "";
                             let tienvi = tienTrongVi - soTienChi;
                             document.querySelector("#form-chi-tieu input[name=vitien]").setAttribute("data-money",tienvi);
                             document.querySelector("#form-chi-tieu input[name=vitien]").value = tienvi + " vnđ";
                         }else{
                             alert("Thất bại, thử lại");
                         }
                    }
                });
            }
        }
    </script>
   


   <!-- tab Thu Nhap -->
   <script>
        const thuNhapTop = document.querySelector(".thu-nhap-top");
        const btnOpenModalThuNhap = document.querySelector(".btn-them-thu-nhap");
        const btnHuyThuNhap = document.querySelector("#btn-huy-thu-nhap");
        const modalThuNhap = document.querySelector(".modal-thu-nhap");
        const btnThemThuNhap = document.querySelector("#btn-them-thu-nhap");

        btnOpenModalThuNhap.onclick = function(){
            thuNhapTop.style.display = "none";
            modalThuNhap.style.display = "block";
        }

        btnHuyThuNhap.onclick = function(e){
            e.preventDefault();
            modalThuNhap.style.display = "none";
            thuNhapTop.style.display = "block";
        }

        btnThemThuNhap.onclick = function(e){
            e.preventDefault();

            let soTienThu = document.querySelector("#form-thu-nhap input[name=sotien]").value;
            let vi = document.querySelector("#form-thu-nhap select[name=vi]").value;
            let danhMuc = document.querySelector("#form-thu-nhap select[name=danhmuc]").value;
            let tienTrongVi = document.querySelector("#form-thu-nhap input[name=vitien]").getAttribute("data-money");
            let ngayThu = document.querySelector("#form-thu-nhap input[name=ngaychi]").value;
            let ghiChu = document.querySelector("#form-thu-nhap textarea[name=ghichu]").value;
            if(ghiChu == "")
                ghiChu = "-";
            if(soTienThu == "" || ngayThu == ""){
                alert("Điền đủ thông tin");
            }else{
                $.ajax({
                    url:"./appProcess/themThuNhap.php",
                    method:"POST",
                    data:{
                        soTienThu:soTienThu,
                        vi:vi,
                        danhmuc:danhMuc,
                        thoigian:ngayThu,
                        ghichu:ghiChu,
                        loai:0
                        },
                    success:function(data,status){
                        console.log(data);
                         let rs = JSON.parse(data);  

                         if(rs.success == "true"){
                             alert("Thêm mới thành công");
                             document.querySelector("#form-thu-nhap input[name=sotien]").value = "";
                             document.querySelector("#form-thu-nhap textarea[name=ghichu]").value = "";
                             let tienvi = parseInt(tienTrongVi) + parseInt(soTienThu);
                             document.querySelector("#form-thu-nhap input[name=vitien]").setAttribute("data-money",tienvi);
                             document.querySelector("#form-thu-nhap input[name=vitien]").value = tienvi + " vnđ";
                         }else{
                             alert("Thất bại, thử lại");
                         }
                    }
                });
            }
        }
    </script>
   
</body>
</html>
