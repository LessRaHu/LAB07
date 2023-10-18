<?php
session_start();
include "db_conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar y obtener datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $password = $_POST['password'];

    if (empty($nombre) || empty($email) || empty($password)) {
        header("Location: registro.php?error=Todos los campos son obligatorios");
        exit();
    }
    
    // Verificar si el correo electrónico ya está registrado
    $check_email_sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = mysqli_query($enlace, $check_email_sql);
    
    if (mysqli_num_rows($result) > 0) {
        // El correo electrónico ya está registrado, muestra un mensaje de error en el formulario
        $error_message = "Este correo electrónico ya está registrado.";

        // Redirige al usuario de vuelta al formulario de registro y pasa el mensaje de error como parámetro
        header("Location: registro.php?error=" . urlencode($error_message));
        exit();
    }
    
    // Hash de la contraseña (debes usar una técnica de almacenamiento segura)
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
    // Insertar datos en la base de datos
    $sql = "INSERT INTO usuarios (nombre, email, telefono, password) VALUES ('$nombre', '$email', '$telefono', '$hashed_password')";

    if (mysqli_query($enlace, $sql)) {
        // Registro exitoso, envía un mensaje de confirmación a WhatsApp
        $chatId = "51" . $telefono . "@c.us";
        $message = "¡$nombre, tu cuenta ha sido registrada con éxito! Bienvenido a nuestro servicio.";

        // Configura los datos para enviar el mensaje a través de Green API
        $data = [
            "chatId" => $chatId,
            "message" => $message
        ];

        $options = [
            'http' => [
                'method' => 'POST',
                'content' => json_encode($data),
                'header' => "Content-Type: application/json\r\n" .
                    "Accept: application/json\r\n"
            ]
        ];

        $url = 'https://api.green-api.com/waInstance1101819177/SendMessage/8821ad295ce345c7ad601e42b781789122326e4472d847d1bd';

        // Realiza la solicitud POST para enviar el mensaje
        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);

        // Redirige al usuario a la página de inicio de sesión
        header("Location: login.php");
    } else {
        // Error en la base de datos
        header("Location: registro.php?error=Error en el registro, inténtalo de nuevo");
    }
} else {
    header("Location: registro.php");
}
?>
