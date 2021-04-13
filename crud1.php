<?php
	//Se incluye el archivo de conexión a la base
	require('conect.php');
	//Esta linea permite utilizar sesiones en la pagina
	session_start();

	if(isset($_POST['registrar'])){

		//Variables que toman el valor que viene del formulario
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$email = $_POST['email'];
		$contrasenia = $_POST['contrasenia'];

		

		//Se prepara la consulta para saber si el email ya se encuentra registrado
		$query = $bdd->prepare("SELECT * FROM registro_u WHERE email='$email'");
		
		$query->execute();

		$existe2 = $query->rowCount();

		//Evalúa si ya existe el email o no
		if($existe2 == 0){

			//Consulta para insertar datos a la base
			$comando = $bdd->prepare("INSERT INTO registro_u VALUES(NULL, :nombre,:apellido,:email,:contrasenia)");

			//Creación de parametros
			$comando->bindparam(':nombre', $nombre);
			$comando->bindparam(':apellido', $apellido);
			$comando->bindparam(':email', $email);
			$comando->bindparam(':contrasenia', $contrasenia);
	

			//Se ejecuta la consulta
			$comando->execute();

			//Línea para redireccionar
			echo "<script language='javascript'>window.location='registro_usuario.php?re=true'</script>";

			//header("Location:caracteristica.php?cr=true");

		}else{

			echo "<script language='javascript'>window.location='registro_usuario.php?e=true'</script>";

		}
		
	}
/*
	if(isset($_POST['login'])){

		$email = $_POST['email'];
		$password = $_POST['password'];

		$comando = $bdd->prepare("SELECT * FROM admin WHERE email='$email' AND password='$password'");
		
		$comando->execute();

		$existe = $comando->rowCount();

		if($existe == 1){

			//Se crea la variable de sesion autenticado
			$_SESSION["autenticado"]=true;

			header("Location:listaUsuarios.php");

		}else{

			echo "<script language='javascript'>window.location='ingreso.php?ne=true'</script>";

		}

	}

	if(isset($_POST['logout'])){

		$_SESSION["autenticado"]=false;
		header("Location:index.php?sc=true");

	}*/

?>

