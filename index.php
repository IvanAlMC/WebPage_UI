<?php

#Index: mostrara la salida de las vistas al usuario y tambien atraves de el enviaremos las distintas acciones que el usuario envie al controlador.

require_once "Controllers/Controller.php";
require_once "models/model.php";

$mvc = new MvcController();
$mvc -> plantilla();
?>

