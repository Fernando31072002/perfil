<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST["username"];
    $emai = $_POST["email"];
    $genero = $_POST["gender"];
    $codigo = $_POST["code"];
    $ubicacion = $_POST["location"];
    $biografia = $_POST["bio"];

    // Aquí deberías realizar la actualización de los datos en la base de datos o donde los almacenes.
    // Por ejemplo, usando SQL para actualizar un registro en una base de datos.

    // Redirigir de nuevo a la página de perfil
    header("Location: perfilusuario.php");
    exit();
}
?>

