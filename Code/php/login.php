<?php
session_start();

if(isset($_POST)){
    if($_POST["account"] != "" && $_POST["pass"] != ""){
        $_SESSION["user"] = $_POST["account"];
    }
}

header("Location:../index.php");







?>