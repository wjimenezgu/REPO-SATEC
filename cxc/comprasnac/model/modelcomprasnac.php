<?php

class modelcomprasnac {
    
    public function __construct(&$db) {       
        $this->db = $db;
    }
    
    function getProveedor() {       
        
        $sql = "CALL spGetProveedor(1, @out_status);";        
        $result = $this->db->Execute($sql);   

        $data = $result->getArray();            
        $result->Close();

        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);                
        
        $data = $rs->getArray();            
        echo "<pre>";
        print_r($data);
        echo "<pre>";        
        
        $rs->Close();        
    }
        
    function getAllProveedores() {
        
        $sqlx            = "call spGetAllProveedoresNac(@out_status);"; 

        $result          = $this->db->Execute($sqlx);
        $listProveedores = $result->getArray();     
        $result->Close();
          
        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);        
        
        $status = $rs->getArray();
        
        if($status[0]["message"] == "OK"){
            $data = $listProveedores;
        }else{
            $data = array();
        }
        
        return $data;    
    }
    
    function getAllOpcionesPago() {
        
        $sqlx        = "call spGetAllOpcionesPago(@out_status);"; 

        $result      = $this->db->Execute($sqlx);
        $listOptPago = $result->getArray();     
        $result->Close();
          
        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);        
        
        $status = $rs->getArray();
        
        if($status[0]["message"] == "OK"){
            $data = $listOptPago;
        }else{
            $data = array();
        }
        
        return $data;    
    }
    
    function getAllMonedas() {
        
        $sqlx        = "call spGetAllMonedas(@out_status);"; 
        
        $result      = $this->db->Execute($sqlx);
        $listMonedas = $result->getArray();     
        $result->Close();
        
        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);        
        
        $status = $rs->getArray();
        
        if($status[0]["message"] == "OK"){
            $data = $listMonedas;
        }else{
            $data = array();
        }
        
        return $data;            
    }
    
    function getAllCompromisos() {
        $sqlx        = "call spGetAllCompromisos(@out_status);"; 
        
        $result          = $this->db->Execute($sqlx);
        $listCompromisos = $result->getArray();     
        $result->Close();
        
        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);        
        $status = $rs->getArray();
        
        if($status[0]["message"] == "OK"){
            $data = $listCompromisos;
        }else{
            $data = array();
        }
        
        return $data;           
    }
    
    function getAllDirEnvio() {

        $sqlx         = "call spGetAllDirEnvioMer(@out_status);"; 
        
        $result       = $this->db->Execute($sqlx);
        $listDirEnvio = $result->getArray();     
        $result->Close();
        
        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);        
        $status = $rs->getArray();
        
        if($status[0]["message"] == "OK"){
            $data = $listDirEnvio;
        }else{
            $data = array();
        }
        
        return $data;          
        
    }
    
    function getAllDirDocs() {

        $sqlx         = "call spGetAllDirEnvioDoc(@out_status);"; 
        
        $result       = $this->db->Execute($sqlx);
        $listDirDocs  = $result->getArray();     
        $result->Close();
        
        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);        
        $status = $rs->getArray();
        
        if($status[0]["message"] == "OK"){
            $data = $listDirDocs;
        }else{
            $data = array();
        }
        
        return $data;          
        
    }
    
    function getAllTarjetas() {

        $sqlx         = "call spGetAllTarjetas(@out_status);"; 
        
        $result       = $this->db->Execute($sqlx);
        $listTarjetas = $result->getArray();     
        $result->Close();
        
        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);        
        $status = $rs->getArray();
        
        if($status[0]["message"] == "OK"){
            $data = $listTarjetas;
        }else{
            $data = array();
        }
        
        return $data;          
        
    }
    
    function getTarjeta($idTarjeta) {
    
    	$sqlx         = "call spGetTarjeta($idTarjeta,@out_status);";
    
    	$result       = $this->db->Execute($sqlx);
    	$Tarjeta = $result->getArray();
    	$result->Close();
    
    	$sql2 = "SELECT @out_status as message";
    	$rs = $this->db->Execute($sql2);
    	$status = $rs->getArray();
    
    	if($status[0]["message"] == "OK"){
    		$data = $Tarjeta;
    	}else{
    		$data = array();
    	}
    
    	return $data;
    
    }    
    
    function getInfoProveedor($idProveedor) {
        
        $sql           = "call spGetProveedor('$idProveedor', @out_status);";              
        $result        = $this->db->Execute($sql);
        $infoProveedor = $result->getArray(); 
        $result->Close();

        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);        
        
        $status = $rs->getArray();
        
        if($status[0]["message"] == "OK"){
            if (sizeof($infoProveedor) > 0) {
                
                $data = $infoProveedor;
            
            }else {
                $data = array();    
            }
        }else{
            $data = array();
        }

        return $data;         
    }              
    
  
    function getCodInternos($idProveedor) {
        
        //$sql       = "call spGetArtiProveedor('$idProveedor', '$codArticulo', @out_status);";              
        $sql       = "call spAllArtiProveedor('$idProveedor', @out_status);";              
        $result    = $this->db->Execute($sql);
        $listCodes = $result->getArray(); 
        $result->Close();
        
        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);        
        
        $status = $rs->getArray();
        
        if($status[0]["message"] == "OK"){
            if (sizeof($listCodes) > 0) {
                
                $listByCode   = array();
                $listByCodPro = array();
                $listByName   = array();
                foreach ($listCodes as $dato){

                    $info1["label"]       = $dato["CodArti"];
                    $info1["CodArtiPro"]  = $dato["CodArtiPro"];
                    $info1["DesArticulo"] = $dato["DesArticulo"];

                    $info2["label"]       = $dato["DesArticulo"];
                    $info2["CodArtiPro"]  = $dato["CodArtiPro"];
                    $info2["CodArti"]     = $dato["CodArti"];
                    
                    $info3["label"]       = $dato["CodArtiPro"];
                    $info3["CodArti"]     = $dato["CodArti"];
                    $info3["DesArticulo"] = $dato["DesArticulo"];

                    array_push($listByCode,   $info1);
                    array_push($listByName,   $info2);
                    array_push($listByCodPro, $info3);
                }

                $data[0] = $listByCode;
                $data[1] = $listByName;
                $data[2] = $listByCodPro;
            
            }else {
                $data = array();    
            }
        }else{
            $data = array();
        }

        return $data;         
    }
    
  
    function saveEncabezadoPedido($pidProveedor, $pnumOrdenCompra, $pidMoneda, $pfecCreacion, $pfecEmbarque, $psubTotal, 
                                  $pcostoEnvio, $petiquetaOC, $potrosCostos, $paceptaParciales, $pidOpcionPago, $pcomentarios, 
                                  $pmarks, $ppacking, $pshipvia, $pDirEnvio, $pDirDocs, $pTipTarjeta) {
  
        $sql           = "call spInsPedido($pidProveedor, '$pnumOrdenCompra', '$pidMoneda', '$pfecCreacion', '$pfecEmbarque', $psubTotal, $pcostoEnvio, "
                       . "'$petiquetaOC', $potrosCostos, '$paceptaParciales', $pidOpcionPago, '$pcomentarios', '$pmarks', '$ppacking', '$pshipvia', $pDirEnvio, $pDirDocs, $pTipTarjeta,  @out_idPedido, @out_status);";

        $result        = $this->db->Execute($sql);
        $result->Close();

        $sql2 = "SELECT @out_idPedido as idPedido, @out_status as message";
        $rs = $this->db->Execute($sql2);                
        $status = $rs->getArray();
        $result->Close();
        
        if($status[0]["message"] == "OK"){
            $idPedido = $status[0]["idPedido"];
            $sql   = "call spInsPedidoEvento($idPedido,1,'SISTEMA',@out_status);";
            $resul = $this->db->Execute($sql);
            $resul->Close();
        }else{
            $idPedido = 0;
        }

        return $idPedido;        
        
    }
    
    function saveDetallePedido($idPedido, $numLine, $codInterno, $nameArticle, $codProveedor, $cant, $costUnit, $pfecRecibido, $typeRef, $numRef, $detRef,$whr,$trackNo, $fechaEstArribo, $cantRecibida, $comentRecepcion){        
        
        $sql           = "call spInsDetallePedido($idPedido, $numLine, '$codInterno', '$nameArticle', '$codProveedor', $cant, $costUnit, "
                       . "$pfecRecibido, $typeRef, '$numRef', '$detRef', '$whr','$trackNo', '$fechaEstArribo', '$cantRecibida', '$comentRecepcion',NULL,NULL,@out_status);";         

        $result        = $this->db->Execute($sql);
        $result->Close();

        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);                
        $status = $rs->getArray();
        $result->Close();
        $message = $status[0]["message"];    
        return $message;        
                
    }

    
    function updateEncabezadoPedido($pidPedido, $pidProveedor, $pnumOrdenCompra, $pidMoneda, $pfecCreacion, $pfecEmbarque, $psubTotal, 
                                    $pcostoEnvio, $petiquetaOC, $potrosCostos, $paceptaParciales, $pidOpcionPago, $pcomentarios, 
                                    $pmarks, $ppacking, $pshipvia, $pDirEnvio, $pDirDocs, $pTipTarjeta) {
  
        $sql           = "call spModPedido($pidPedido, $pidProveedor, '$pnumOrdenCompra', '$pidMoneda', '$pfecCreacion', '$pfecEmbarque', $psubTotal, $pcostoEnvio, "
                       . "'$petiquetaOC', $potrosCostos, '$paceptaParciales', $pidOpcionPago, '$pcomentarios', '$pmarks', '$ppacking', '$pshipvia', $pDirEnvio, $pDirDocs, $pTipTarjeta, @out_status);";
 //echo $sql;exit;              
        $result        = $this->db->Execute($sql);
        $result->Close();

        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);                
        $status = $rs->getArray();
        $result->Close();
        
        if($status[0]["message"] == "OK"){
            $result = 1;    
        }else{
            $result = 0;
        }
        
        if($status[0]["message"] == "OK"){
            $sql   = "call spInsPedidoEvento($pidPedido,5,'SISTEMA',@out_status);";
            $resul = $this->db->Execute($sql);
            $resul->Close();
        }else{
            $result = 0;
        }
        
        

        return $result;        
        
    }    

    function updateDetallePedido($idPedido, $numLine, $codInterno, $nameArticle, $codProveedor, $cant, $costUnit, $pfecRecibido, $typeRef, $numRef, $detRef){        
        
        $sql           = "call spModDetallePedido($idPedido, $numLine, '$codInterno', '$nameArticle', '$codProveedor', $cant, $costUnit, "
                       . "$pfecRecibido, 1, '$numRef', '$detRef', @out_status);";
                
        $result        = $this->db->Execute($sql);
        $result->Close();

        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);                
        $status = $rs->getArray();
        $result->Close();
        
        if($status[0]["message"] == "OK"){
            $message = $status[0]["message"];    
        }else{
            $message = "ERROR";
        }

        return $message;        
                
    }  
    
    
    function delDetallePedido($idPedido) {
        
        $sql           = "call spDelDetallePedido($idPedido, @out_status);";                
        $result        = $this->db->Execute($sql);
        $result->Close();

        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);                
        $status = $rs->getArray();
        $result->Close();
        
        if($status[0]["message"] == "OK"){
            $message = $status[0]["message"];    
        }else{
            $message = "ERROR";
        }

        return $message;        
    }
    
    
    function saveNewArticulo($codInterno, $nameArticulo, $codProveedor,$idProveedor) {
    
    	$sql           = "call spInsArticulo('$codInterno', '$nameArticulo', '$codProveedor',$idProveedor, @out_status);";
// echo $sql;exit;
    	$result        = $this->db->Execute($sql);
    	$result->Close();
    
    	$sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);
        $status = $rs->getArray();
    	$result->Close();
    
    	return $status;
    
    }
    
    function getInfoArtiByCod($idProveedor, $codArticulo) {
  
        $sqlx         = "call spCodArtixProveedor($idProveedor, '$codArticulo', @out_status);"; 

        $result       = $this->db->Execute($sqlx);
        $infoArticulo = $result->getArray();     
        $result->Close();
          
        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);        
        
        $status = $rs->getArray();
        
        if($status[0]["message"] == "OK"){
            $data = $infoArticulo;
        }else{
            $data = array();
        }
        
        return $data;            
        
    }    
    
    function getInfoArtiByCodPro($idProveedor, $codProArticulo) {
  
        $sqlx         = "call spCodProArtixProveedor($idProveedor, '$codProArticulo', @out_status);"; 

        $result       = $this->db->Execute($sqlx);
        $infoArticulo = $result->getArray();    

        $result->Close();
          
        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);        
        
        $status = $rs->getArray();
        
        if($status[0]["message"] == "OK"){
            $data = $infoArticulo;
        }else{
            $data = array();
        }
        
        return $data;            
        
    }    

    
    function getAllComprasNac($criterio) {
        
        $sqlx       = "call spGetAllPedidosNac('$criterio',@out_status);"; 
        $result     = $this->db->Execute($sqlx);
        $allPedidos = $result->getArray(); 
        
        $result->Close();
          
        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);        
        $status = $rs->getArray();
        
        if($status[0]["message"] == "OK"){
            $data = $allPedidos;
        }else{
            $data = array();
        }
        
        return $data;          
        
    }
    
    function getArticulo($criterio,$valor) {
    
    	$sql = "call spGetArtiTomaFisica('$criterio','$valor',@codArti,@codArtiProveedor,@codigoBarras,@desArticulo,@artiExiste,@out_status);";
    	//echo $sql;exit;
    	$rs = $this->db->Execute($sql);
    	// la instruccion ejecutada no retorna un recordset, 
    	// por lo que no hace falta ejecutar la siguiente instruccion.
    	// esa es solo necesaria cuando lo que se retorna es un recordset.
    	// se deja aqui como referencia, pues se ha venido copiando los llamados coomo si todos fueran igual.
    	//$data = $rs->getArray();
    
    	$rs->Close();
    
    	$sql = "SELECT @codArti as codArti, @codArtiProveedor as codArtiProveedor, @codigoBarras as codigoBarras,@desArticulo as desArticulo,@artiExiste as artiExiste,@out_status as message";
    	$rs = $this->db->Execute($sql);
    
    	$status = $rs->getArray();
    	$rs->Close();
    	 
    	$message = $status[0]["message"].'|'.$status[0]["codArti"].'|'.$status[0]["codArtiProveedor"].'|'.$status[0]["codigoBarras"].'|'.$status[0]["desArticulo"].'|'.$status[0]["artiExiste"];
    
    	return $message;
    
    }
    
    
    function getHeaderPedido($idPedido) {
        
        $sqlx       = "call spGetEncabezadoPedido($idPedido, @out_status);"; 
        $result     = $this->db->Execute($sqlx);
        $infoPedido = $result->getArray();        
        $result->Close();
        
        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);        
        $status = $rs->getArray();        
        if($status[0]["message"] == "OK"){
            $data = $infoPedido[0];
        }else{
            $data = array();
        }
        
        return $data;        
    }
    
    function getDetallePedido($idPedido) {
        
        $sql       = "call spGetDetallePedido($idPedido, @out_status);";                
        $result    = $this->db->Execute($sql);
        $detPedido = $result->getArray();
        $result->Close();

        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);                
        $status = $rs->getArray();
        $result->Close();
        
        if($status[0]["message"] == "OK"){
            $dataPedido = $detPedido;    
        }else{
            $dataPedido = 0;    
        }

        return $dataPedido;
    }
  
	function getDetallePedidoGrupo($idPedido) {
        
        $sql       = "call spGetDetallePedidoGrupo($idPedido, @out_status);";                
        $result    = $this->db->Execute($sql);
        $detPedido = $result->getArray();
        $result->Close();

        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);                
        $status = $rs->getArray();
        $result->Close();
        
        if($status[0]["message"] == "OK"){
            $dataPedido = $detPedido;    
        }else{
            $dataPedido = 0;    
        }

        return $dataPedido;
    }
      
    
    function delPedido($idPedido) {
  
        $sql           = "call spDelPedido($idPedido, @out_status);";                
        $result        = $this->db->Execute($sql);
        $result->Close();

        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);                
        $status = $rs->getArray();
        $result->Close();
        
        if($status[0]["message"] == "OK"){
            $message = $status[0]["message"];    
        }else{
            $message = "ERROR";
        }

        return $message;        
        
    }

    
    function getAllTiposDocs() {
                
        $sqlx        = "call spGetAllTipoDocumentos(@out_status);"; 

        $result      = $this->db->Execute($sqlx);
        $listDocs = $result->getArray();     
        $result->Close();
          
        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);        
        
        $status = $rs->getArray();
        
        if($status[0]["message"] == "OK"){
            $data = $listDocs;
        }else{
            $data = array();
        }
        
        return $data;         
        
    }


    function getTipoDocumento($idDoc) {
    
        
    	$sqlx         = "call spGetTipoDocumento($idDoc,@out_status);";    
    	$result       = $this->db->Execute($sqlx);
    	$tipoDocumento = $result->getArray();
    	$result->Close();
    
    	$sql2 = "SELECT @out_status as message";
    	$rs = $this->db->Execute($sql2);
    	$status = $rs->getArray();
    
    	if($status[0]["message"] == "OK"){
                        $data = $tipoDocumento[0];
    	}else{
                        $data = array();
    	}
    
    	return $data;        
        
    }
 
    function getAllUserOptHide($userName){
		$sql = "call spGetOptHide('$userName',@out_status);";

        $rs = $this->db->Execute($sql);

        $data = $rs->getArray();
        $rs->Close();
        return $data;        
    	
    }

    
    function savePedidoNac($action,$idPedido,$idProveedor,
    					   $numFac,$fecFac,$formaPago,$tCambio,$gravado,$impuesto,$descuento,$total,
    					   $item,$codArti,$cant,$cost) {
    	//Procesar todos los registro del arreglo
    	// Los elementos del arreglo son: IdLinea, Codigo, Desc, Costo, Canti
    	//
    	    	
    	// Se inicializa la variable message con OK.
    	$message='OK';
    	
    	switch ($action){
    		case '1':    	
    			// si es insertar pedido se inserta el pedido
    			$sql    = "call spInsPedidoNac($idProveedor,@out_idPedido,@out_status);";
    			$result = $this->db->Execute($sql);
    			$result->Close();
    		
	    		$sql     = "SELECT @out_idPedido as idPedido, @out_status as message";
	    		$rs      = $this->db->Execute($sql);
	    		$status  = $rs->getArray();
	    		$result->Close();
	    		if($status[0]["message"] == "OK"){
	    			$idPedido = $status[0]["idPedido"];
	    		}else{
	    			// hubo un error inesperado
	    			$message = $status[0]["message"];
	    			return $mesage;
	    		}
	    		break;
    		case '2':
    			// modificar pedido que no se ha recibido la mercaderia.
    			// lo unico que se puede cambiar es el proveedor
    			$sql    = "call spModPedidoNac($idPedido,$idProveedor,@out_status);";
    			$result = $this->db->Execute($sql);
    			$result->Close();
    			
    			$sql     = "SELECT @out_status as message";
    			$rs      = $this->db->Execute($sql);
    			$status  = $rs->getArray();
    			$result->Close();
    			if($status[0]["message"] != "OK"){
    				// hubo un error inesperado
    				$message = $status[0]["message"];
    				return $mesage;
    			}
    			// como es modificación se borrar el detalle para luego volver a insertalo
    			$sql = "call spDelDetPedidoNac($idPedido,@out_status);";
    			$result = $this->db->Execute($sql);
    			$result->Close();
    			 
    			$sql     = "SELECT @out_status as message";
    			$rs      = $this->db->Execute($sql);
    			$status  = $rs->getArray();
    			$result->Close();
    			if($status[0]["message"] != "OK"){
    				// hubo un error inesperado
    				$message = $status[0]["message"];
    				return $mesage;
    			}
    			break;
    		case '5': // se recibe el pedido
    			// Se actualizan todos los datos del pedido y se le cambio el estado    			
    			
    			$sql    = "call spModPedidoNacReci($idPedido,$idProveedor,
    											   $total,$impuesto,'',$formaPago,'$numFac','$fecFac',$tCambio,$gravado,$descuento,
    			                                   @out_status);";
//echo $sql;exit;
    			$result = $this->db->Execute($sql);
    			$result->Close();
    			 
    			$sql     = "SELECT @out_status as message";
    			$rs      = $this->db->Execute($sql);
    			$status  = $rs->getArray();
    			$result->Close();
    			if($status[0]["message"] != "OK"){
    				// hubo un error inesperado
    				$message = $status[0]["message"];
    				return $mesage;
    			}
    			// es mas facil borrar el detalle y volverlo a insertar
    			$sql = "call spDelDetPedidoNac($idPedido,@out_status);";
    			$result = $this->db->Execute($sql);
    			$result->Close();
    			
    			$sql     = "SELECT @out_status as message";
    			$rs      = $this->db->Execute($sql);
    			$status  = $rs->getArray();
    			$result->Close();
    			if($status[0]["message"] != "OK"){
    				// hubo un error inesperado
    				$message = $status[0]["message"];
    				return $mesage;
    			}
    			break; 

    		case '7': // Anular Pedido
    				// Se le cambio el estado
    				 
    				$sql    = "call spAnulaPedidoNac($idPedido,@out_status);";
    				//echo $sql;exit;
    				$result = $this->db->Execute($sql);
    				$result->Close();
    			
    				$sql     = "SELECT @out_status as message";
    				$rs      = $this->db->Execute($sql);
    				$status  = $rs->getArray();
    				$result->Close();
    				if($status[0]["message"] != "OK"){
    					// hubo un error inesperado
    					$message = $status[0]["message"];
    					return $mesage;
    				}
    			break;	 
    			   			
    	} // switch $action	
    	   	
    	$i=0;
    	 
    	foreach($item as $key => $value){
    		$vcodArti = $codArti[$key];
    		$vcant    = $cant[$key];
    		$vcost    = $cost[$key];
    		$vitem    = $item[$key];
    		$i=$i+1;
    		$sql = "call spInsDetPedidoNac($idPedido,$i,'$vcodArti','$vitem',$vcant,$vcost,@out_status);";
   			$rs = $this->db->Execute($sql);   			
   			$rs->Close();    		
    		$sql = "SELECT @out_status as message";
    		$rs = $this->db->Execute($sql);
    		$status = $rs->getArray();
    		$rs->Close();
    		$message = $status[0]["message"];
    		if ($message !== 'OK'){
    			// Hubo en error inesperado en la operacion en la base de datos.
    			// La variable $result  tiene el mensaje que se le debe
    			// desplegar al usuario    	    		
    			return $message;
    		}
    	} // foreach
    // Si todo fue exitoso, la variable message trae el valor OK
    return $message;
    }// function savePedidoNac
     
  
    function buscarEncPedidoNac($idPedido) {
    	 
    	$sql = "call spGetEncPedidoNac($idPedido,@out_status);";
    	//echo $sql;exit;
    	$rs = $this->db->Execute($sql);
    
    	$data = $rs->getArray();
    	$rs->Close();
    	return $data;
    	 
    }
    
    function buscarDetPedidoNac($idPedido) {
    	 
    	$sql = "call spGetDetPedidoNac($idPedido,@out_status);";
    	//echo $sql;exit;
    	$rs = $this->db->Execute($sql);
    
    	$data = $rs->getArray();
    	$rs->Close();
    	return $data;
    
    }
    
    
    function getAllOptHide($userName) {    	  	
        $sql = "call spGetOptHide('$userName',@out_status);";
        $rs = $this->db->Execute($sql);
      	$data = $rs->getArray();
		$rs->Close();
    	return $data;        
    }
    
    
    function getDatosTienda($idTienda){
    	$sql = "call spGetDatosTienda($idTienda,@out_status);";
    	$rs = $this->db->Execute ($sql);
    	$data = $rs->getArray();
    	$rs->Close();
    	return $data;
    }
    
    function getPorceIV(){
    	$sql = "call spGetPorceIV(@out_status);";
    	$rs = $this->db->Execute ($sql);
    	$data = $rs->getArray();
    	$rs->Close();
    	return $data;
    }
  
  
}

?>