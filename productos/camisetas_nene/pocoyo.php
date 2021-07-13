<?php
session_start();
if($_SESSION['user']){
    $User = $_SESSION['user'] ;
    
}else{
    header('location:../../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>camiseta pocoyo</title>
</head>
<body>
   <a href="../../login.php">pagina principal</a>
    <img src="../../imagenes/camisetas_nene/pocoyo.jpg" alt="camiseta de pocoyo">
    <h3>precio: 260MX</h3><br>
    <h3>Tamaño: C</h3><br>
    <form action="../carrito3.php" method="post">
        Unidades:
        <select name="cantidad">
            <option value="1" selected>1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
        </select><br>
        <input type="hidden" name="item" value="pocoyo"><br>
        <input type="submit" value="agregar al carrito" name="agregar">
    </form>
</body>
</html>