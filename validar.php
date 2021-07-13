<?php
$User = $_POST['user'];
$Pass = $_POST['pass'];

    
if($User == "oscar" && $Pass == "oscar1234"){//valido el usuario y password
    session_start(); // Abro la session si fue correcta el usuario y password
    $_SESSION['user'] =  $_POST['user'];// Resivo Dato y creo la Variable de Session Asignando los valores
    echo "<script>window.location.href='login.php';</script>"; // Crea enlace a la siguiente paginas
    }
else{//si no fue correcto lo anterior realiza que vuelva a la pagina de login
    echo "<script> alert('Datos incorrectos vuelva a intentar');";
    echo "window.location.href='index.php';</script>"; }
?>