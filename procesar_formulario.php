<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST["nombre"];
  $email = $_POST["email"];
  $mensaje = $_POST["mensaje"];

  $to = "themfor60@.com";
  $subject = "Nuevo mensaje de formulario";
  $message = "Nombre: $nombre\nEmail: $email\nMensaje: $mensaje";

  // Env�a el correo electr�nico
  mail($to, $subject, $message);
}
?>