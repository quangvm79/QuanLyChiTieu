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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <script src="./js/jquery.min.js" ></script>
    <link rel="stylesheet" href="./css/quanLyChiTieu.css">
    <link rel="stylesheet" href="./css/danhmuc.css">

</head>
<body>
    <div class="layout-left">
        <div class="top-left">
            <div class="logo"><a href="#"><img src="./images/iconlogo.png" alt="logo"></a></div>
            <div>Xin chào</div>
            <div class="account">
            <?php
            if(isset($_SESSION["userName"])){
                $user = $_SESSION["userName"];
                echo "<span class=\"name-custome\">$user</span>";
            }
            ?>
                <div class="account_option">
                    <div class="account_info">Xem thông tin tài khoản</div>
                    <div class="account_repass">Đổi mật khẩu</div>
                    <div class="account_logout">Đăng xuất</div>
                </div>
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
                <div class="list-ct">
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
                        <select name="danhmuc" id="id-danh-muc-chi-tieu">
                            <option value="1">Ăn uống</option>
                            <option value="2">Đổ xăng</option>
                        </select>
                    </div>
                    <div class="form-chi-tieu__vitien half-form">
                        <label for="vitien">Số tiền trong ví</label>
                        <input type="text" name="vitien" disabled value="10000 đ" style="color:white" data-money="10000">
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

                <div class="list-tn"></div>

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
                        <select name="vi" id="vi-thu-nhap">
                            <option value="1">Tiền mặt</option>
                            <option value="2">Thẻ Viettien</option>
                        </select>
                    </div>
                    <div class="form-chi-tieu__danhmuc half-form">
                        <label for="danhmuc">Loại thu nhập</label>
                        <select name="danhmuc" id="id-danh-muc-thu-nhap">
                            <option value="1">Ăn uống</option>
                            <option value="2">Đổ xăng</option>
                        </select>
                    </div>
                    <div class="form-chi-tieu__vitien half-form">
                        <label for="vitien">Số tiền trong ví</label>
                        <input type="text" name="vitien" disabled value="10000 đ" style="color:white" data-money="10000">
                    </div>
                    <div class="form-chi-tieu__ngaychi half-form">
                        <label for="ngaychi">Ngày chi</label>
                        <input type="date"  name="ngaychi">
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

        <div class="vi content content-vi" style="display:none; position:relative;">
        
            <div class="vi_add" style="display:none;">
                <h3>Thêm ví mới</h3>
                <label>Tên ví</label>
                <input type="text" value="" name="tenvi">
                <label>Số tiền</label>
                <input type="number" value="" name="sotien">
                <div>
                    <button class="vi_btn_add" >Thêm</button>
                    <button class="vi_btn_cancel" >Hủy</button>
                </div>
            </div>

            <div class="vi_edit" style="display:none;">
                <h3>Sửa tên ví</h3>
                <label>Tên ví mới</label>
                <input type="text" value="" name="tenvi">
                <div>
                    <button class="vi_btn_edit" >Sửa</button>
                    <button class="vi_btn_edit_cancel" >Hủy</button>
                </div>
            </div>

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
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="list-vi">
                        
                    </tbody>
                </table>
            </div>
            <div class="chuyen-tien">
                <h1>CHUYỂN TIỀN</h1>
                <div class="row row_chuyen_tien">
                    <div class="col">
                        <p>Ví chuyển tiền</p>
                        <select name="" id="vi_chuyen_tien">
                           
                        </select>

                        <p class="so-tien">Số tiền</p>
                        <input type="number" name="transferMoney" required>
                        
                    </div>
                    <div class="col">
                        <p>Ví nhận tiền</p>
                        <select name="" id="vi_nhan_tien">
                            
                        </select>
                        
                    </div>
                    
                </div>
                <button class="btn_chuyentien">Chuyển tiền</button>
            </div>
        </div>


        <!-- ====== Danh mục =============== -->
  <div class="danh-muc content" style="display:none; position:relative;">
            <div class="danhmuc_main">
            <h1>Quản lý danh mục</h1>

            <div class="danhmuc_body">
                <div class="dm_thuChi">
                    <h2>Chi tiêu</h2>
                    <br>
                    <div class="dm_container dm_container-chi">
                        
                    </div>
                </div>

                <div class="dm_thuChi">
                    <h2>Thu nhập</h2>
                    <br>
                    <div class="dm_container dm_container-thu">
                        
                    </div>
                </div>
            </div>
            </div>
            <!-- them danh muc -->
            <div class="danhmuc_add" >
                <div class="dm_edit" style="display:none;">
                    <h3>Đổi tên danh mục</h3>
                    <input type="text" value="" name="tendm">
                    <div>
                        <button class="dm_btn_edit" onclick="confirmEditDanhMuc()">Sửa</button>
                        <button class="dm_btn_cancel" onclick="closeEditDanhMuc()">Hủy</button>
                    </div>
                </div>
                <h1>Thêm danh mục</h1>
                <form method="POST">
                    <div class="dm_add_container">
                        <div class="dm_add_ele">
                            <label for="dm_add_name">Tên danh mục:</label>
                            <input type="text" class="dm_add" id="dm_add_name"
                            placeholder="Nhập tên danh mục"  required>
                        </div>

                        <div class="dm_add_ele">
                            <label for="dm_add_name">Loại danh mục:</label>
                            <select id="dm_add_type" required>
                                <option value="1">Chi tiêu</option>
                                <option value="0">Thu nhập</option>
                            </select>
                            <img src="./images/idropdown.png" alt="idropdown">
                        </div>
                    </div>
                    <input type="submit" value="Thêm" id="dm_add_sbm">
                </form>
                
            </div>
        </div>

        <!-- ====== Thống kê =============== -->
        <div class="thong-ke content" style="display:none;">this is thong ke</div>

    </div>




