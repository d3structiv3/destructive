<?php
include 'clase.php';

$obj = new CineClase;
$cantidad=$_POST['cantidad'];
$sala=$_POST['salas'];

    echo $obj->getCantidad($sala);
    $obj ->setCantidad($sala,$cantidad);
    echo $obj->getCantidad($sala);
    header('Location:index.php');
       
?>