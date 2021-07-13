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
    <title>camisetas para mujer</title>
    <link rel="stylesheet" href="../css/productos.css">
</head>
<body>
<header>
    <h1>Camisetas para mujer</h1>
    <p>superheroes, artistas, anime</p>
    <a href="../login.php"><h2>pagina principal</h2></a>
</header>

<div class="separador1"></div>
<a href="camisetas_mujer/batman.php"><img src="../imagenes/camisetas_mujer/batman.jpg" alt="camiseta batman" class="centro"></a>
<div class="separador1"></div>

<div>
    <a href="camisetas_mujer/robin.php"><img src="../imagenes/camisetas_mujer/robin.jpg" alt="camiseta robin"></a>
    <div class="separador2"></div>
    <a href="camisetas_mujer/hatsune.php"><img src="../imagenes/camisetas_mujer/hatsune.jpg" alt="camiseta hatsune"></a>
    <div class="separador1"></div>
    <a href="camisetas_mujer/anime.php"><img src="../imagenes/camisetas_mujer/anime.jpg" alt="camiseta anime"></a>
    <div class="separador2"></div>
    <a href="camisetas_mujer/bts.php"><img src="../imagenes/camisetas_mujer/bts.jpg" alt="camiseta bts"></a>
    <div class="separador1"></div>
    <a href="camisetas_mujer/bts_jimin.php"><img src="../imagenes/camisetas_mujer/bts_jimin.jpg" alt="camiseta bts jimin"></a>
    <div class="separador2"></div>
    <a href="camisetas_mujer/bts_names.php"><img src="../imagenes/camisetas_mujer/bts_names.jpg" alt="bts names"></a>
</div>

<footer>
    <p>Copyright @Oscrack 2019-2021 powered by digitalcrowd</p>
</footer>
</body>
</html>