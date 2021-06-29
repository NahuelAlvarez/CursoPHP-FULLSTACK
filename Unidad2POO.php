<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO UNIAD 2 </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <?php

    $user = "usuario2020";
    $pass = "12345";

    if (!empty($_POST['user']) && !empty($_POST['pass'])) {
        if ($user === $_POST['user'] &&  $pass === $_POST['pass']) {

            $nombre = "Nahuel";
            $apellido = "Alvarez";
            $edad = 36;
            $hobbie = "Codear";
            $editor = "Visual Studio Code";

            /**
             * Funcion que devuelve un array con los valores:
             *	os => sistema operativo
             *	browser => navegador
             *	version => version del navegador
             */
            function detect()
            {
                $browser = array("IE", "OPERA", "MOZILLA", "NETSCAPE", "FIREFOX", "SAFARI", "CHROME");
                $os = array("WINDOWS", "MAC", "LINUX");

                # definimos unos valores por defecto para el navegador y el sistema operativo
                $info['browser'] = "OTHER";
                $info['os'] = "OTHER";

                # buscamos el navegador con su sistema operativo
                foreach ($browser as $parent) {
                    $s = strpos(strtoupper($_SERVER['HTTP_USER_AGENT']), $parent);
                    $f = $s + strlen($parent);
                    $version = substr($_SERVER['HTTP_USER_AGENT'], $f, 15);
                    $version = preg_replace('/[^0-9,.]/', '', $version);
                    if ($s) {
                        $info['browser'] = $parent;
                        $info['version'] = $version;
                    }
                }

                # obtenemos el sistema operativo
                foreach ($os as $val) {
                    if (strpos(strtoupper($_SERVER['HTTP_USER_AGENT']), $val) !== false)
                        $info['os'] = $val;
                }

                # devolvemos el array de valores
                return $info;
            }

            $info = detect();

            echo "

                        <div class='container'>
                        <h2>Datos del Estudiante</h2>
                        <table class='table'>
                            <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Edad</th>
                                <th>Hobbie</th>
                                <th>Editor de TExto</th>
                                <th>Sistema Operativo</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>                                 
                                    <td> {$nombre}</td>
                                    <td>{$apellido}</td>
                                    <td>{$edad}</td>
                                    <td>{$hobbie}</td>
                                    <td>{$editor}</td>
                                    <td>{$info["os"]}</td>
                                </tr>                      
                            </tbody>
                        </table>
                        <br>
                        <h3>
                            Datos adicionales detectados por php
                        </h3>
                        <br>
                        ";
            echo "Sistema operativo: " . $info["os"];
            echo "<br>";
            echo "Navegador: " . $info["browser"];
            echo "<br>";
            echo "Versión: " . $info["version"];
            echo "<br>";
            echo $_SERVER['HTTP_USER_AGENT'];
            echo "<br>";
        } else {
            echo
            "<script>
                    alert('Nombre de Uusuairo o Contraseña Icorrectos');
                </script>";
        }
    } else {
        echo "Los datos no son correctos ";
    }





    ?>

    </div>



</body>

</html>