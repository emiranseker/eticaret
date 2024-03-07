<?php


include("baglanti2.php");


if (isset($_POST["kaydet"])) {

    $name = $_POST["kullaniciadi"];
    $email = $_POST["email"];
    $password = $_POST["pass"];

    $ekle ="INSERT INTO kullanicilar (ad,email,pass) VALUES ('$name','$email','$password')";
    $calistirekle = mysqli_query($baglanti2, $ekle);

    if ($calistirekle) {
        echo '<div class="alert alert-success" role="alert">
  kayit basarili bir sekilde tamamlandi
  </div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">
    kayit basarili bir sekilde tamamlanamadi
    </div>';
    }
    
}
mysqli_close($baglanti2);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="assets/css/styles.css">

    <!-- ===== BOX ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <title>Responsive Login Form Sign In Sign Up</title>
</head>

<body>
    <div class="login">
        <div class="login__content">


            <div class="login__forms">
                <form action="login.php" class="login__registre" id="login-in" method="POST">
                    <h1 class="login__title">Sign In</h1>

                    <div class="login__box">
                        <i class='bx bx-user login__icon'></i>
                        <input type="text" placeholder="Username" class="login__input" name="kullaniciadi">
                    </div>

                    <div class="login__box">
                        <i class='bx bx-lock-alt login__icon'></i>
                        <input type="password" placeholder="Password" class="login__input" name="parola">
                    </div>

                    <a href="sifre.php" class="login__forgot">Şifremi Unuttum</a>

                    <button href="#" class="login__button">Giriş Yap</button>

                    <div>
                        <span class="login__account">Hesabınız yok mu ?</span>
                        <span class="login__signin" id="sign-up">Kayıt ol</span>
                    </div>
                </form>

                <form action="giris.php" class="login__create none" id="login-up" method="POST">
                    <h1 class="login__title">Create Account</h1>

                    <div class="login__box">
                        <i class='bx bx-user login__icon'></i>
                        <input type="text" placeholder="Username" name="kullaniciadi" class="login__input">
                    </div>

                    <div class="login__box">
                        <i class='bx bx-at login__icon'></i>
                        <input type="text" placeholder="Email" name="email" class="login__input">
                    </div>

                    <div class="login__box">
                        <i class='bx bx-lock-alt login__icon'></i>
                        <input type="password" name="pass" placeholder="Password" class="login__input">
                    </div>

                    <button class="login__button" name="kaydet">Sign Up</button>


                    <div>
                        <span class="login__account">Already have an Account ?</span>
                        <span class="login__signup" id="sign-in">Sign In</span>
                    </div>

                    <div class="login__social">
                        <a href="#" class="login__social-icon"><i class='bx bxl-facebook'></i></a>
                        <a href="#" class="login__social-icon"><i class='bx bxl-twitter'></i></a>
                        <a href="#" class="login__social-icon"><i class='bx bxl-google'></i></a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--===== MAIN JS =====-->
    <script src="assets/js/main.js"></script>
</body>

</html>