<?php

class modelrecibos{
    public function __construct(&$db) {
        $this->db = &$db;
    }

    // Funcion para apagar las opciones que el usuario no puede ver.
    function getAllOptHide($userName) {
        $sql = "call spGetOptHide('$userName',@out_status);";
        $rs = $this->db->Execute($sql);
        $data = $rs->getArray();
        $rs->Close();
        return $data;
    }
    
    
    function GetFieldHide($userName,$fieldName) {
    
        $sql = "call spGetFieldHide('$userName', '$fieldName',@SiNo, @out_status);";
        $rs = $this->db->Execute($sql);
        $rs->Close();
    
        $sql = "SELECT @SiNo as SiNo, @out_status as message";
        $rs = $this->db->Execute($sql);
        $status = $rs->getArray();
        $rs->Close();
    
        $message = $status[0]["message"];
    
        if($message == "OK"){
            $data = $status[0]["SiNo"];
        }else{
            $data = 'N';
        }
    
        return $data;
    }
    
    
    function getConsecTramitar($codTienda){
    
        $sql = "call spConsecFacTramitar($codTienda,@out_consecTramitar,@out_status);";
    
        $rs = $this->db->Execute($sql);
        $rs->Close();
    
        $sql = "SELECT @out_consecTramitar as consecTramitar, @out_status as message";
        $rs = $this->db->Execute($sql);
        $status = $rs->getArray();
        $rs->Close();
         
        if($status[0]["message"] == "OK"){
                $consecTramitar = $status[0]["consecTramitar"];
            }else{
                $consecTramitar = 0;
            }

            return $consecTramitar;      
    }
     

    function getAllTiendas(){
            $sql = "call spGetAllTiendas(@out_status);";
            $rs = $this->db->Execute ($sql);
            $data = $rs->getArray();
            $rs->Close();
            return $data;
    }
    
    function getTiendaLocal($userName) {
    
        $sql = "call spGetTiendaLocal('$userName', @codtienda , @pNombreTiendaLocal, @out_status);";
        $this->db->Execute($sql);
    
        $sql2 = "SELECT @codtienda as codTienda, @pNombreTiendaLocal as nameTienda";
        $rs = $this->db->Execute($sql2);
    
        $data = $rs->getArray();
    
        //$codTienda = $rs->fields["codTienda"];
    
        return $data;
    }
    
    function getDatosTienda($idTienda){
        $sql = "call spGetDatosTienda($idTienda,@out_status);";
        $rs = $this->db->Execute ($sql);
        $data = $rs->getArray();
        $rs->Close();
        return $data;
    }
    
    
    function getFactuPeriodo($idTienda,$fechaI,$fechaF){
        $sql = "call spGetFactuPeriodo($idTienda,'$fechaI','$fechaF',@out_status);";
        $rs = $this->db->Execute ($sql);
        $data = $rs->getArray();
        $rs->Close();
        return $data;
    }
    
    function getAllClientes(){
        $sql = "call spGetAllClientesFacCxC(@out_status);";
        $rs = $this->db->Execute ($sql);
        $data = $rs->getArray();
        $rs->Close();
        return $data;
    }
    
    
    function getTotalesFactuPeriodo($idTienda,$fechaI,$fechaF){
        $sql = "call spGetTotalesFactuPeriodo($idTienda,'$fechaI','$fechaF',@out_status);";
        $rs = $this->db->Execute ($sql);
        $data = $rs->getArray();
        $rs->Close();
        return $data;
    }
    
    function getSoloTotalesFactuPeriodo($idTienda,$fechaI,$fechaF){
        $sql = "call spGetSoloTotalesFactuPeriodo($idTienda,'$fechaI','$fechaF',@out_status);";
        $rs = $this->db->Execute ($sql);
        $data = $rs->getArray();
        $rs->Close();
        return $data;
    }

    function getNotaPeriodo($idTienda,$fechaI,$fechaF){
        $sql = "call spGetNotaPeriodo($idTienda,'$fechaI','$fechaF',@out_status);";
        $rs = $this->db->Execute ($sql);
        $data = $rs->getArray();
        $rs->Close();
        return $data;
    }
    
