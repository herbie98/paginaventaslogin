<?php
session_start();
if($_SESSION['user']){
    $User = $_SESSION['user'] ;
    
}else{
    header('location:/index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>camisetas para nenes</title>
    <link rel="stylesheet" href="../css/productos.css">
</head>
<body>
<header>
    <h1>Camisetas para nenes</h1>
    <p>superheroes, artistas, anime</p>
    <a href="../login.php"><h2>pagina principal</h2></a>
</header>

<div class="separador1"></div>
<a href="camisetas_nene/gru.php"><img src="../imagenes/camisetas_nene/gru.jpg" alt="camiseta gru" class="centro"></a>
<div class="separador1"></div>

<div>
    <a href="camisetas_nene/gumball.php"><img src="../imagenes/camisetas_nene/gumball.jpg" alt="camiseta gumball"></a>
    <div class="separador2"></div>
    <a href="camisetas_nene/masha_oso.php"><img src="../imagenes/camisetas_nene/masha_oso.jpg" alt="camiseta masha_oso"></a>
    <div class="separador1"></div>
    <a href="camisetas_nene/minions.php"><img src="../imagenes/camisetas_nene/minions.jpg" alt="camiseta masha_oso"></a>
    <div class="separador2"></div>
    <a href="camisetas_nene/pocoyo.php"><img src="../imagenes/camisetas_nene/pocoyo.jpg" alt="camiseta pocoyo"></a>
    <div class="separador1"></div>
    <a href="camisetas_nene/pony.php"><img src="../imagenes/camisetas_nene/pony.jpg" alt="camiseta pony"></a>
    <div class="separador2"></div>
    <a href="camisetas_nene/world_gumball.php"><img src="../imagenes/camisetas_nene/world_gumball.jpg" alt="camiseta world_gumball"></a>
    
</div>

<footer>
    <p>Copyright @Oscrack 2019-2021 powered by digitalcrowd</p>
</footer>
</body>
</html>