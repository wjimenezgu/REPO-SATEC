<?php

	// Encabezado del control
	require '../../_includes/ctrl_header.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';
		
   // A partir de aca codigo particular al modulo.

    require 'model/model.php';
    $model = new model($con->db);       
    
    // Se valida las opciones que el usuario puede ver
    require '../../_includes/ctrl_opthide.php';    
    
   // hasta aqui codigo agregadoci

    $RoN   = $_GET["RoN"];
    
    $mvc->setModule("pagos");
    if(isset($_SESSION["TIENDA_ID"])){
    	$idTienda   = $_SESSION["TIENDA_ID"];
    	$nameTienda = $_SESSION["TIENDA_NOMBRE"];
    }else {
    	$nickname = $_SESSION["USER_SESSION"];
    	$infoTienda = $model->getTiendaLocal($nickname);
    	$_SESSION["TIENDA_ID"]     = $infoTienda[0]["codTienda"];
    	$_SESSION["TIENDA_NOMBRE"] = $infoTienda[0]["nameTienda"];
    	$nameTienda = $infoTienda[0]["nameTienda"];
    	$idTienda   = $infoTienda[0]["codTienda"];
    }    
    
    if ($RoN == 'R'){
        $mvc->assign("DESC_MOV","Ingreso de Pagos");
    }else{
        $mvc->assign("DESC_MOV","Ingreso de Notas de Credito");
        
    }
    $mvc->assign("TIPO_MOV",$RoN);

    $currentDate = date("d/m/Y");
    $mvc->assign("CURRENT_DATE" , $currentDate);
   
    $infoClientes = $model->getAllClientes();
  
    $infoTipoDocumentos = $model->getTipoDocumentos();

     
    $mvc->assign("LISTA_CLIENTES", $infoClientes);
    $mvc->assign("LISTA_TIPODOCS", $infoTipoDocumentos);
    
    $mvc->assign("ID_TIENDA"		,$idTienda);

 
    $page = $mvc->fetch("ingreso.tpl");
    
    // Pie del control
	require '../../_includes/ctrl_footer.php'; 

?>