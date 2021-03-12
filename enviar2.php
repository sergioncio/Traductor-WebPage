<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$tipoconsulta = $_POST['tipoconsulta'];

$para="traducciones@aparedesjimenez.com";

$asunto="Tipo de consulta: " . $tipoconsulta . "\r\n";

$mensaje='Mensaje escrito por: ' . $nombre . "\r\n";
$mensaje.="Con email: " . $email . "\r\n";
$mensaje.="El mensaje es: " . "\r\n";
$mensaje.=$_POST['mensaje'];


if(mail($para,utf8_decode($asunto),utf8_decode($mensaje))){
    header("Location:enviado.html");
}
else{
    header("Location:fallido.html");
}
?>