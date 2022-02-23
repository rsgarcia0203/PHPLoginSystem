<html lang="es">

<head>
	<meta charset = "utf-8"/>
	<title>PHPLoginSystem</title>
	<link id="theme-style" rel="stylesheet" href="../css/login.css">
</head>

<body>
	
    <div class = "contenedor" align = "center">
        <img src="../img/login.png" > </br> 
        
		<?php
		$usuario = $_POST["username"];
		$contrasena = $_POST["password"];
		#Para este ejemplo no codificaremos ni decodificaremos la contraseña

		include("connect.php");
		if(strpos($usuario,"@") == true){
			#Para esta prueba asumiremos que la contraseña inicial de un usuario será su contraseña
			$intentos = 3;
    		$result = null;
			try {
        		$result = mysqli_query($conn,"SELECT Correo, Cedula FROM empleado where Correo like '$usuario';");
        		$result = $result->fetch_array();
        		if($result == null){
					echo "Usuario incorrecto, intente nuevamente.";
					$intentos++;
				} else {
					if($result['Correo'] == $usuario and $contrasena == $result['Cedula']){
						echo "Acceso Exitoso";
					} else if ($usuario == $result['Correo'] and $contrasena != $result['Cedula']){
						echo "Contraseña incorrecta, intentelo nuevamente.";
					}
				}
    		} catch (mysqli_sql_exception $sqle) {
        		echo "Connection error";
    		} catch (mysqli_result $sqlr){
        		echo "No se encontraron resultados";
    		}

			if($intentos == 3){
				echo "Intentos fallidos excedidos, por favor póngase en contacto con un analista de soporte.";
			}
		} else {
			echo "Usuario incorrecto, verifique su usuario.";
		}

		?>
		</br> 
		<button class="button" onclick="location.href='../index.php'">Regresar</button> 
    </div>

</body>

</html>


