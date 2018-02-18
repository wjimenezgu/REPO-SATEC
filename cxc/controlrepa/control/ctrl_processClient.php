<?php

	// Encabezado del control que verificar si la session expiro.
	require '../../_includes/ctrl_checksession.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
	
	// A partir de aca codigo particular del modulo
    require 'model/modelreparaciones.php';
    $model = new modelreparaciones($con->db); 
    
    $clienteId = $_POST["fclienteId"];
    $nombre    = $_POST["fnombre"];
    $contacto  = $_POST["fcontacto"];
    $telefono  = $_POST["ftelefono"];
    $correo    = $_POST["fcorreo"];
    $vendedor  = $_POST["fvendedor"];
    
    if ($clienteId=="0"){
   		$result = $model->inCliente($nombre,$telefono,$correo,$contacto,$vendedor);
    }else{
    	$result = $model->updCliente($clienteId,$nombre,$telefono,$correo,$contacto,$vendedor);
    }

   //echoH $result;
   if($result[0]["message"] == "OK"){
   	if ($clienteId=="0"){
   		// fue una insercion, se debe retornar el numero de cliente que retorno el procedimiento almacenado
   	   $idCliente = $result[0]["idCliente"];
   	   //$idCliente = (string)$idCliente;
   	}else{
   		// fue una modificacion se debe retornar el numero de cliente que se recibio.
   	   $idCliente = $clienteId;
   	}
     echo $idCliente;
     
   }
   else{
   	// hubo un error se retorna -1 para que se le envie un mensaje al usuario
   	echo "-1";
   }
   
?>

