<?php
session_start();

if($_POST["account"] != "" && $_POST["pass"] != ""){
    $_SESSION["user"] = $_POST["account"];
}

header("Location:../index.php");







?>