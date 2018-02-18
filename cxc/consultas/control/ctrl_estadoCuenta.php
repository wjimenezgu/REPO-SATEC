<?php
	require '../../_includes/ctrl_header.php';

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

    $currentDate = date("d/m/Y");
    
    $mvc->assign("CURRENT_DATE" , $currentDate);
    
    $tempFC    	= explode("|", $_GET['selCliente']);
    
    $idCliente = $tempFC[0];
    
    $nombreCliente = $tempFC[1];

    $infoClientes = $model->getAllClientes();
    
    $mvc->assign("LISTA_CLIENTES", $infoClientes);
    
    $mvc->assign("ID_TIENDA"		,$idTienda);
 
    $mvc->assign("NOMBRE_CLIENTE" ,$nombreCliente);
    
    $page = $mvc->fetch("estadoCuenta.tpl");
    
	require '../../_includes/ctrl_footer.php'; 

?>