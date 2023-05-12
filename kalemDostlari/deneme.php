<?php

include_once "connection.php";

$newsut_name = $_POST["name"];

if( isset($_POST["name"]) 
){
    $q = mysqli_query($db_con, "INSERT INTO temp  VALUES ('".$newsut_name."')");
    echo mysqli_error($db_con);

    header("location:index.php");
}else{
    header("location: ogrenci_sign_up.php");
}


?>