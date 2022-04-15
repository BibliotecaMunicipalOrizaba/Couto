<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulario de contacto-Mensaje enviado</title>
</head>

<body>
<?php 
$myemail = 'bibliotecacoutoperez@gmail.com';
$name = $_POST['name'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$msg = $_POST['msg'];

$to = $myemail;
$email_subject = $asunto;
$email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Asunto: $asunto  \n Mensaje: $msg";
$headers = "From: $email";

mail($to, $email_subject, $email_body, $headers);
echo "<h4>El mensaje se ha enviado correctamente<h4>";
?>
<script>
    function redireccionar(){
  window.location.href = "https://bibliotecacoutoorizaba.000webhostapp.com/contact.php";
}
setTimeout("redireccionar()", 2000);
    </script>

</body>
</html>