    function getTotalesNotaPeriodo($idTienda,$fechaI,$fechaF){
        $sql = "call spGetTotalesNotaPeriodo($idTienda,'$fechaI','$fechaF',@out_status);";
        $rs = $this->db->Execute ($sql);
        $data = $rs->getArray();
        $rs->Close();
        return $data;
    }
    
    
    function getAllItems() {
    
        $sqlx       = "call spGetItemsList(@out_status);";
        $result     = $this->db->Execute($sqlx);
        $allItems = $result->getArray();
    
        $result->Close();
    
        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);
        $status = $rs->getArray();
    
        if($status[0]["message"] == "OK"){
            $data = $allItems;
        }else{
            $data = array();
        }
    
        return $data;
            
    }
    
    function buscarProducto($criterio, $texto) {
    
        $descripcion = "NULL";
        $idCodigo    = "NULL";
        $codigoExterno = "NULL";
    
        if ($criterio == "nombre"){
            $descripcion = "'$texto'";
        }elseif($criterio == "codigo") {
            $idCodigo    = "'$texto'";
        }else {$codigoExterno = "'$texto'";
        }
         
        $sql = "call spGetArticuloFiltro($idCodigo,$descripcion,$codigoExterno,@out_status);";
    
        $rs = $this->db->Execute($sql);
    
        $data = $rs->getArray();
    
        return $data;
    
    }


    function buscarAntiguedadCobrosCxC($tipoCli,$estadoCli,$fechaI){
        $sql = "call spGetAntigSaldoCxC($tipoCli,$estadoCli,'$fechaI',@out_status);";
        //echo $sql ;exit;
    
        $rs = $this->db->Execute($sql);
    
        $data = $rs->getArray();
    
        $rs->Close();
        return $data;
    }
    



      function getAllEstClientes(){
        $sql = "call spGetAllEstadoCliCxC(@out_status);";
        $rs = $this->db->Execute ($sql);
        $data = $rs->getArray();
        $rs->Close();
        return $data;
    }


       function getTipoClientes(){
        $sql = "call spGetAllTipoCliCxC(@out_status);";
        $rs = $this->db->Execute ($sql);
        $data = $rs->getArray();
        $rs->Close();
        return $data;
    }

    
    function buscarExistencias($tienda,$fechaCorte,$criterio, $texto) {
    
        $descripcion = "NULL";
        $idCodigo    = "NULL";
        $codigoExterno = "NULL";
    
        if ($criterio == "nombre"){
            if (strlen($texto) != 0) {
                $descripcion = "'$texto'";
            }
        }elseif($criterio == "codigo") {
            if (strlen($texto) != 0) {
                $idCodigo    = "'$texto'";
            }
        }else {
            if (strlen($texto) != 0) {
                $codigoExterno = "'$texto'";
            }
        }
    
        $sql = "call spGetArtiExistenciasFecha('$criterio',$tienda,'$fechaCorte',$idCodigo,$descripcion,$codigoExterno,@out_status);";
    //  echo $sql;exit;
        $rs = $this->db->Execute($sql);
    
        $data = $rs->getArray();
    
        return $data;
    
    }    

    function BuscarFacturacionCxC($codtienda,$fechaI,$fechaF){
        
        $sql = "call spGetFactuCxCPeriodo($codtienda,'$fechaI','$fechaF',@out_status);";
        //echo $sql;exit;
        $rs = $this->db->Execute($sql);
        
        $data = $rs->getArray();
        
        $rs->Close();
        return $data;
        
        
    }


    function BuscarNotasCxC($codtienda,$fechaI,$fechaF){
        
        $sql = "call spGetNotaCxCPeriodo($codtienda,'$fechaI','$fechaF',@out_status);";
        //echo $sql;exit;
        $rs = $this->db->Execute($sql);
        
        $data = $rs->getArray();
        
        $rs->Close();
        return $data;
        
        
    }

    function getTipoDocumentos(){
        
        $sql = "call spGetAllTipoDocCxC (@out_status);";
        
        $rs = $this->db->Execute ($sql);
        
        $data = $rs->getArray();
        
        $rs->Close();

        return $data;
    }

      function buscarRecibosCxC($idCliente,$tipodoc,$selCriterio,$fechaI,$fechaF){
        
        $sql = "call spGetDocCliCxC ($idCliente,'$tipodoc','$selCriterio','$fechaI','$fechaF',@out_status);";
        //echo $sql;exit;
        $rs = $this->db->Execute($sql);
         
        $data = $rs->getArray();
         
        $rs->Close();
        return $data;
        
        
    }

     function buscarCierre($tipodoc,$fechaI,$fechaF){
    
        $sql = "call spGetDocCxC ('$tipodoc','$fechaI','$fechaF',@out_status);";
        //echo $sql;exit;
        $rs = $this->db->Execute($sql);
         
        $data = $rs->getArray();
         
        $rs->Close();
        return $data;
    
    }
    

    function buscarMoviPlantronics($fechaI,$fechaF) {
    
        $sql = "call spGetMoviPlantronics('$fechaI','$fechaF',@out_status);";
        //  echo $sql;exit;
        $rs = $this->db->Execute($sql);
    
        $data = $rs->getArray();
    
        return $data;
    
    }
    
    function buscarFactCliente($selCliente) {
    
        $sql = "call spGetAllFactuCliCxC($selCliente,'S',@out_status);";
  //      echo $sql;exit;
        $rs = $this->db->Execute($sql);
    
        $data = $rs->getArray();
    
        return $data;
    
    }

    function buscarNotasCliente($selCliente){
        $sql = "call spGetAllNotasCliCxC($selCliente,'S',@out_status);";
  //      echo $sql;exit;
        $rs = $this->db->Execute($sql);
    
        $data = $rs->getArray();
    
        return $data;
    }
    
    function buscarDocCliente($selCliente,$selCriterio) {
    
        $sql = "call spGetAllDocCliCxC($selCliente,'$selCriterio',@out_status);";
        //        echo $sql;exit;
        $rs = $this->db->Execute($sql);
    
        $data = $rs->getArray();
    
        return $data;
    
    }
    
    function buscarEstadoCtaClienteCxC($selCliente) {
    
        $sql = "call spGetEstadoCtaCliCxC($selCliente,@out_status);";
        //        echo $sql;exit;
        $rs = $this->db->Execute($sql);
    
        $data = $rs->getArray();
    
        return $data;
    
    }
    
       
    function buscarDetalleItem($idItem) {
        $sql = "call spGetInfoItem('$idItem',@out_status);";
    
        $result = $this->db->Execute($sql);
    
        $detalleItem = $result->getArray();
        $result->Close();
    
        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);
    
        $status = $rs->getArray();
    
        if($status[0]["message"] == "OK"){
            $data = $detalleItem;
        }else{
            $data = array();
        }
    
        return $data;
    
    }
    
    
    function buscarDetalleItemMovi($idItem) {
        $sql = "call spGetInfoItemMovi('$idItem',@out_status);";
    
        $result = $this->db->Execute($sql);
    
        $detalleItem = $result->getArray();
        $result->Close();
    
        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);
    
        $status = $rs->getArray();
    
        if($status[0]["message"] == "OK"){
            $data = $detalleItem;
        }else{
            $data = array();
        }
    
        return $data;
    }
    
    function buscarDetItemMoviT($idItem,$idTienda) {
        $sql = "call spGetDetItemMoviT('$idItem',$idTienda,@out_status);";
        // echo $sql;exit;
        $result = $this->db->Execute($sql);
    
        $detalleItem = $result->getArray();
        $result->Close();
    
        $sql2 = "SELECT @out_status as message";
        $rs = $this->db->Execute($sql2);
    
        $status = $rs->getArray();
    
        if($status[0]["message"] == "OK"){
            $data = $detalleItem;
        }else{
            $data = array();
        }
    
        return $data;
    
    }
    
    function buscarDetFactArti($idFactura) {
         
        $sql = "call spGetDetFactura($idFactura,@out_status);";
        //echo $sql;exit;
        $rs = $this->db->Execute($sql);
    
        $data = $rs->getArray();
        $rs->Close();
        return $data;
         
         
    }
    
    function buscarDetFactPagos($idFactura) {
    
        $sql = "call spGetFacPagos($idFactura,@out_status);";
        //echo $sql;exit;
        $rs = $this->db->Execute($sql);
    
        $data = $rs->getArray();
        $rs->Close();
    
        return $data;
    
    
    } 
    
    function getAllFacturas($idTienda) {
    
        $sql = "call spGetAllFacturasGen($idTienda,@out_status);";
        $rs = $this->db->Execute($sql);
        $data = $rs->getArray();
        $rs->Close();
        return $data;
    
    }
    
    

    function getAllTipoMov($userName) {
        $sql = "call spGetAllTipoMov(@out_status);";
        $rs = $this->db->Execute($sql);
        $data = $rs->getArray();
        $rs->Close();
        return $data;
    }


    function aplicaRecibo($selCliente,$numero,$montoRecibo,$obs,$fecRecibo,$idTienda,$tableData) {

                
        // Se inicializa la variable message con OK.
        $message='OK';


        // se inserta el recibo como documento
        $sql = "call spInsReciboCxC($selCliente,$idTienda,'$numero',$montoRecibo,'$obs','$fecRecibo',@out_numeroRecibo,@out_status);";
        //  echo $sql;exit;
        $rs = $this->db->Execute($sql);
        $rs->Close();
         
        $sql = "SELECT @out_numeroRecibo as numRecibo,@out_status as message";
        $rs = $this->db->Execute($sql);
        $status = $rs->getArray();
        $rs->Close();
        $message = $status[0]["message"];
        if ($message !== 'OK'){
            return $message;
        }
        $numRecibo = $status[0]["numRecibo"];

        // se insertan las aplicaciones
        foreach ($tableData as $key => $docu) {
            foreach ($docu as $pos => $val){
                switch($pos){
                    case 'Numero':
                        $numeroFactura=$val;
                        break;
    
                    case 'MontoAplica':
                        $montoAplica = $val;
                        break;                        
                                
                } // switch
            } // foreach ($docu..        
    
    
            $sql = "call spApliReciboCxC($selCliente,'$numRecibo','$numeroFactura',$montoAplica,'$fecRecibo',@out_status);";
          //    echo $sql;exit;
            $rs = $this->db->Execute($sql);
            $rs->Close();
             
            $sql = "SELECT @out_status as message";
            $rs = $this->db->Execute($sql);
            $status = $rs->getArray();
            $rs->Close();
            $message = $status[0]["message"];
           
            if ($message !== 'OK'){
                return $message;
            }
    
        } // foreach ($tabledata...

    // Si todo fue exitoso, la variable message trae el valor OK
    return $message;
    }
    function aplicaNotaCr($selCliente,$numero,$monto,$obs,$fec,$idTienda,$tableData) {

                
        // Se inicializa la variable message con OK.
        $message='OK';


        // se inserta la nota de credito como documento
        if ($numero == "") {
            // si no viene el numero significa que hay que insertar la nota
            $sql = "call spInsNotaCrCxC($selCliente,$idTienda,'$numero',$monto,'$obs','$fec',@out_numero,@out_status);";
         //     echo $sql;exit;
            $rs = $this->db->Execute($sql);
            $rs->Close();
             
            $sql = "SELECT @out_numero as num,@out_status as message";
            $rs = $this->db->Execute($sql);
            $status = $rs->getArray();
            $rs->Close();
            $message = $status[0]["message"];
            if ($message !== 'OK'){
                return $message;
            }
            $num = $status[0]["num"];
        }else{
            // si viene un numero significa que ya existe por que se valido
            // durante la digitacion.
            $num = $numero;

        }

        // se insertan las aplicaciones
        foreach ($tableData as $key => $docu) {
            foreach ($docu as $pos => $val){
                switch($pos){
                    case 'Numero':
                        $numeroFactura=$val;
                        break;
    
                    case 'MontoAplica':
                        $montoAplica = $val;
                        break;                        
                                
                } // switch
            } // foreach ($docu..        
    
    
            $sql = "call spApliNotaCrCxC($selCliente,'$num','$numeroFactura',$montoAplica,'$fec',@out_status);";
            //  echo $sql;exit;
            $rs = $this->db->Execute($sql);
            $rs->Close();
             
            $sql = "SELECT @out_status as message";
            $rs = $this->db->Execute($sql);
            $status = $rs->getArray();
            $rs->Close();
            $message = $status[0]["message"];
            if ($message !== 'OK'){
                return $message;
            }
    
        } // foreach ($tabledata...

    // Si todo fue exitoso, la variable message trae el valor OK
    return $message;
    }  

    function validaNotaCr($idCliente,$numeroNota){
        $sql = "call spValidaNotaCrCxC($idCliente,'$numeroNota',@out_esValido,@out_status);";
        $rs = $this->db->Execute ($sql);
        $rs->Close();
    
        $sql = "SELECT @out_esValido as esValido, @out_status as message";
        $rs = $this->db->Execute($sql);
        $status = $rs->getArray();
        $rs->Close();
    
        //return arrary (message,esValido);
        //return $status;
        $message = $status[0]["message"].'|'.$status[0]["esValido"];
        return $message;
        
    
    }     
}
?>

