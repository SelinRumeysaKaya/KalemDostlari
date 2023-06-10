<?php
include_once "connection.php";

if (isset($_POST["name"]) && isset($_POST["bolum"]) && isset($_POST["sınıf"])) {
    $newcus_name = $_POST["name"];
    $newcus_bolum = $_POST["bolum"];
    $newcus_sinif = $_POST["sınıf"];

    session_start(); // Oturumu başlat

    if (isset($_SESSION["username"])) {
        $username = $_SESSION["username"];

        $query = mysqli_query($db_con, "SELECT campanyID FROM campany WHERE name = '$username'");

        if ($query) {
            $row = mysqli_fetch_assoc($query);
            $companyID = $row['campanyID'];

            $q = mysqli_query($db_con, "INSERT INTO trainee (name, campanyID, manager, classLevel) VALUES ('$newcus_name', '$companyID', '$newcus_bolum', '$newcus_sinif')");
            if ($q) {
                header("Location: Basvurularım.php");
                exit();
            } else {
                echo "Kayıt işlemi başarısız oldu: " . mysqli_error($db_con);
            }
        } else {
            echo "Sorgu hatası: " . mysqli_error($db_con);
        }
    } else {
        echo "Kullanıcı adı bulunamadı";
    }
} else {
    echo "Gerekli alanlar sağlanmadı, hata işleme yapabilirsiniz.";
}
?>
