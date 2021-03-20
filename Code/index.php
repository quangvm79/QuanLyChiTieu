<?php
session_start();
// $_SESSION["user"] = "1";
session_destroy();
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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <script src="./js/jquery.min.js" ></script>
    
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
                <li data-menu="danh-muc"><i class="fas fa-list"></i>Danh mục</li>
                <li data-menu="thong-ke"><i class="fas fa-chart-bar"></i>Thống kê</li>
                <li data-menu="tai-khoan"><i class="fas fa-user"></i>Tài khoản</li>
            </ul>

        </div>
    </div>

    <div class="layout-right main">
        <!-- ====== Chi tieu =============== -->
        <div class="chi-tieu content">this is chi tiêu</div>

        <!-- ====== Thu nhập =============== -->
        <div class="thu-nhap content" style="display:none;">this is chi thu nhập</div>

        <!-- ====== Ví =============== -->
        <div class="vi content" style="display:none;">this is ví</div>

        <!-- ====== Danh mục =============== -->
        <div class="danh-muc content" style="display:none;">this is danh mục</div>

        <!-- ====== Thống kê =============== -->
        <div class="thong-ke content" style="display:none;">this is chi tiêu</div>

        <!-- ====== Tài khooản =============== -->
        <div class="tai-khoan content" style="display:none;">this is tài khoản</div>
    </div>



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

   
</body>
</html>