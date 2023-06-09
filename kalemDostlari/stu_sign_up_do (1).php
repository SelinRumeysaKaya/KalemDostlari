<?php
include_once "connection.php";

if (isset($_POST["name"]) && isset($_POST["surname"]) && isset($_POST["age"]) && isset($_POST["departman"]) && isset($_POST["school"]) && isset($_POST["classLevel"]) && isset($_POST["username"]) && isset($_POST["passwords"])) {
    $newsut_name = $_POST["name"];
    $newsut_surname = $_POST["surname"];
    $newsut_age = $_POST["age"];
    $newsut_departman = $_POST["departman"];
    $newsut_school = $_POST["school"];
    $newsut_classLevel = $_POST["classLevel"];
    $newsut_username = $_POST["username"];
    $newsut_password = $_POST["passwords"];
    
    $q = mysqli_query($db_con, "INSERT INTO student (name, surname, age, departman, school, classLevel, username, passwords) VALUES ('".$newsut_name."','".$newsut_surname."','".$newsut_age."','".$newsut_departman."','".$newsut_school."','".$newsut_classLevel."','".$newsut_username."','".$newsut_password."')");
  
    if (!$q) {
        echo mysqli_error($db_con);
    }

    header("location:index.php");
} else {
    header("location: ogrenci_sign_up.php");
}




?>
