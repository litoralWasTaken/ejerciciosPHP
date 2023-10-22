<?php
// Recogida de datos
$email = $_POST['email'];
$password = $_POST['password'];
// validaciones de Login
function didValidateEmail($email)
{
    global $error_code;
    $returnEmail = false;
    if (isset($email) && filter_var($email, FILTER_SANITIZE_EMAIL)) {
        $returnEmail = true;
    } else {
        $error_code = 'Email no valido o no presente';
    }

    return $returnEmail;
}
function didValidatePassword($password)
{
    global $error_code;
    $returnPass = false;
    if (isset($password) && filter_var($password, FILTER_SANITIZE_STRING) && strlen($password) >= 6 && $password !== '123456' && $password !== 'password') {
        $returnPass = true;
    } else {
        $error_code = 'Contraseña no válida o no presente';
    }

    return $returnPass;
}

function requiredFields($email, $password)
{
    $returnFields = false;
    if (isset($email) && isset($password)) {
        $returnFields = true;
    }
    return $returnFields;
}

function validateLogin($email, $password)
{
    $did_login = false;
    if (requiredFields($email, $password)) {

        if (didValidateEmail($email) && didValidatePassword($password)) {
            $did_login = true;
        }
    }

    return $did_login;
}

global $error_code;

$did_login = false;
session_start();
if (empty($_SESSION)) {
    if ($did_login = validateLogin($email, $password)) {
        $_SESSION['email']  = $email;
        $_SESSION['password'] = $password;
    }
} else {
    $did_login = true;
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
}


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
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="index.html">LOGO</a>
        <ul class="nav justify-content-end">
            <a class="link" href="#">Servicios</a>
            <a class="link" href="#">Sobre nosotros</a>
            <a class="link" href="#">Contacto</a>
            <li class="nav-item">
                <?php if (!$did_login) {
                    echo '<a class="btn btn-outline-light" href="#">Login</a>';
                } else if ($did_login) {
                    echo '<a class="btn btn-outline-danger" href="#">Logout</a>';
                } ?>
            </li>
        </ul>
    </nav>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <?php
                    if (!$did_login) {
                        require_once('./modules/formlogin.php');
                        if (isset($error_code)) {
                            require './modules/error.php';
                        }
                    } else {
                        require './modules/infopage.php';
                    }
                    ?>

                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4"></div>
                <div class="col-4">Autor: Tú </div>
            </div>
        </div>


    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>



</body>

</html>