<?php
session_start(); //Esto indica que vamos a usar sesiones
session_destroy();
header('Location: uno.php');
?>
