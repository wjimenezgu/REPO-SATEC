<?php
	// Encabezado del control que verificar si la session expiro.
	// si la session expiro se redirecciona a la pantalla de login
	require '../../_includes/ctrl_checksession.php';
	
    session_start();
    error_reporting(E_PARSE);    
    require '../../_config/db/UserConnection.php';          
    $userConnect = new UserConnection($_SESSION["USER_SESSION"], $_SESSION["PWD_USER"] );

    require '../../_config/db/DBConexion.php';
    $con = new DBConexion(1, $userConnect);    

    require 'model/modelrecibos.php';
    $model = new modelrecibos($con->db); 
    
    $tempClie   = explode("|", $_POST['selCliente']);
    $selCliente = $tempClie[0]; // codigo del cliente, en el 1 viene el nombre


    $obs = $_POST['obs'];

    $tempFE      = explode("/", $_POST['fecRecibo']);
    $fecRecibo   = $tempFE[2].'-'.$tempFE[1].'-'.$tempFE[0];

    $montoRecibo = $_POST['montoRecibo'];
    $numero = $_POST['numero'];

    $idTienda = $_POST['idTienda'];

    $RoN = $_POST['RoN'];


    $tableData  = stripcslashes($_POST['pTableData']);

//        echo "<pre>";
//        print_r($_POST);
//        echo "<pre>";        
//exit;    
    
    
	// Decode the JSON array
	$tableData = json_decode($tableData,TRUE);

	// now $tableData can be accessed like a PHP array
	
    if ($RoN == 'R'){	
        $result = $model->aplicaRecibo($selCliente,$numero,$montoRecibo,$obs,$fecRecibo,$idTienda,$tableData);
    }else{
        $result = $model->aplicaNotaCr($selCliente,$numero,$montoRecibo,$obs,$fecRecibo,$idTienda,$tableData);
    }
	if ($result !== "OK"){
   		// Hubo en error inesperado en la operacion en la base de datos.
   		// La variable $result  tiene el mensaje que se le debe
   		// desplegar al usuario  	           
	  	//header("Location: ../../resources/misc/errorMsg.php?errormsg=".$result);
	  	echo $result;
	}         
    echo 'Operacion Exitosa';
    

?>