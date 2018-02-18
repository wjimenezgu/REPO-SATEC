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

 
     /*echo "<pre>";
     print_r($_GET);
     echo "<pre>";
     exit;*/
 
    $tempCl     = explode("|", $_GET['selCliente']);
    $idCliente  = $tempCl[0];
    $nombreCliente = $tempCl[1];
    $tipodoc = $_GET['tipodoc'];
    $Criterio = $_GET['criterio'];
    $tempFC     = explode("/", $_GET["fechaI"]);
    $fechaI = "$tempFC[2]-$tempFC[1]-$tempFC[0]";
    $tempFC     = explode("/", $_GET["fechaF"]);
    $fechaF = "$tempFC[2]-$tempFC[1]-$tempFC[0]";
   
    $datosTienda    = $model->getDatosTienda(0);
    $infoRecibos = $model->buscarRecibosCxC($idCliente,$tipodoc,$Criterio,$fechaI,$fechaF);
   
    $mvc->assign("LISTA_MOVI", $infoRecibos);
    $currentDate = date("d/m/Y");
    $mvc->assign("DATOS_TIENDA",$datosTienda);
    $mvc->assign("CURRENT_DATE" , $currentDate);
    $mvc->assign("FECHA_INICIO", $_GET["fechaI"]);
    $mvc->assign("FECHA_FINAL", $_GET["fechaF"]);
    $mvc->assign("TIT_REPORTE" ,"Documentos CxC");
    $mvc->assign("TIT_EXPORT" ,"Documentos  CxC");
    $mvc->assign("NOMBRE_CLIENTE" ,$nombreCliente);
              
    $page = $mvc->fetch("repRecibos.tpl");
    
    // Pie del control
    require '../../_includes/ctrl_footer.php';
    
?>