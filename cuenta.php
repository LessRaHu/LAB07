<?php
session_start();
include "db_conn.php";

if (isset($_SESSION['id']) && isset($_SESSION['nombre'])) {
    // Usuario autenticado, puedes continuar

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Se ha enviado un formulario (por ejemplo, para actualizar la información del usuario)

        if (isset($_POST['editar'])) {
            // El usuario ha enviado un formulario para editar su información
            $nuevoNombre = $_POST['nuevo_nombre'];
            $nuevoEmail = $_POST['nuevo_email'];
            $nuevoTelefono = $_POST['nuevo_telefono'];
            $nuevaContrasena = $_POST['nueva_contrasena'];

            // Realiza la actualización en la base de datos
            // Asegúrate de aplicar hash a la nueva contraseña antes de almacenarla en la base de datos
            $hashedContrasena = password_hash($nuevaContrasena, PASSWORD_BCRYPT);
            $sqlActualizar = "UPDATE usuarios SET nombre = '$nuevoNombre', email = '$nuevoEmail', telefono = '$nuevoTelefono', pass = '$hashedContrasena' WHERE id = " . $_SESSION['id'];
            
            if (mysqli_query($enlace, $sqlActualizar)) {
                echo "Información actualizada correctamente.";
            } else {
                echo "Error al actualizar la información: " . mysqli_error($enlace);
            }
        } elseif (isset($_POST['eliminar'])) {
            // El usuario ha enviado un formulario para eliminar su cuenta
            // Realiza la eliminación en la base de datos
            $sqlEliminar = "DELETE FROM usuarios WHERE id = " . $_SESSION['id'];
            if (mysqli_query($enlace, $sqlEliminar)) {
                // Cierra la sesión y redirige al usuario a la página de inicio
                session_unset();
                session_destroy();
                header("Location: index.php");
                exit();
            } else {
                echo "Error al eliminar la cuenta: " . mysqli_error($enlace);
            }
        }
    }

    // Obtén los datos del usuario desde la base de datos
    $idUsuario = $_SESSION['id'];
    $sqlUsuario = "SELECT * FROM usuarios WHERE id = $idUsuario";
    $resultadoUsuario = mysqli_query($enlace, $sqlUsuario);
    $filaUsuario = mysqli_fetch_assoc($resultadoUsuario);

    if (!$filaUsuario) {
        echo "Error al obtener los datos del usuario.";
    }

    // HTML para mostrar la información y formularios de edición y eliminación
    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
    <link rel="stylesheet" type="text/css" href="Estilo/styleaccount.css">

</head>
    
    <body>
    <div class="container">
        <h1>Tu Cuenta</h1>
        <p>Nombre: <?php echo $filaUsuario['nombre']; ?></p>
        <p>Correo Electrónico: <?php echo $filaUsuario['email']; ?></p>
        <p>Teléfono: <?php echo $filaUsuario['telefono']; ?></p>
        
        <!-- Formulario para editar la cuenta -->
        <form method="post">
            <h2>Editar Cuenta</h2>
            <div>
                <label for="nuevo_nombre">Nuevo Nombre:</label>
                <input type="text" name="nuevo_nombre" required value="<?php echo $filaUsuario['nombre']; ?>">
            </div>
            <div>
                <label for="nuevo_email">Nuevo Correo Electrónico:</label>
                <input type="email" name="nuevo_email" required value="<?php echo $filaUsuario['email']; ?>">
            </div>
            <div>
                <label for="nuevo_telefono">Nuevo Teléfono:</label>
                <input type="text" name="nuevo_telefono" value="<?php echo $filaUsuario['telefono']; ?>">
            </div>
            <div>
                <label for="nueva_contrasena">Nueva Contraseña:</label>
                <input type="password" name="nueva_contrasena" placeholder="Dejar en blanco para mantener la actual">
            </div>
            <div>
                <button type="submit" name="editar">Guardar Cambios</button>
            </div>
        </form>
        
        <!-- Formulario para eliminar la cuenta -->
        <form method="post">
            <h2>Eliminar Cuenta</h2>
            <p>¿Estás seguro de que deseas eliminar tu cuenta? Esta acción no se puede deshacer.</p>
            <div>
                <button type="submit" name="eliminar">Eliminar Cuenta</button>
            </div>
        </form>
    </div>
</body>
</html>

    <?php
} else {
    header("Location: index.php");
    exit();
}
?>