<!-- Format tiền -->

    <script>
        function fm(n) {
        return n.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.");
        }
    </script>
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
            loadChiTieu();
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
            }else if(parseInt(soTienChi) > parseInt(tienTrongVi)){
                alert("Bạn không đủ tiền để chi, vui lòng chọn ví khác");
            }else{
                themChiTieu(soTienChi,vi,danhMuc,ngayChi,ghiChu,tienTrongVi);
              
            }
        }

        function themChiTieu(soTienChi,vi,danhMuc,ngayChi,ghiChu,tienTrongVi){
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
                             document.querySelector("#form-chi-tieu input[name=vitien]").value = fm(tienvi) + " đ";
                             loadVi();
                         }else{
                             alert("Thất bại, thử lại");
                         }
                    }
                });
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
            loadChiTieu();
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
                            //  let tienvi = parseInt(tienTrongVi) + parseInt(soTienThu);
                            //  document.querySelector("#form-thu-nhap input[name=vitien]").setAttribute("data-money",tienvi);
                            //  document.querySelector("#form-thu-nhap input[name=vitien]").value = tienvi + " đ";
                            loadVi();
                         }else{
                             alert("Thất bại, thử lại");
                         }
                    }
                });
            }
        }
    </script>
   


   <!-- get du lieu -->
   

   <!-- Cập nhật ví -->
   <script>
   function loadVi(){
        $.ajax({
            url: "./appProcess/getVi.php",
            method:"POST",
            data:{},
            success: function(data,status){
                if(data == "error1"){
                    document.getElementById("vi-chi-tieu").innerHTML = "";
                    document.getElementById("vi-thu-nhap").innerHTML = "";
                    document.getElementById("vi_chuyen_tien").innerHTML = "";
                    document.getElementById("vi_nhan_tien").innerHTML = "";
                    document.querySelector(".list-vi").innerHTML = "";
                    document.querySelector("#form-chi-tieu input[name=vitien]").value = "";
                    document.querySelector("#form-thu-nhap input[name=vitien]").value = "";

                    return;
                }
               let vi = JSON.parse(data).data;
               renderVi(vi);
                document.querySelector("#form-chi-tieu input[name=vitien]").setAttribute("data-money",vi[0].SoTien);
                document.querySelector("#form-chi-tieu input[name=vitien]").value = `${fm(vi[0].SoTien)} đ`;
                document.querySelector("#form-thu-nhap input[name=vitien]").setAttribute("data-money",vi[0].SoTien);
                document.querySelector("#form-thu-nhap input[name=vitien]").value = `${fm(vi[0].SoTien)} đ`;
            }
        });
   }
   function renderVi(vi){
       let htmlVi = "";
       let htmlListVi = "";
       vi.forEach(function(value){
           htmlListVi += ` <tr>
                            <td>${value.TenVi}</td>
                            <td>${fm(value.SoTien)} đ</td>
                            <td><i class="fas fa-trash" onclick="deleteVi(${value.ID},'${value.TenVi}')"></i></td>
                            <td><i class="fas fa-edit" onclick="editVi(${value.ID},'${value.TenVi}')"></i></td>
                        </tr>`;
            htmlVi += `<option value="${value.ID}" data-money="${value.SoTien}">${value.TenVi}</option>`;
       });
        document.getElementById("vi-chi-tieu").innerHTML = htmlVi;
        document.getElementById("vi-thu-nhap").innerHTML = htmlVi;
        document.getElementById("vi_chuyen_tien").innerHTML = htmlVi;
        document.getElementById("vi_nhan_tien").innerHTML = htmlVi;
        document.querySelector(".list-vi").innerHTML = htmlListVi;

   }
   loadVi();
   </script>


