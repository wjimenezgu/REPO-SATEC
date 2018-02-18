<?php

	require '../../_includes/ctrl_checksession.php';
	
	require '../../_includes/ctrl_headerprn.php';

	require '../../_includes/ctrl_openDB.php';

    require 'model/modelconsultas.php';
    $model = new modelconsultas($con->db);  
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

    $tempFC    	= explode("|", $_GET['selCliente']);
    $idCliente = $tempFC[0];
    $nombreCliente = $tempFC[1];
    

    $datosTienda    = $model->getDatosTienda($idTienda);

    $mvc->assign("DATOS_TIENDA"  , $datosTienda);   ////////AQUI ////////////
    $infoDocCliente = $model->buscarEstadoCtaClienteCxC($idCliente);
    $mvc->assign("LISTA_MOVI", $infoDocCliente);
    $currentDate = date("d/m/Y");
    $mvc->assign("CURRENT_DATE" , $currentDate);
    $mvc->assign("TIT_REPORTE" ,"Estado de Cuenta");
    $mvc->assign("TIT_EXPORT" ,"Estado de Cuenta");
    $mvc->assign("NOMBRE_CLIENTE" ,$nombreCliente);

    $page = $mvc->fetch("repEstadoCuenta.tpl");
    
    require '../../_includes/ctrl_footer.php';
    
?>