<?php
session_start();
include "db_conn.php";

if (isset($_POST['email']) && isset($_POST['pass'])) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = validate($_POST['email']);
    $pass = validate($_POST['pass']);

    if (empty($email)) {
        header("Location: index.php?error=Debes colocar el correo");
        exit();
    } else if(empty($pass)) {
        header("Location: index.php?error=Debes colocar la contraseña");
        exit();
    } else {
        $sql = "SELECT * FROM usuarios WHERE email='$email'";

        $resultado = mysqli_query($enlace, $sql);

        if (mysqli_num_rows($resultado) === 1) {
            $row = mysqli_fetch_assoc($resultado);
            $hashed_password = $row['password'];

            if (password_verify($pass, $hashed_password)) {
                $_SESSION["email"] = $row['email'];
                $_SESSION["nombre"] = $row['nombre'];
                $_SESSION["id"] = $row['id'];
                header("Location: home.php");
                exit();
            } else {
                header("Location: index.php?error=Usuario o contraseña incorrecta");
                exit();
            }
        } else {
            header("Location: index.php?error=Usuario o contraseña incorrecta");
            exit();
        }
    }
} else {
    header("Location: index.php");
    exit();
}
?>
