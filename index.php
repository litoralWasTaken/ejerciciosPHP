<?php

$titulo = "Lenovo IdeaPad 3";
$descripcion = "Lenovo IdeaPad 3 15IAU7 Intel Core i5-1235U/16GB/512GB SSD/15.6\"";
$precio = "1233,99€";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda online PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
    <?php require('./modules/header.php') ?>
    <main>
        <div class="container">
            <div class="row">
                <div class="card" style="width: 18rem;">
                    <img src="https://thumb.pccomponentes.com/w-300-300/articles/1063/10639213/1359-lenovo-ideapad-3-15iau7-intel-core-i5-1235u-16gb-512gb-ssd-156.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><?= $titulo ?></h5>
                        <p class="card-text"><?= $descripcion ?><br>
                            <b> <?= $precio ?> </b>
                        </p>
                        <a href="#" class="btn btn-primary"> Ver </a>
                        <a href="#" class="btn btn-primary"> Añadir </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php require('./modules/footer.php') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>



</body>

</html>