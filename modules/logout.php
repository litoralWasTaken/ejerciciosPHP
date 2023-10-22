<?php
unset($_SESSION);

// Borrar cookie de sesión para destruir la misma sesión y no solo sus datos
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}

session_destroy();

header('Location: ../index.php');
