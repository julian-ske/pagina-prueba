<?php
$destino = "solutio-soluciones@outlook.com";
$nombre = $_POST["Nombre"];
$Correo = $_POST["Correo"];
$Telefono = $_POST["Telefono"];
$Mensaje = $_POST["mensaje"];

/* Concatenar las variables */

$contenido = "Nombre: " . $nombre . "\nCorreo: " . $Correo . "\nTelefono: " . $Telefono . "\nMensaje: " . $Mensaje;

mail($destino,"Contacto", $contenido);


?>