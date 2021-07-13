<?php

session_start();
//session_register('itemsEnCesta');

$item=$_POST['item'];
$cantidad=$_POST['cantidad'];

$itemsEnCesta=$_SESSION['itemsEnCesta'];

if ($item){
	if (!isset($itemsEnCesta)){
		$itemsEnCesta[$item]=$cantidad;
	}else{
		foreach($itemsEnCesta as $k => $v){
			if ($item==$k){
			  $itemsEnCesta[$k]+=$cantidad;
			  $encontrado=1;
			}
		}
           if (!$encontrado) $itemsEnCesta[$item]=$cantidad;
	}
}

$_SESSION['itemsEnCesta']=$itemsEnCesta;

if(isset($_POST['agregar'])){
    echo "<script> alert('Producto agregado con exito');";
    echo "window.location.href='mujer_camisetas.php';</script>";
}

?>