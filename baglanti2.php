<?php

$host = "localhost";
$kullanici = "root";
$parola = "";
$vt = "uyelik2";

$baglanti2 = mysqli_connect($host, $kullanici, $parola, $vt);
mysqli_set_charset($baglanti2, "UTF8");
