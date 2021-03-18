<?php
$nombre = "catalina";
var_dump($nombre);
$nombre = 10;
var_dump($nombre);
$nombre = TRUE; //True, true
$nombre = FALSE; //False, false
var_dump($nombre);
$nombre = "20"."10";
var_dump($nombre);


$nombre = null; //0, -0 => FALSE, 1 => TRUE
var_dump((bool) $nombre);

$numero = 1.2e3;
var_dump($numero);

$nombre = "Catalina";

$arrayUsuarios = [
    [
        "Nombre" => "Catalina Rodriguez",
        "Edad" => 19,
        "Genero" => "Femenino",
        "Peso" => 50.0,
        "Administrador" => false
    ],
    [
        "Nombre" => "Laura Rodriguez",
        "Edad" => 17,
        "Genero" => "Femenino",
        "Peso" => 60.0,
        "Administrador" => true
    ],
];

var_dump($arrayUsuarios);

foreach ($arrayUsuarios as $usuario){
    echo $usuario['Nombre']."</br>";
}

// Corto de una sola linea
/*
 * Comentario de varias lineas
 */
# Tambien sirve para comentar una linea
//echo 'Hola $nombre </br>';//Comillas Simples
//echo "Hola ".$nombre;   //Comillas Dobles
/*if ($nombre == "catalina"){
    echo "Hola ".$nombre;
}else if($nombre == "lau"){
    echo "Hola lau";
}else{
    echo "Hola Usuario";
}*/
?>


<?php

class Usuario {

    // boolean, integer, float, string.
    // array, object, callable, iterable
    // resource y null
    private string $nombre = "catalina";

}
