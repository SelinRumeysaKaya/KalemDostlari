<?php 
   session_start(); 
   
   require('connection.php'); 
   
   if (isset($_POST['username']) && isset($_POST['passwords'])){ 
    
                $username = $_POST["username"];
                $passwords = $_POST["passwords"];
                $rol = $_POST["rol"]; // Seçilen rolü al


                if ($rol == "ogrenci") {
                // Öğrenci rolüne ait işlemler
                    $sql = "SELECT * FROM `student` WHERE "; 
                    $sql= $sql . "username='$username' and passwords='$passwords'"; 
                    $cevap = mysqli_query($db_con, $sql); 
                echo "Seçilen rol: Öğrenci";
                } elseif ($rol == "firma") {
                // Firma rolüne ait işlemler
                $sql = "SELECT * FROM `campany` WHERE "; 
                $sql= $sql . "name='$username' and passwords='$passwords'"; 
                $cevap = mysqli_query($db_con, $sql); 
                echo "Seçilen rol: Firma";
                } elseif ($rol == "yonetici") {
                // Yönetici rolüne ait işlemler
                $sql = "SELECT * FROM `admin` WHERE "; 
                $sql= $sql . "username='$username' and passwords='$passwords'"; 
                $cevap = mysqli_query($db_con, $sql); 
                echo "Seçilen rol: Yönetici";
                } else {
                // Geçersiz rol seçildiğinde yapılacak işlemler
                echo "Geçersiz rol seçildi";
                }

                
        
            //eger cevap FALSE ise hata yazdiriyoruz.       
        
        if(!$cevap ){ 
            echo '<br>Hata:' . mysqli_error($db_con); 
        } 
        
        //veritabanindan dönen satır sayısını bul 
        
        $say = mysqli_num_rows($cevap); 
        if ($say >= 1){
            $_SESSION['username'] = $username;
        }else{
            $mesaj = "<h1> Hatalı Kullanıcı adı veya Şifre!</h1>"; 
            session_destroy();
        } 
   
   } 
   
   if (isset($_SESSION['username'])){ 
    header("Location: index.php"); //if user is logged in, redirect to index.php
   
   }else{
        header("Location: Kayit.php");// if user is not sign up then go to sign up page
    } 
    
     
     
?>