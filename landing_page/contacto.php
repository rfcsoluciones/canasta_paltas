<?php
$nombre = $_POST[‘nombre’];
$apellidos= $_POST[‘apellidos’];
$email = $_POST[‘email’];
$mensaje = $_POST[‘mensaje’];
$para = ‘consultas@rfcsoluciones.COM’;
$titulo = ‘Consulta desde la Página Web’;
$header = ‘From: ‘ . $email;
$msjCorreo = “Nombre: $nombre\n Apellido: $apellidos\n E-Mail: $email\n Mensaje:\n $mensaje”;

if ($_POST[‘submit’]) {
if (mail($para, $titulo, $msjCorreo, $header)) {
echo “<script language=’javascript’>
alert(‘Mensaje enviado, muchas gracias.’);
window.location.href = ‘http://TUSITIOWEB.COM’;
</script>”;
} else {
echo ‘Falló el envio’;
}
}
?>
