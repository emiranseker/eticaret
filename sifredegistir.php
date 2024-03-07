<?php  
$db = new PDO("mysql:host=localhost;dbname=uyelik2","root","");
if($_POST){
   $email = strip_tags ($_POST['email']);
   $sifre1 = strip_tags ($_POST['sifre1']);
   $sifre2 = strip_tags ($_POST['sifre2']);
   $code = strip_tags ($_POST['code']);
   if($email!="" and $sifre1!="" and $sifre2!=""){
    if($sifre1 == $sifre2){
        $c = $db->query("select * from kullanicilar where code='".$code."' and email='".$email."'")->rowCount();
        if($c!=0){
            if($db->query("update kullanicilar set pass='".($sifre1)."', code='' where email='".$email."'"))
            {
                echo " sifre degisti";
            }
        }
        else{
            echo "kod yanlis";
        }
    }
    else {
        echo "sifreler uyusmuyor";
    }
   }
   else
   {
    echo "lutfen tum alanlari doldurunuz";
   }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Kod</label>
            <input type="text" name="code" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Şifre 1</label>

            <input type="text" name="sifre1" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Şifre 2</label>

            <input type="text" name="sifre2" class="form-control" id="exampleInputPassword1">
        </div>
        <button class="btn btn-primary">degistir
        </button>
    </form>
</body>

</html>