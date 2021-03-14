<?php
session_start();
if(isset($_SESSION["user"])){
    echo $_SESSION["user"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./php/login.php" method="post">
    TaiKhoan
    <input type="text" name="account"></br>
    MatKhau
    <input type="text" name="pass"></br>
    <button type="submit">Dang nhap</button>
    </form>
</body>
</html>