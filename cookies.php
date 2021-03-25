<?php
if(!empty($_COOKIE['arrayConductor']) ){ //Verificar si existe la cookie
    $ArrAllConductores = unserialize($_COOKIE['arrayConductor']); //Obtener los conductores que ya existen
    if(!empty($_POST['nombre']) && !empty($_POST['apellido'])){ //Verifica si llega el nombre y el apellido
        $arrUser = [
            'Nombres' => $_POST['nombre'],
            'Apellidos' => $_POST['apellido']
        ]; //Crea un array con los nombres y apellidos

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