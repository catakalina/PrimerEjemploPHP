?php
$nombre_cookie = "arrayConductor";
$valor_cookie = md5("cata");
$tiempo_cookie = time() + (2*24*60*60); //7 dias, 24 horas, 60 minutos y 60 segundos;
$dominio_cookie = "/";

setcookie($nombre_cookie,$valor_cookie,$tiempo_cookie,"/", false);
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejemplo Cookies</title>
</head>
<body>
<div>
    <form action="cookies.php" method="post" >
        <input type="text" id="nombre" name="nombre" placeholder="Ingrese sus nombres">
        <input type="text" id="apellido" name="apellido" placeholder="Ingrese sus apellidos">
        <input type="submit" name="Enviar">
    </form>
</div>
<div>
    <?php

    if(!empty($_POST['nombre'])){

        if(md5($_POST['nombre']) == $_COOKIE['arrayConductor'] ){
            echo "Si eres el usuario";
        }else{
            echo "Lo lamento eres un impostor";
        }

    }

    /*        if(!empty($_POST['nombre']) && !empty($_POST['apellido'])){ //Verificamos si llega un nombre
                $arrUser = [
                    'Nombres' => $_POST['nombre'],
                    'Apellidos' => $_POST['apellido']
                ];
                $_SESSION['ArrUsers'][] = $arrUser;
                var_dump($_SESSION['ArrUsers']);
            }

            $arrayConductor = !empty($_SESSION['arrayConductor']) ? $_SESSION['arrayConductor'] : '';*/

    ?>
    <a href="#">Limpar Nombres</a>
</div>

</body>
</html>
