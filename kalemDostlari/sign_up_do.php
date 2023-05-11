<?php

include_once "connection.php";

$newsut_name = $_POST["name"];
$newsut_surname = $_POST["surname"];
$newsut_age = $_POST["age"];
$newsut_departman = $_POST["departman"];
$newsut_school = $_POST["school"];
$newsut_classLevel = $_POST["classLevel"];
$newsut_username = $_POST["username"];
$newsut_password = $_POST["password"];

if( isset($_POST["name"]) && isset($_POST["surname"])
&& isset($_POST["age"]) && isset($_POST["departman"])
&&  isset($_POST["school"]) && isset($_POST["classLevel"])
&&  isset($_POST["username"]) && isset($_POST["password"])
){
    $q = mysqli_query($db_con, "INSERT INTO student (names,surname,age,departman,school,classLevel,username,passwords) VALUES ('".$newcus_name."','".$newcus_surname."','".$newsut_age."','".$newsut_departman."','".$newsut_school."','".$newsut_classLevel."','".$newsut_username."','".$newsut_password."')");
    echo mysqli_error($db_con);

    header("location: sign_in.php");
}else{
    header("location: sign_up.php");
}


?>