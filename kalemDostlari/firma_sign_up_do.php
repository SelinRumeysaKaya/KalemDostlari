<?php

include_once "connection.php";

$newsut_campanyID = $_POST["campanyID"];
$newsut_name = $_POST["name"];
$newsut_location = $_POST["location"];
$newsut_sector = $_POST["sector"];
$newsut_employeNum = $_POST["employeNum"];
$newsut_stajKonID = $_POST["stajKonID "];
$newsut_password = $_POST["password"];

if( isset($_POST["campanyID"]) && isset($_POST["name"])
&& isset($_POST["location"]) && isset($_POST["sector"])
&&  isset($_POST["employeNum"]) && isset($_POST["stajKonID"])
&&  isset($_POST["password"])
){

    $q = mysqli_query($db_con, "INSERT INTO student (campanyID, name,location,sector,employeNum,stajKonID,passwords) VALUES ('".$newcus_campanyID."','".$newcus_name."','".$newcus_location."','".$newcus_sector."','".$newcus_employeNum."','".$newcus_stajKonID."','".$newcus_password."')");
    echo mysqli_error($db_con);

    header("location: sign_in.php");
}
    else{
    header("location: firma_sign_up.php");
    }


?>