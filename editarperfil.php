<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Editar Perfil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #8A2BE2, #0000FF);
            background-attachment: fixed;
            background-size: cover;
            color: #fff;
        }
        .edit-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
        }
        .edit-form {
            margin-top: 20px;
        }
        .edit-form label {
            font-size: 16px;
        }
        .edit-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }
        .edit-button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="edit-container">
        <h1>Editar Perfil</h1>
        <form class="edit-form" action="guardar_perfil.php" method="post">
            <label for="imagen">Seleccionar nueva imagen de perfil:</label>
            <input type="file" name="imagen" accept="image/*">
            <label for="nombre">Nombre de Usuario:</label>
            <input type="text" name="nombre" value="Nombre de Usuario">
            <label for="email">Correo Electrónico:</label>
            <input type="email" name="email" value="usuario@example.com">
            <label for="genero">Genero:</label>
            <input type="genero" name="genero" value="genero del usuario">
            <label for="codigo">Codigo:</label>
            <input type="codigo" name="codigo" value="codigo unico del usuario">
            <label for="ubicacion">Ubicación:</label>
            <input type="text" name="ubicacion" value="Ciudad, País">
            <label for="biografia">Biografía:</label>
            <textarea name="biografia">Breve descripción del usuario.</textarea>
            <button class="edit-button" type="submit">Guardar Cambios</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>