<?php  
$db = new PDO("mysql:host=localhost;dbname=uyelik2","root","");
if($_POST){
    $email=strip_tags($_POST['email']);
    if($email!="")
    {
        $c = $db->query("select * from kullanicilar where email='".$email."'")->rowcount();
        if($c==0){
            echo "boyle bi rkullanici yok";
        }
        else {
            $code = uniqid();
           if($db->query("update kullanicilar set code='".$code."'where email='".$email."'"))
          {
            echo "kod gönderildi";
          }
          else{
            echo "bir hata olustu";
          }
        }
    }
    else{
        echo "email bos birakilamaz";
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
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>


        <button  type="submit" class="btn btn-primary">Kod gonder</button>

    </form>
    <a href="sifredegistir.php">Devam et</a>
</body>

</html>