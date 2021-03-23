<?php
if( !empty($_POST['nombre'])){
    echo "<h1> Hola ".$_POST['nombre'] ."</h1>";
    var_dump($_POST);
}

