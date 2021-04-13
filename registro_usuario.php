<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	
	<link rel="stylesheet" type="text/css" href="css/v.css">
	<link rel="stylesheet" type="text/css" href="css/estilos-generales.css">
	<link rel="stylesheet" type="text/css" href="css/responsivo.css">
  <link rel="stylesheet" type="text/css" href="css/v.css">

<link href="https://fonts.googleapis.com/css?family=Libre+Barcode+128+Text" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <!-- FAVICON -->
    <link rel="shortcut icon" href="img/favicon.ico" type="ico">
    <!-- Metas Responsivo -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
 

</head>
<body>
<!-- Redes Sociales -->
<div class="redes-sociales">
    <a href="https://www.facebook.com/MITURElSalvador/" target="_blank" title="S&iacute;guenos en Facebook"><div class="fb"></div></a> <!-- FACEBOOK -->
    <a href="https://www.youtube.com/channel/UCdXJsUchhGTySSflB9fONNQ" target="_blank" title="S&iacute;guenos en Youtube"><div class="yt"></div></a> <!-- YOUTUBE -->
    <a href="https://twitter.com/miturelsalvador?lang=es" target="_blank" title="S&iacute;guenos en Twitter"><div class="tw"></div></a> <!-- TWITTER -->
    <a href="regustro_d.html" target="_blank" title="Agregar Nuevo Departamento"><div class="nuevo_departamento"></div></a> <!-- Agregar Nuevo Departamento -->
    <a href="registro_u.html" target="_blank" title="Registro / Iniciar Sesi&oacute;n"><div class="login"></div></a> <!-- Inicio Sesion / Registro Usuarios -->
</div> 

<!-- Fin Redes Sociales -->    
<div class="fondo_login">      
<div class="contenedor_general">
    <header>
        <div class="logo">
            <img src="img/logo.png" title="MITUR El Salvador" alt="Logo MITUR El Salvador">
        </div><!-- Cierre Logo MITUR -->
        <div id="menu_responsivo" onclick="control_menu('menu_MITUR')"> <!-- Evento onclick unicamente funcional en menu con resolucion menor a 1024 px -->
            <a href="#"><img src="img/icono-menu-responsivo.png" title="Bot&oacute;n Men&uacute; Responsivo" alt="Bot&oacute;nn Men&uacute; Responsivo"></a>
        </div><!-- Cierre Menu Responsivo -->
        <ul id="menu_MITUR">
            <li><a class="menu_activo" href="index.html">Inicio</a></li>
            <li><a href="login.html">Iniciar Sesi&oacute;n</a></li>
            <li><a href="#enlace_control_mapa_animado">Mapa Animado</a></li>
            <li><a href="#">Desarrolladores</a></li>
            <li><a href="#">Cont&aacute;ctanos</a></li>
        </ul><!-- Cierre Lista de Opciones Menu MITUR -->
    </header><!-- Cierre Header -->
    
    
 <!-- Validaciones de formulario -->       
<div id="registration-form">
	<div class='fieldset'>
    <legend>Registro</legend>
		<form action="crud1.php" method="post" data-validate="parsley" id="registro">
        
			<div class='row'>
				<label for='firstname'>Nombre</label>
				<input type="text" placeholder="Nombre" name='nombre' id='nombre' required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" data-error-message="Nombre requerido">
			</div>
			<div class='row'>
				<label for='firstname'>Apellido</label>
				<input type="text" placeholder="Apellido" name='apellido' id='apellido' required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" data-error-message="Tu apellido es requerido">
			</div>
			<div class='row'>
				<label for="email">E-mail</label>
				<input type="text" placeholder="E-mail"  name='email' required pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" data-type="email" data-error-message="tu E-mail es requerido">
			</div>

			<div class='row'>
				<label for="email">Contraseña</label>
				<input type="text" placeholder="Contraseña"  name='contrasenia' required data-type="password" data-error-message="Contraseña es requerido">
			</div>
			
            <td><button type="submit" class="btn btn-primary" name="registrar" id="registrar">Registrar</button></td>

		</form>
    <?php
            if(isset($_GET['e'])){
                echo "<center><div id='msj'><div class='alert alert-danger' style='text-align:center;'>
                        <strong>El email ya se encuentra registrado</strong>
                    </div></div></center>";
            }

            if(isset($_GET['re'])){
                echo "<center><div id='msj'><div class='alert alert-success' style='text-align:center;'>
                        <strong>Registro efectuado exitosamente</strong>
                    </div></div></center>";
            }
        ?>
	</div>
</div>
<!-- 
    ****** Librerias javascript ****** 

    1) Libreria JQUERY universal para el control de efectos, mapa y funciones generales
  
    2 Control menu responsivo para dispositivos moviles
    
    !!!!! Orden de arriba hacia abajo !!!!!  
 -->    
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
<script type="text/javascript" src="js/control_menu_responsivo.js"></script>
</body>
</html>