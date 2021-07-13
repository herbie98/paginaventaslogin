<?php
session_start();
if($_SESSION['user']){
    $User = $_SESSION['user'] ;
    
}else{
    header('location:../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>carrito de compras</title>
</head>
<body>
<a href="../login.php">pagina principal</a>
<?php 
$itemsEnCesta=$_SESSION['itemsEnCesta'];

if (isset($itemsEnCesta)){
	echo "El contenido de la cesta de la compra es: <br>";

	foreach($itemsEnCesta as $k => $v){
		echo "Articulo: ".$k."    cantidad: ".$v."<br>";
	}
}
?>
</body>
</html>