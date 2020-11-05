<?php
include 'clase.php';
$obj = new CineClase;



$estado=$obj->getStatus();
echo json_encode(['statuscode' => 200, 'items' => $estado]);
?>