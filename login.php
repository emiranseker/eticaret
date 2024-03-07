<?php  
session_start();
$db = new PDO("mysql:host=localhost;dbname=uyelik2","root","");

$kadi = $_POST['kullaniciadi'];
$sifre = $_POST['parola'];

if (!$kadi || !$kadi ) {

    die("bos alan birakmayiniz");
}

$user = $db->query("SELECT * FROM kullanicilar WHERE ad ='$kadi' AND pass = '$sifre'")->fetch();

if($user) {
    $_SESSION['user']= $user;
    header("location:deneme.php");
}
else{
    echo "bilgiler yok";
}