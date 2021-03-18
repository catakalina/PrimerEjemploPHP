<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="get">
    <input type="text" name="name" id="name">
    <input type="submit" value="Enviar">
</form>
</body>
</html>

<?php
$nombre = $_GET['name'] ?? '';

echo 'Hola $nombre </br>';//Comillas Simples
echo "Hola ".$nombre;   //Comillas Dobles

if ($nombre == "catalina"){
    echo "Hola ".$nombre;
}else if($nombre == "lau"){
    echo "Hola lau";
}else{
    echo "Hola Usuario";
}
?>

<?php if ($nombre == "catalina"){ ?>
    Esto se mostrará si la expresión es verdadera.
<?php }else{ ?>
    En caso contrario se mostrará esto.
<?php }?>
