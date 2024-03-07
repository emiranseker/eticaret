<?php


include("baglanti2.php");


if (isset($_POST["kaydet"])) {

    $name = $_POST["kullaniciadi"];
    $email = $_POST["email"];
    $password = $_POST["parola"];

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


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="kayit.css" rel="stylesheet">
</head>

<body>
    <div class="container p-5">
        <div class="card p-5">
            <form action="kayit2.php" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">kullanici adi</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="kullaniciadi">

                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email">

                </div>


                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="parola">
                </div>



                <button type="submit" name="kaydet" class="btn btn-primary">Kaydet</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>