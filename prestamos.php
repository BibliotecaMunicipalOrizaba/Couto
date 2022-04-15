<?php
session_start();
include("admin/conexion.php");
if(isset($_SESSION['usuario']))
 {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="biblioteca virtual UNI">
    <title>Libros Web</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">     
    <link rel="shortcut icon" href="images/iconolibreria.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<body>
<!--barra de correo, telefono y login-->
<?php include ('includes/header.php');?>
<!--slider de imagenes-->
<?php //include ('includes/slider.php');?>	
	<br>
			<div class="container">
			     <div class="row">

			         <div class="col-md-7">
						 <p>descarga el formato de la solicitud de tarjeta en el enlace :     <button type="button" class="btn btn-link" onclick="window.location.href='//mega.nz/file/1M42SZRD#J4GL7boUqWL51ZQYcpdtof8e9iRh9h3xQ11gkH32dRM'">click aqui</button></p>
			          <img src="images/ahd.jpg" width="600" height="300" class="img-responsive">

			         </div>

			         <div class="col-md-5">
			            <center><h3>Prestamo de Libros</h3></center>
			            <p>
			            	La Biblioteca Publica cuenta con algunos libros disponibles para los usuarios los cuales pueden 
			            	solicitar acudiendo a tramitar su targeta, esta tendra
							una vigencia de 1 año. en este portal tambien podras encontrar y solicitar algunos libros que puedes ver
							o descargar en formato digital(si requieres un titulo en especifico o tienes alguna queja o sugerencia dejanos saber en el apartado comentarios).
			            </p>
						<center><h4>Requisitos para tramitar tu tarjeta</h4></center>
						<p>REQUISITOS PARA LA EXPEDICION DE CREDENCIAL
					BIBLIOTECA MUNICIPAL “JOSE BERNARDO COUTO Y PEREZ”</p>
						<ul style=" font-size: 14px; font-family: Lato; color: #1d1778; background-color: #26A3C5; padding: 10px 50px 20px;; margin: 10px; width: 500px; border-style: dotted; border-color: #000000; border-width: 5px;">
						<li style="list-style-type: disc;">LLENAR LA SOLICITUD CON LETRA LEGIBLE.</li>
						<li style="list-style-type: disc;">2 FOTOGRAFÍAS TAMAÑO INFANTIL DEL SOLICITANTE.</li> 
						<li style="list-style-type: disc;">COPIAS DEL INE Y DE COMPROBANTE DE DOMICILIO TANTO DEL SOLICITANTE COMO DEL AVAL.</li>
						<li style="list-style-type: disc;">EL AVAL DEBERÁ TENER DOMICILIO Y TELÉFONO EN EL MUNICIPIO DE ORIZABA, SER MAYOR DE 18 AÑOS Y NO SER FAMILIAR.</li>
						</ul>

			         </div>

			     </div>
			</div>
	<br>
	<br>
	<!--pie de pagina-->
	<?php 
include ("includes/footer2.php");
include ('includes/footer.php');
include ("includes/subfooter.php");?>
	 <!--Librerias de Jquery, Bootstrap y otras mas--> 
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
	<link href="css/style.css" rel="stylesheet" />
	<script src="https://kit.fontawesome.com/7de388b156.js" crossorigin="anonymous"></script>
</body>
</html>

<?php include "log.php"; ?>
<?php
}else{
    echo '<script> window.location="index.php"; </script>';
}
?>