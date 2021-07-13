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
    <title>camisetas para hombre</title>
    <link rel="stylesheet" href="../css/productos.css">
</head>
<body>
<header>
    <h1>Camisetas para hombre</h1>
    <p>superheroes, artistas, anime</p>
    <a href="../login.php"><h2>pagina principal</h2></a>
</header>

<div class="separador1"></div>
<a href="camisetas_hombre/asuna.php"><img src="../imagenes/camisetas_hombre/asuna.jpg" alt="camiseta asuna" class="centro"></a>
<div class="separador1"></div>

<div>
    <a href="camisetas_hombre/kyku.php"><img src="../imagenes/camisetas_hombre/kyku.jpg" alt="camiseta kyku"></a>
    <div class="separador2"></div>
    <a href="camisetas_hombre/manga.php"><img src="../imagenes/camisetas_hombre/manga.png" alt="camiseta manga"></a>
    <div class="separador1"></div>
    <a href="camisetas_hombre/spiderman.php"><img src="../imagenes/camisetas_hombre/spiderman.jpg" alt="camiseta spiderman"></a>
    <div class="separador2"></div>
    <a href="camisetas_hombre/spiderman_iroman.php"><img src="../imagenes/camisetas_hombre/spiderman_iroman.jpg" alt="camiseta spiderman_iroman"></a>
    <div class="separador1"></div>
    <a href="camisetas_mujer/the_beatles.php"><img src="../imagenes/camisetas_hombre/the_beatles.jpg" alt="camiseta the beatles"></a>
    <div class="separador2"></div>
    <a href="camisetas_hombre/venom.php"><img src="../imagenes/camisetas_hombre/venom.jpg" alt="camiseta venom"></a>
</div>

<footer>
    <p>Copyright @Oscrack 2019-2021 powered by digitalcrowd</p>
</footer>
</body>
</html>