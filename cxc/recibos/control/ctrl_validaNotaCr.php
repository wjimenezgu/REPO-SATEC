<?php

	// Encabezado del control que verificar si la session expiro.
	require '../../_includes/ctrl_checksession.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
	
	// A partir de aca codigo particular del modulo
    require 'model/modelrecibos.php';
    $model = new modelrecibos($con->db);  
    
    $numeroNota  = $_POST["fNumero"];
    $idCliente   = $_POST["fidCliente"];
    $result = $model->validaNotaCr($idCliente,$numeroNota);
    
    echo $result;
   
?>

