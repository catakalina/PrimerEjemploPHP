<?php
if(!empty($_COOKIE['arrayConductor']) ){ //Verificar si existe la cookie
    $ArrAllConductores = unserialize($_COOKIE['arrayConductor']); //Obtener los conductores que ya existen
    if(!empty($_POST['nombre']) && !empty($_POST['apellido'] && !empty($_POST['hora entrada'] && !empty($_POST['hora salida'] && !empty($_POST['edad'] && !empty($_POST['codigo del bus'])))))){ //Verifica si llega el nombre el apellido la hora de ingreso la hora de salida la edad y el codigo del bus
        $arrUser = [
            'Nombres' => $_POST['nombre'],
            'Apellidos' => $_POST['apellido'],
            'Hora entrada' => $_POST['hora entrada'],
            'Hora salida' => $_POST['hora salida'],
            'Edad' => $_POST['edad'],
            'Codigo del bus' => $_POST['codigo del bus'],
        ]; //Crea un array con los nombres , apellidos , horsa de entrada , hora de salida , edad , codigo del bus

        array_push($ArrAllConductores, $arrUser); //Agregando el arrUser al ArrAllConductores
        setcookie("arrayConductor", serialize($ArrAllConductores),time() + (2*24*60*60),"/", false); //a la cookie arrayConductor la remplazo con el ArrAllConductores
        header("Location: cookies.php");
    }
}else{
    setcookie("arrayConductor",serialize(array()),time() + (2*24*60*60),"/", false); //Creando la cookie
}
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
    if(!empty($_COOKIE['arrayConductor'])){
        var_dump(unserialize($_COOKIE['arrayConductor']));
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
    <a href="deletedCookie.php">Limpar Nombres</a>
</div>

</body>
</html>