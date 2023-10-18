<?php
session_start();

if (isset($_SESSION['id'])) {
    // Elimina la sesión actual del usuario
    session_unset();
    session_destroy();
    
    // Redirige al usuario a la página de inicio de sesión
    header("Location: login.php");
    exit();
} else {
    // Si el usuario no estaba autenticado, simplemente redirige a la página de inicio de sesión
    header("Location: login.php");
    exit();
}
?>
