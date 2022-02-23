<html lang="es">

<head>
	<meta charset = "utf-8"/>
	<title>PHPLoginSystem</title>
	<link id="theme-style" rel="stylesheet" href="css/login.css">
</head>

<body>
	
    <div class = "contenedor" align = "center">
        <img src="img/login.png" >
        <form action="layout/verify.php" method="post">
            Usuario: <input type="text" class="tf_box" name="username" /><br />
            Contraseña: <input type="password" class="tf_box" name="password" /><br />
            <input class = "button" type="submit" value="Ingresar" />
        </form>
    </div>

</body>

</html>

