<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulairo de Ingreso</title>
    <link rel="stylesheet" href="main.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>

    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                <h3> Ingrese Datos de Usuario</h3>
            </div>

            <!-- Login Form -->
            <form action="Unidad2POO.php" method="POST">
                <input type="text" id="login" class="fadeIn second" name="user" placeholder="Usuario">
                <input type="text" id="password" class="fadeIn third" name="pass" placeholder="Contraseña">
                <input type="submit" class="fadeIn fourth" value="Acceder Al sistema">
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" href="#">Olvido su Contraseña?</a>
            </div>

        </div>
    </div>

    <!-- <h2>Iniciar Sesión</h2>
    <form action="Unidad2POO.php" method="POST">
        <label for="user">Usuario: </label>
        <input type="text" name="user">
        <br>
        <label for="pass">Password: </label>
        <input type="password" name="pass">
        <br>
        <input type="submit" value="Acceder Al sistema">
    </form> -->
</body>

</html>