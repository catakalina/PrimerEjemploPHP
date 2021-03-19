<?php
$nombre = "catalina";
//var_dump($nombre);
$nombre = 10;
//var_dump($nombre);
$nombre = TRUE; //True, true
$nombre = FALSE; //False, false
//var_dump($nombre);
$nombre = "20"."10";
//var_dump($nombre);


$nombre = null; //0, -0 => FALSE, 1 => TRUE
//var_dump((bool) $nombre);

$numero = 1.2e3;
//var_dump($numero);

$nombre = "catalina";

$arrayUsuarios = [
    [
        "Nombre" => "Catalina Rodriguez",
        "Edad" => 19,
        "Genero" => "Femenino ",
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

// IF

$n = 67;
echo "La nota es: ".
    (( $n == 19 || $n == 20) ? "A" :
        (( $n >= 16 && $n <= 18 ) ? "B" :
            (($n >= 13 && $n <= 15) ? "C" :
                (($n >= 10 && $n <= 12) ? "D" :
                    (($n >= 1 && $n <= 9) ? "E" :
                        "Nota no valida")))));

$nombre = NULL; //Colaca la variable como vacia
if(!empty($nombre)){
    //echo "Su nombre es: $nombre</br>";
}else{
    //echo "El nombre esta vacio</br>";
}

//echo "Su nombre es: ".($nombre ?? "Sin Nombre")."</br>";

if ($n == 5):
    echo "La nota es 5";
elseif ($n == 6):
    echo "la nota es 6";
else:
    echo "Nota no valida";
endif;

$edad = 21;
//echo "El usuario es ".(($edad >= 18) ? "mayor" : "menor")." de edad</br>";

$a = "Sumar";
/*if ($a == "Resta"){
    echo "Vamos a Restar";
}else if($a == "Multiplicacion"){
    echo "Vamos a Multiplicar";
}else if($a == "Division"){
    echo "Vamos a Divid";
}else if($a == "Sumar"){
    echo "Vamos a Sumar";
}else{
    echo "Operacion No Valida";
}*/
// While, Do - While, For, Foreach, switch
$n = 10;
while ($n >= 1){
    echo $n."</br>";
    $n--;
}

// Sintaxis Alterna
$n = 10;
while ($n >= 1):
    echo $n."</br>";
    $n--;
endwhile;

$n = 10;
do{
    echo $n."</br>";
    $n--;
}while ($n >= 1);

//Ciclo For
for ($i = 10; $i >= 1; $i--){
    echo $i."</br>";
    if($i == 5){
        break;
    }
}

// Sentencia Alterna
for ($i = 10; $i >= 1; $i--):
    echo $i."</br>";
endfor;

$arrayNombres = [ "catalina","lau","lina","camila","sara" ];

for ($i=0; $i < count($arrayNombres); $i++ ){
    echo $arrayNombres[$i]."</br>";
}

foreach ($arrayNombres as $nombre){
    if($nombre == "lau"):
        break;
    endif;
    echo $nombre."</br>";
}


//var_dump($arrayUsuarios);
foreach ($arrayUsuarios as $usuario){
    //echo $usuario['Nombre']."</br>";
}

// Corto de una sola linea
/*
 * Comentario de varias lineas
 */
# Tambien sirve para comentar una linea
//echo 'Hola $nombre </br>';//Comillas Simples
//echo "Hola ".$nombre;   //Comillas Dobles
/*if ($nombre == "Diego"){
    echo "Hola ".$nombre;
}else if($nombre == "Juan"){
    echo "Hola Juan";
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