<!-- cập nhật danh mục -->
    <script>
        function loadDanhMuc(){
            $.ajax({
                url: "./appProcess/getDanhMuc.php",
                method:"POST",
                data:{},
                success: function(data,status){
                    if(data == "empty"){
                        document.getElementById("id-danh-muc-chi-tieu").innerHTML = "";
                        document.getElementById("id-danh-muc-thu-nhap").innerHTML = "";
                        document.querySelector(".dm_container-chi").innerHTML = "";
                        document.querySelector(".dm_container-thu").innerHTML = "";
                        return;
                    }
                    let rs = JSON.parse(data).data;
                    renderDanhMuc(rs);
                }
        });
        }

        function renderDanhMuc(rs){
            let htmlDMC = "";
            let htmlDMT = "";
            let htmlQLDMT = "";
            let htmlQLDMC = "";
            rs.forEach(function(value){
                let tendm = value.TenDanhMuc.toString();
                if(value.LoaiDanhMuc == "1"){
                        htmlQLDMC += `<div class="dm_elm">       <!-- div dữ liệu -->
                                    <i class="fas fa-edit" onclick="editDanhMuc(${value.ID},'${tendm}')"></i>
                                    <img src="./images/i-trash.png" alt="icon_trash" onclick="xoaDanhMuc(${value.ID},'${tendm}')">
                                    <p data-id="${value.ID}" data-loai="${value.LoaiDanhMuc}">${value.TenDanhMuc}</p>
                                    </div>`;
                        htmlDMC += `<option value="${value.ID}">${value.TenDanhMuc}</option>`;
                }
                    else{
                        htmlDMT += `<option value="${value.ID}">${value.TenDanhMuc}</option>`;
                        htmlQLDMT += `<div class="dm_elm">       <!-- div dữ liệu -->
                                    <i class="fas fa-edit" onclick="editDanhMuc(${value.ID},'${tendm}')"></i>
                                    <img src="./images/i-trash.png" alt="icon_trash" onclick="xoaDanhMuc(${value.ID},'${tendm}')">
                                    <p data-id="${value.ID}" data-loai="${value.LoaiDanhMuc}">${value.TenDanhMuc}</p>
                                    </div>`;
                    }
            });

                document.getElementById("id-danh-muc-chi-tieu").innerHTML = htmlDMC;
                document.getElementById("id-danh-muc-thu-nhap").innerHTML = htmlDMT;
                document.querySelector(".dm_container-chi").innerHTML = htmlQLDMC;
                document.querySelector(".dm_container-thu").innerHTML = htmlQLDMT;
    }
    loadDanhMuc();
   </script>

