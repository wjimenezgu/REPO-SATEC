<?php

	// Encabezado del control que verificar si la session expiro.
	require '../../_includes/ctrl_checksession.php';
	
	// Encabezado del control
	require '../../_includes/ctrl_headerprn.php';

	// Se abra la conexion a la BD.
	require '../../_includes/ctrl_openDB.php';

    require 'model/modelconsultas.php';
    $model = new modelconsultas($con->db);  
    // Se valida las opciones que el usuario puede ver
    require '../../_includes/ctrl_opthide.php';    
        
    $mvc->setModule("consultas");
    
    
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

  /*
     echo "<pre>";
     print_r($_GET);
     echo "<pre>";
     exit;
 */
 
   // $selCliente = $_GET['selCliente'];
    $tempFC    	= explode("|", $_GET['selCliente']);
    $idCliente = $tempFC[0];
    $nombreCliente = $tempFC[1];
    
    $tableData = stripcslashes($_GET['pTableData']);
    
    // Decode the JSON array
    $tableData = json_decode($tableData,TRUE);
    
    
    $datosTienda    = $model->getDatosTienda($idTienda);
    $mvc->assign("DATOS_TIENDA"  , $datosTienda);
    
    $conseFacTramitar = $model->getConsecTramitar($idTienda);
    

    $mvc->assign("LISTA_MOVI", $tableData);
    $currentDate = date("d/m/Y");
    $mvc->assign("CURRENT_DATE" , $currentDate);
    
    $mvc->assign("TIT_REPORTE" ,"Tramite de Facturas: ".$conseFacTramitar);
    $mvc->assign("TIT_EXPORT" ,"acturas para Tramitar");
    $mvc->assign("NOMBRE_CLIENTE" ,$nombreCliente);
              
    $page = $mvc->fetch("repFactTramitar.tpl");
    
    // Pie del control
    require '../../_includes/ctrl_footer.php';
    

?>