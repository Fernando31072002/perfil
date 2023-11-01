<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Perfil de Usuario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #8A2BE2, #0000FF);
            background-attachment: fixed;
            background-size: cover;
            color: #fff;
        }
        .profile-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 30px;
            background: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
        }
        .profile-image {
            max-width: 200px;
            border-radius: 50%;
        }
        .user-info {
            margin-top: 20px;
        }
        .user-info h1 {
            font-size: 24px;
        }
        .user-info p {
            font-size: 16px;
        }
        .edit-button {
            background-color: #0000FF;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 20px;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <div class="user-info">
            <img src="imagen_predeterminada" class="imagen">
            <h1><?php echo "Nombre:" ?>nombre del usuario</h1>
            <p><?php echo "email:" ?>usuario@example.com</p>
            <p><?php echo "Genero:"?>Genero del usuario</p>
            <p><?php echo "Codigo:"?>codigo unico de cada usuario</p>
            <p><?php echo "Ubicación:"?>Ciudad, País</p>
            <p><?php echo "Biografía:"?>Breve descripción del usuario.</p>
            <button class="edit-button" onclick="location.href='editarperfil.php'">Editar Perfil</button>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