<!-- Thay đổi tiền trong ví khi thay chọn ví -->
   <script>

        document.getElementById("vi-chi-tieu").onchange = function(){
            let id = document.getElementById("vi-chi-tieu").value;
            $.ajax({
                url: "./appProcess/getTienTrongVi.php",
                method:"POST",
                data:{idvi:id},
                success: function(data,status){
                    let rs = JSON.parse(data);
                    document.querySelector("#form-chi-tieu input[name=vitien]").setAttribute("data-money",rs);
                    document.querySelector("#form-chi-tieu input[name=vitien]").value = `${fm(rs)} đ`;
                }
            });
        }


        document.getElementById("vi-thu-nhap").onchange = function(){
            let id = document.getElementById("vi-thu-nhap").value;
            $.ajax({
                url: "./appProcess/getTienTrongVi.php",
                method:"POST",
                data:{idvi:id},
                success: function(data,status){
                    let rs = JSON.parse(data);
                    document.querySelector("#form-thu-nhap input[name=vitien]").setAttribute("data-money",rs);
                    document.querySelector("#form-thu-nhap input[name=vitien]").value = `${fm(rs)} đ`;
                }
            });
        }
       
   </script>


   <!-- Render bảng chi tiêu -->
   <script>

        function renderListChiTieu(data,LChiTieu){
            let rs = JSON.parse(data);
           
                let listTime = [];
                rs.forEach(function(thuchi){
                    if(thuchi.LoaiChiTieu == LChiTieu)
                        listTime.push(thuchi.ThoiGian);
                })
                let setListTime = new Set(listTime);

                let html= "";
                let lenRs = rs.length;
                setListTime.forEach(function(time){
                 
                    let rowChiTieu = "";
                    let tongTien = 0;
                   
                    for(let i = 0;i < lenRs;i++){
                        if(rs[i].ThoiGian == time && rs[i].LoaiChiTieu == LChiTieu){   
                            // console.log(rs,LChiTieu);
                            tongTien += parseInt(rs[i].SoTien);
                            rowChiTieu += `<div class="row-chi-tieu" data-id="${rs[i].ID}">
                            <span>${rs[i].TenDanhMuc}</span>
                            <span>${fm(rs[i].SoTien)} đ</span>
                            <span>${fm(rs[i].TenVi)}</span>
                            <span>${fm(rs[i].GhiChu)}</span>
                            <span class="btn-xoa-chi-tieu" onclick="removeChiTieu(this)" data-m="${rs[i].SoTien}" data-typedel="${LChiTieu}" style="text-align:right;">Xóa</span>
                        </div>`;
                        }
                    }


                    let tg = time.split("-");
                    let htmlInfo = `<div class="list-chi-tieu__info">
                        <div>Ngày ${tg[2]} tháng ${tg[1]} năm ${tg[0]}</div>
                        <div class="tongTienNgay" data-tongtien="${tongTien}">Tổng cộng ${fm(tongTien)} đ</div>
                    </div>`;

                    let htmlDetail = `<div class="list-chi-tieu__detail">`;
                    htmlDetail += rowChiTieu;
                    htmlDetail += `</div>`;

                    html += `<div class="list-chi-tieu">`;
                    html += htmlInfo;
                    html += htmlDetail;
                    html +=  `</div>`;
                })
                // console.log(html,1);
                return html;
        }
        
        function loadChiTieu(){
            $.ajax({
            url: "./appProcess/getListThuChi.php",
            method: "POST",
            data:{},
            success:function(data,status){
              if(data != -1){
                console.log("Không rỗng");
                document.querySelector(".list-ct").innerHTML = renderListChiTieu(data,"1");
                document.querySelector(".list-tn").innerHTML = renderListChiTieu(data,"0");
              }
              else{
                document.querySelector(".list-ct").innerHTML = "";
                document.querySelector(".list-tn").innerHTML = "";
              }
            }
            });
        }
        
        loadChiTieu();
   </script>

    <!-- Xóa chi tiêu -->
    <script>
    function removeChiTieu(ct){
        //    console.log(ct.parentNode);
        if(!confirm("Bạn có muốn xóa dữ liệu này ?"))
            return ;

            let idThuChi = ct.parentNode.getAttribute("data-id");
            let tienXoa = parseInt(ct.getAttribute("data-m"));
            let typeDel = ct.getAttribute("data-typedel");
            $.ajax({
                url:"./appProcess/deleteThuChi.php",
                method:"POST",
                data:{id:idThuChi,tienXoa:tienXoa,typeDel:typeDel},
                success: function(data,status){
                    loadVi();
                }
            });

            let prn = ct.parentNode.parentNode;
            let domTongTien = prn.previousElementSibling.querySelector(".tongTienNgay");
            let tient = parseInt(domTongTien.getAttribute("data-tongtien")) - tienXoa;
            let numOfNodeListChiTieu = prn.childNodes.length;
            ct.parentNode.remove();
            if(numOfNodeListChiTieu == 1)
                prn.parentNode.remove(); 
            else{
                domTongTien.innerHTML = `Tổng cộng ${fm(tient)} đ`;
                domTongTien.setAttribute("data-tongtien",tient);
            }   
        }
    </script>

    <!-- Thêm danh mục -->
    <script>
        let btnThemDm = document.getElementById("dm_add_sbm");
        btnThemDm.onclick = function(e){
           
            
            let tenDanhMuc = document.getElementById("dm_add_name").value;
            let loaiDanhMuc = document.getElementById("dm_add_type").value;
            if(tenDanhMuc == '')
                alert("Điền tên danh mục");
            else{
                $.ajax({
                    url: "./appProcess/themDanhMuc.php",
                    method:"POST",
                    data:{tendm:tenDanhMuc,loaidm:loaiDanhMuc},
                    success:function(data,status){
                        console.log(data);
                        if(data == "error1")
                            alert("Danh mục này đã có");
                        else if(data == "ok"){
                            alert("Thêm thành công");
                            document.getElementById("dm_add_name").value = "";
                            loadDanhMuc();    
                        }
                        else
                            alert("Có lỗi xảy ra,vui lòng thử lại sau");
                    }
                });
            }   
           
            e.preventDefault();
        }
    </script>

    <!-- Xoa danh muc -->
    <script>
        function xoaDanhMuc(id,tendm){
            if(!confirm(`Bạn có muốn xóa ${tendm} ?`))
                return;
            $.ajax({
                url:"./appProcess/xoaDanhMuc.php",
                method:"POST",
                data:{id:id},
                success:function(data,status){
                    if(data == "success"){
                        loadDanhMuc();
                        loadChiTieu();
                    }
                }
            });
        }
    </script>
    <!-- Sửa danh mục -->
    <script>
        function editDanhMuc(id,tendm){
            let formEditDm = document.querySelector(".dm_edit");
            let inputEditDm = document.querySelector(".dm_edit input[name=tendm]");
            inputEditDm.setAttribute("data-id",id);
            inputEditDm.value = tendm;
            formEditDm.style.display = "block";
        }

        function closeEditDanhMuc(){
            document.querySelector(".dm_edit").style.display = "none";
        }
        function confirmEditDanhMuc(){
            let formEditDm = document.querySelector(".dm_edit");
            let newName = document.querySelector(".dm_edit input[name=tendm]").value;
            let id = document.querySelector(".dm_edit input[name=tendm]").getAttribute("data-id");
            
            if(newName != ""){
                $.ajax({
                    url:"./appProcess/editDanhMuc.php",
                    method:"POST",
                    data:{id:id,newName:newName},
                    success:function(data,status){
                        if(data == "ok"){
                            loadDanhMuc();
                            formEditDm.style.display = "none";
                        }
                    }
                 });
            }else{
                alert("Không được để trống");
            }
        }
    </script>

    <!-- Thêm ví -->
    <script>
        let btnThemVi = document.querySelector(".btn_themvi");
        btnThemVi.onclick = function(){
            document.querySelector(".vi_add").style.display = "block";
        }
       
        let btnCloseAddVi = document.querySelector(".vi_btn_cancel");
        btnCloseAddVi.onclick = function(){
            document.querySelector(".vi_add").style.display = "none";
        }

        let btnAddVi = document.querySelector(".vi_btn_add");
        btnAddVi.onclick = function(){
            let tenVi = document.querySelector(".vi_add input[name=tenvi]").value;
            let soTien = document.querySelector(".vi_add input[name=sotien]").value;
            if(tenVi != "" && soTien != ""){
                $.ajax({
                    url:"./appProcess/themVi.php",
                    method:"POST",
                    data:{tenVi:tenVi,soTien:soTien},
                    success:function(data,status){
                        if(data == "ok"){
                            alert("Thêm ví thành công");
                            document.querySelector(".vi_add").style.display = "none";
                            loadVi();
                        }else if(data == "error1")
                            alert("Ví đã có");
                    }
                });
            }else{
                alert("Điền đủ thông tin");
            }
        }
    </script>
    <!-- Xóa ví -->
    <script>
        function deleteVi(id,tenVi){
            if(!confirm(`Bạn có muốn xóa ví ${tenVi} ?`))
                return;
            $.ajax({
                url:"./appProcess/deleteVi.php",
                method:"POST",
                data:{id:id},
                success:function(data,status){
                    if(data == "success"){
                        loadVi();
                        loadChiTieu();
                    }
                }
            });
            
        }
    </script>
    <!-- Sửa tên ví -->
    <script>
        function editVi(id,tenVi){
            document.querySelector(".vi_edit").style.display = "block";
            document.querySelector(".vi_edit input[name=tenvi]").value = `${tenVi}`;
            document.querySelector(".vi_edit input[name=tenvi]").setAttribute("data-id",id);
        }
        document.querySelector(".vi_btn_edit_cancel").onclick = function(){
            document.querySelector(".vi_edit").style.display = "none";
        }
        document.querySelector(".vi_btn_edit").onclick = function(){
            let ip = document.querySelector(".vi_edit input[name=tenvi]")
            let idVi = ip.getAttribute("data-id");
            let tenVi = ip.value;

            if(tenVi != ""){
                $.ajax({
                    url:"./appProcess/editVi.php",
                    method:"POST",
                    data:{idVi:idVi,tenVi:tenVi},
                    success:function(data,status){
                        if(data == "ok"){
                            document.querySelector(".vi_edit").style.display = "none";
                            loadVi();
                            loadChiTieu();
                        }
                    }
                });
            }else{
                alert("không được để trống tên ví");
            }
        }
        
    </script>

    <!-- Chuyển tiền các ví -->
    <script>
        let btnChuyenTien = document.querySelector(".btn_chuyentien");
        btnChuyenTien.onclick = function(){
            let domViChuyen = document.getElementById("vi_chuyen_tien");
            let domViNhan = document.getElementById("vi_nhan_tien");

            let idViChuyenTien = domViChuyen.value;
            let idViNhanTien = domViNhan.value;

            let soTienViChuyen = 0;
            domViChuyen.childNodes.forEach(function(node){
                if(node.value == idViChuyenTien){
                    soTienViChuyen = node.getAttribute("data-money");
                }
            })
            let soTienChuyen = document.querySelector("input[name=transferMoney]").value;
            if(idViNhanTien == idViChuyenTien){
                alert("Bạn phải chọn ví nhận tiền khác");
            }else if(soTienChuyen == ""){
                alert("Bạn phải nhập số tiền chuyển");
            }
            else if(parseInt(soTienChuyen) > parseInt(soTienViChuyen)){
                alert("Bạn không đủ tiền trong ví");
            }
            else {
                $.ajax({    
                    url:"./appProcess/chuyenTienVi.php",
                    method:"POST",
                    data:{idViChuyen: idViChuyenTien,idViNhan:idViNhanTien,soTienChuyen:soTienChuyen},
                    success:function(data,status){
                        if(data == "ok"){
                            alert("Chuyển tiền thành công");
                            loadVi();
                        }
                    }
                });
            }
        }
    </script>


    <!-- Đăng xuất tài khoản -->
        <script>
            document.querySelector(".account_logout").onclick= function(){
                $.ajax({
                    url:"./appProcess/logout.php",
                    method:"POST",
                    data:{},
                    success:function(d,s){
                        location.reload();
                    }
                });
            }
        </script>
</body>
</html>
