<?php
include_once "connection.php";

if (isset($_POST["name"]) && isset($_POST["passwords"]) &&  isset($_POST["location"]) && isset($_POST["sector"]) && isset($_POST["employeNum"]) && isset($_POST["stajKonID"]) ) {
    $newsut_name = $_POST["name"];
    $newsut_passwords = $_POST["passwords"];
    $newsut_location = $_POST["location"];
    $newsut_sector = $_POST["sector"];
    $newsut_employeNum = $_POST["employeNum"];
    $newsut_stajKonID = $_POST["stajKonID"];
    
   $q = mysqli_query($db_con, "INSERT INTO campany (name, passwords, location, sector, employeNum, stajKonID) VALUES ('".$newsut_name."','".$newsut_passwords."','".$newsut_location."','".$newsut_sector."','".$newsut_employeNum."','".$newsut_stajKonID."')");

  
    if (!$q) {
        echo mysqli_error($db_con);
    }

    header("location:sign_in.php");
} else {
    header("location: firma_sign_up.php");
}




?>

