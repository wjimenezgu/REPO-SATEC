{$NAV_MENU}
<section id="main" >
	<div class="box-content">
	
		<form class="form-horizontal">
			<div class="control-group">
				<h1>Facturas a Tramitar</h1>
			</div>
			<div class="control-group" id="boxSelCliente" >
				<label class="control-label" for="selectCliente"> Cliente</label>
				<div class="controls">
					<select data-placeholder="Ingrese Cliente para listar facturas" style="width:50%;"  id="selectCliente"    name ="selectCliente"  data-rel="chosen"  >
                    	<option value="0"></option>
                        {section name=lP loop=$LISTA_CLIENTES}
                        	<option value="{$LISTA_CLIENTES[lP].id}|{$LISTA_CLIENTES[lP].nombre}" >{$LISTA_CLIENTES[lP].nombre}</option>                        	
                        {/section}
                    </select>
                </div>
            </div>
			<hr width=100%>                           
            <table class="table table-striped table-bordered bootstrap-datatable" id="tblFactTramitar">
                <thead>
                    <tr>
                        <th>N&uacute;mero</th>
                        <th>Fecha</th>
                        <th>Vence</th>
                        <th>Monto</th>
                        <th>Sel</th>
                    </tr>
                </thead>
				<tbody id="info-FactTramitar" >
			
                </tbody>
            </table>                                   
			<form>
				<div class="form-actions">
					<input type="button" id="btn_buscarMovi" onclick="findMovi()" value="Generar" class="btn btn-primary">
				</div>
			</form>		
		</form>
    </div>
</section>
	
	
{literal}
<script type="text/javascript">

$(document).ready(function(){
	
	$('.datepicker').datepicker({
        language: "es",
        format:"dd/mm/yyyy",
        todayHighlight: true,
        autoclose: true
      //  ,           
      //  startDate: new Date(),
       , defaultDate : new Date()
     });


});


function findMovi(){
	
	 var selCliente = $("#selectCliente").val();
	
	var TableData;
	TableData = storeTblValues()
	TableData = $.toJSON(TableData);
    
    window.open('genRepFactTramitar.php?selCliente='+selCliente+"&pTableData=" + TableData,'_blank');    
    
}


function storeTblValues()
{
    var TableData = new Array();
    var i=0;
    $('#tblFactTramitar tr').each(function(row, tr){
    	var aRowSel = document.getElementById('selRow' + i);
    	
    	if (aRowSel !== null){    		
    		if (aRowSel.checked == true){	
          	  estaSel = 'SI';
      	  	}else {
      		  estaSel = 'NO';
      	  	}	
    	}else{
        	estaSel = 'NO';
    	}
    	
    	if (estaSel == 'SI'){
	        TableData[row]={
	              "Numero" : $(tr).find('td:eq(0)').text()
	            , "Fecha"  : $(tr).find('td:eq(1)').text()
	            , "Vence"  : $(tr).find('td:eq(2)').text()
	            , "Monto"  : $(tr).find('td:eq(3)').text()
	          //  , "EstaSel" : estaSel
	        }
	         
    	 }
    	i++; 
    }); 
    TableData.shift();  // first row will be empty - so remove
    return TableData;
}

// Si cambia algun dato del encabezado se debe limpiar la lista de facturas
// Esto para asegurar que debe vover a traer los datos de factuas a conciliar
//
$("#selectCliente").on("change", function(e){
    $("#info-FactTramitar").html("");
    var data= $("#selectCliente").val();
 
    
    $dataStr = (data.split("|"));
    $selCliente  = $dataStr[0];
   
    $("#info-FactTramitar").load("buscarFactCliente.php", { selCliente : $selCliente}, function(response,status,xhr){ });
  
});



</script>
{/literal}
