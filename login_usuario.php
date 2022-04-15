<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Iniciar sesión | Biblioteca Municipal de Orizaba "José Bernardo Couto y Peréz"</title>
    <link rel="shortcut icon" href="images/icono2.ico">
        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="login/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="loginassets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="login/assets/css/form-elements.css">
        <link rel="stylesheet" href="login/assets/css/style.css">
        <link rel="shortcut icon" href="images/icono.ico">

    </head>
    <body style="background: #3A8287;">
<!-- Ventana Principal -->
        <div class="top-content">
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong></strong> Accede con tu cuenta o registrate</h1>
                            
                            <div class="description">
                            	
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h1>Biblioteca Couto</h1>

                               <img src="images/icono.ico"  style="border-radius:150px; border:2px solid #666" width="100px" height="100px">
                            		
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-key"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="login/validarUsuario.php" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Usuario</label>
			                        	<input type="text" name="username" placeholder="Usuario..." class="form-username form-control" id="form-username" required>
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Contraseña</label>
			                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password" required>
			                        </div>                  
                        <button type="submit" class="btn" name="login">Entrar</button>             
			                    </form> <br>
                                 <button type="button" class="btn2" data-toggle="modal" data-target="#new_cat_modal" ><span class="glyphicon glyphicon-plus-sign"></span> Registrarse</button> 
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

          <!-- Modal Nueva Categoria-->
  <div class="modal fade" id="new_cat_modal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background: #65D0ED; color: white;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Nuevo Usuario</h4>
        </div>
        <form name="user" method="post" action="funciones_php\validarVisitante.php">
        <div class="modal-body">
          <div>
            <div class="row">
               <div class="col-md-3"><label>Nombre:</label></div>
             <div class="col-md-9">
               <input type="text" class="form-control" name="nombre" required="required" placeholder="Nombre Completo" value=""> 
             </div>  
            </div>
            <div class="row">
               <div class="col-md-3"><label>Email:</label></div>
             <div class="col-md-9">
               <input type="email" class="form-control" name="email" required="required" placeholder="Email" value=""> 
             </div>  
            </div>
             <div class="row">
               <div class="col-md-3"><label>Telefono:</label></div>
             <div class="col-md-9">
               <input type="number" class="form-control" name="telefono" required="required" placeholder="Telefono" value=""> 
             </div>  
            </div>
             <div class="row">
               <div class="col-md-3"><label>Direccion:</label></div>
             <div class="col-md-9">
               <input type="text" class="form-control" name="direccion" required="required" placeholder="Direccion" value=""> 
             </div>  
            </div>
            <div class="row">
               <div class="col-md-3"><label>Provincia:</label></div>
             <div class="col-md-9">
               <input type="text" class="form-control" name="provincia" required="required" placeholder="Provincia" value=""> 
             </div>  
            </div>
            <div class="row">
               <div class="col-md-3"><label>Estado:</label></div>
             <div class="col-md-9">
               <input type="text" class="form-control" name="estado" required="required" placeholder="Estado" value=""> 
             </div>  
            </div>
             <div class="row">
               <div class="col-md-3"><label>Alias:</label></div>
             <div class="col-md-9">
               <input type="text" class="form-control" name="alias" required="required" placeholder="Nombre de Usuario" value=""> 
             </div>  
            </div>
             <div class="row">
               <div class="col-md-3"><label>Contraseña:</label></div>
             <div class="col-md-9">
               <input type="text" class="form-control" name="pass" required="required" placeholder="Contraseña" value=""> 
             </div>  
            </div>

            <div class="col-md-6">
             <div class="row">
               <div class="col-md-3"><label>Edad:</label></div>
             <div class="col-md-9">
               <input type="number" class="form-control" name="edad" required="required" placeholder="Edad" value=""> 
             </div>  
            </div>
            </div>
            
            <div class="col-md-6">
             <div class="row">
               <div class="col-md-3"><label>Sexo:</label></div>
             <div class="col-md-9">
               <select class="form-control" name="sexo">
                   <option>Masculino</option>
                   <option>Femenino</option>
               </select> 
             </div>  
            </div>
            </div>
            
             <div class="row">
               <div class="col-md-3"><label>Pais</label></div>
             <div class="col-md-9">
               <input type="text" class="form-control" name="pais" required="required" placeholder="Pais" value=""> 
             </div>  
            </div>            
          </div>
         <br> 

        </div>
        <div id="res_new_cat"></div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Crear</button>
        </div>
        </form>
      </div>


    </div>
    
  </div>

  <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 social-login">
                        	<div class="social-login-buttons">
	                        	<a class="btn btn-link-1 btn-link-1-google-plus" href="index.php">
	                        		<i class="fa fa-close"></i> Salir
	                        	</a>
                        	</div>
                        </div>
                    </div>
                    
        <script src="login/assets/js/jquery-1.11.1.min.js"></script>
        <script src="login/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="login/assets/js/jquery.backstretch.min.js"></script>
        <script src="login/assets/js/scripts.js"></script>
    
      </body>
    
   

</html>