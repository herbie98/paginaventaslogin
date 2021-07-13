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
    <title>index</title>
</head>
<body>
    <header>
        <h2>bienvenido usuario: <?php echo $User;?></h2><br>
        <a href="index.php"><h2>cerrar sesion</h2></a><br>
        <a href="productos/compras.php"><h2>carrito de compras</h2></a><br>
    </header>
    <section>
        <a href="productos/mujer_camisetas.php"><h3>camisetas para mujer</h3></a><br>
        <a href="productos/hombre_camisetas.php"><h3>camisetas para hombre</h3></a><br>
        <a href="productos/nene_camisetas.php"><h3>camisetas para nenes</h3></a><br>
    </section>
    <footer>
        <p>Copyright @Oscrack 2019-2021 powered by digitalcrowd</p>
    </footer>
</body>
</html>