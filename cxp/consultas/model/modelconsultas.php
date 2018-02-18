<?php

class modelconsultas{
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
    
    
    
    function getAllClientes(){
        $sql = "call spGetAllClientesFacCxP(@out_status);";
        $rs = $this->db->Execute ($sql);
        $data = $rs->getArray();
        $rs->Close();
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


  function buscarAntiguedadCobrosCxP($tipoCli,$estadoCli,$fechaI){
        $sql = "call spGetAntigSaldoCxP($tipoCli,$estadoCli,'$fechaI',@out_status);";
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



    function getTipoDocumentos(){
        
        $sql = "call spGetAllTipoDocCxC (@out_status);";
        
        $rs = $this->db->Execute ($sql);
        
        $data = $rs->getArray();
        
        $rs->Close();

        return $data;
    }

      function buscarRecibosCxP($idCliente,$tipodoc,$selCriterio,$fechaI,$fechaF){
        
        $sql = "call spGetDocCliCxP($idCliente,'$tipodoc','$selCriterio','$fechaI','$fechaF',@out_status);";
        //echo $sql;exit;
        $rs = $this->db->Execute($sql);
         
        $data = $rs->getArray();
         
        $rs->Close();
        return $data;
        
        
    }
    

    
    function buscarFactCliente($selCliente) {
    
        $sql = "call spGetAllFactuCliCxC($selCliente,'S',@out_status);";
  //      echo $sql;exit;
        $rs = $this->db->Execute($sql);
    
        $data = $rs->getArray();
    
        return $data;
    
    }
    
    function buscarDocCli($selCliente,$selCriterio) {
    
        $sql = "call spGetAllDocCliCxP($selCliente,'$selCriterio',@out_status);";
        //echo $sql;exit;
        $rs = $this->db->Execute($sql);
    
        $data = $rs->getArray();
    
        return $data;
    
    }   
   
    
    function getAllTipoMov($userName) {
        $sql = "call spGetAllTipoMov(@out_status);";
        $rs = $this->db->Execute($sql);
        $data = $rs->getArray();
        $rs->Close();
        return $data;
    }
        
}
?>

