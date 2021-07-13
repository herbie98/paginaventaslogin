<?php
session_start();//inicio de la session
session_destroy();//destruye la sesion cuando se regresa a esta pagina
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>index</title>
</head>
<body>
    <form action="validar.php" method="post" name="Formulario" style="text-align: center;">
        Usuario:
        <input type="text" name="user"  placeholder="Usuario" value="<?php 
				if (isset($_COOKIE['us'])) echo $_COOKIE['us'];?>"required><br>
        Contraseña:
        <input type="password" name="pass"  placeholder="contrasenia" required><br>
        <input type="checkbox" name="check" value="recordar">recordar<br>
        
        <input type="submit" value="Iniciar sesion" name="btn">
    </form>
</body>
</html>

<?php
if(isset($_POST['btn'])){//valida si ya fue presionado el boton submit
    if ($_POST['check'] == "recordar")//valido si recibi el parametro de recordar el usuario
		setcookie("us", $_POST['user'], time()+5,"/");//asigno un tiempo
    //capturo los datos ingresados
}

?>