<?php

	// Encabezado del control que verificar si la session expiro.
	require '../../_includes/ctrl_checksession.php';
	
	// Encabezado del control
	require '../../_includes/ctrl_headerprn.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';

    require 'model/model.php';
    $model = new model($con->db);  
    // Se valida las opciones que el usuario puede ver
    require '../../_includes/ctrl_opthide.php';    
        
    $mvc->setModule("pagos");

/*
     echo "<pre>";
     print_r($_POST);
     echo "<pre>";
     exit;
  */ 

    
    //$selCliente 		= $_POST["selCliente"];
    $tempFC    	= explode("|", $_POST['selCliente']);
    $selCliente = $tempFC[0];
    

    $infoFactCliente 	= $model->buscarNotasCliente($selCliente);


  
            
    $mvc->assign("LISTA_NOTASCLIENTE", $infoFactCliente); 
              
    $mvc->display("listaNotasAplicar.tpl");
    
    // Pie del control
    require '../../_includes/ctrl_footer.php';
   

?>