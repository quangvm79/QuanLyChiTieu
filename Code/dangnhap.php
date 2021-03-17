<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title>Trang Đăng nhập</title>
    <meta http-equiv="Content-Type" content="text/shtml; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/dangnhap.css" type="text/css" media="all" />
    <!-- Style-CSS -->
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="imgcontainer">
                    <img src="images/avatar.png" alt="Avatar" class="avatar">
                </div>

                <h1 style="margin-top: 30px; margin-left:110px;color:white;">Đăng Nhập</h1>
            </div>
            <div class="col">
                <form action="" method="POST" style="background-color:#f1f1f1;   margin-top:100px">
                    <div class="container" style="background-color:#f1f1f1">

                        <label for="uname"><b>Tên Đăng Nhập</b></label>
                        <div class="pom-agile">
                            <input type="text" placeholder="Nhập Tên Đăng Nhập" name="username" required value="" />
                            <span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                        </div>

                        <label for="psw"><b>Mật Khẩu</b></label>
                        <div class="pom-agile">
                            <input type="password" placeholder="Nhập Mật Khẩu" name="password" required>
                            <span class="icon2"><i class="fa fa-unlock" aria-hidden="true"></i></span>
                        </div>
                        <button type="submit" name="submit" class="btn_login ">Đăng nhập</button>
                        <label>
                            
            
                        
                    </div>
                    
                
            
                    <div class="container" style="background-color:#f1f1f1 ;margin-bottom: 30px;">
                        
                        <p class="qt">Bạn đã có tài khoản chưa?</p>
                        <div class="col">
                        
                            <button type="button" onclick="document.getElementById('id01').style.display='block'" class="cancelbtn " style="background:#2c3e50;">Đăng ký</button>
                            <div class="ic">
                            <a href="#" class="fb btn">
                            <i class="fa fa-facebook fa-fw"></i>
                        </a>
                        <a href="#" class="twitter btn">
                            <i class="fa fa-twitter fa-fw"></i> 
                        </a>
                        <a href="#" class="google btn"><i class="fa fa-google fa-fw">
                            </i>
                        </a>
                        </div>
                        
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="id01" class="modal" >

        

        <form class="modal-content" method="POST" >
            
            <div class="container" style="background-color:#f1f1f1 ;width: 500px;">
                <h1>Đăng ký thành viên</h1>
                <hr>
                <label for="Tên đăng nhập"><b>Tên đăng nhập</b></label>
                        <input type="text" placeholder="Nhập tên đăng nhập" name="username" required>



                        <label for="psw"><b>Mật khẩu</b></label>
                        <input type="password" placeholder="Nhập mật khẩu" name="password" required>

                        <label for="psw-repeat"><b>Nhập lại mật khẩu</b></label>
                        <input type="password" placeholder="Nhập lại mật khẩu" name="repassword" required>

                        <label for="Tên người dùng"><b>Tên người dùng</b></label>
                        <input type="text" placeholder="Nhập tên người dùng" name="showname" required>

                        <label for="Tên hiển thị"><b>Nhập email</b></label>
                        <input type="email" placeholder="Nhập email" name="email" required>

                        <div class="clearfix">
                            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                            <button type="submit_dk" class="signupbtn" name="submit_dk">Sign Up</button>
                        </div>
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
</body>