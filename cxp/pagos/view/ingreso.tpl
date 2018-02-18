{$NAV_MENU}
<section id="main" >
	<div class="box-content">
	
		<form class="form-horizontal">
            <input type="hidden" name="id_tienda" id="id_tienda" value="{$ID_TIENDA}">
            <input type="hidden" name="RoN" id="RoN" value="{$TIPO_MOV}">
			<div class="control-group">
				<h1>{$DESC_MOV}</h1>
			</div>
            <div class="notaCrValida"  id="0"></div>
			<div class="control-group" id="boxSelCliente" style="margin-left: -95px;">
				<label class="control-label" for="selectCliente"> Cliente</label>
				<div class="controls">
					<select data-placeholder="Ingrese Cliente para listar facturas" style="width:50%;"  id="selectCliente"    name ="selectCliente"  data-rel="chosen"  >
                    	<option value="0"></option>
                        {section name=lP loop=$LISTA_CLIENTES}
                        	<option value="{$LISTA_CLIENTES[lP].id}|{$LISTA_CLIENTES[lP].nombre}" >{$LISTA_CLIENTES[lP].nombre}</option>                        	
                        {/section}
                    </select>
                </div>
                <div class="control-group" id="boxnumero" >
                <label class="control-label" for="fnumero">Numero</label> 
                <div class="controls">   
                    <input type="text"  style = "width:30%" placeholder="Indicar numero"id="fnumero" name="fnumero" value="">
                </div>
                

                
                <label class="control-label" for="ftipodoc">Tipo</label> 
                <div class="controls">   
                    <select data-placeholder="Seleccionte tipo" style="width:30%;"  id="ftipodoc"    name ="ftipodoc"  data-rel="chosen"  >
                        <option value="0"></option>
                        {section name=lP loop=$LISTA_TIPODOCS}
                            <option value="{$LISTA_TIPODOCS[lP].id}" 
                            {if $LISTA_TIPODOCS[lP].id eq '3'} selected{/if}
                            >{$LISTA_TIPODOCS[lP].descripcion}</option>                            
                        {/section}
                    </select>
                </div>
                </div>    

            </div>
            <div class="control-group" id="boxfecRecibo" style="float:left;margin-left: -95px;">
                <label class="control-label" for="ffecRecibo">Fecha</label>    
                <div class="controls">   
                    <input type="text"  class="input-small datepicker" id="ffeRecibo" name="ffecRecibo" value="{$CURRENT_DATE}" placeholder="Indicar fecha">
                </div>
            </div>                                    
            <div class="control-group" id="boxtc" style="float:left;margin-left:-55px;">
                <label class="control-label" for="fmonto">Monto</label> 
                <div class="controls">   
                    <input type="text" class="input-small" style="text-align:right;" id="fmonto" name="fmonto" value="">
                </div>
            </div>
            <div class="control-group" id="boxfoc" style="float:left;margin-left: -95px;">
                <label class="control-label" for="fobs">Obs</label> 
                <div class="controls">   
                    <input type="text"  id="fobs" name="fobs" value="">
                </div>
            </div>
            <div class="control-group" id="boxtApli" style="float:left;margin-left:-55px;">
                <label class="control-label" for="ftotalApli">T.Aplica</label> 
                <div class="controls">   
                    <input type="text" class="input-medium" style="text-align:right;" id="ftotalApli" name="ftotalApli" value="0.00" disabled>
                </div>
            </div>
            <div class="control-group" id="boxdif" style="float:left;margin-left:-55px;">
                <label class="control-label" for="fmontoDif">Diferencia</label> 
                <div class="controls">   
                    <input type="text" class="input-small" style="text-align:right;" id="fmontoDif" name="fmontoDif" value="" disabled>

                    <input {if $TIPO_MOV eq "R"}type="hidden"{else}type="checkbox"{/if} id="noAplica" name="noAplica" title="No Aplica" >                    
                </div>
            </div>
			<hr width=100%>                           
            <table class="table table-striped table-bordered bootstrap-datatable" id="tblFactAplicar">
                <thead>
                    <tr>
                        <th>N&uacute;mero</th>
                        <th>Fecha</th>
                        <th style="text-align: right;">Saldo</th>
                        <th>Aplica</th>
                        <th style="text-align: right;">Monto Aplica</th>
                    </tr>
                </thead>
				<tbody id="info-FactAplicar" >
			
                </tbody>
            </table>                                   
			<form>
				<div class="form-actions">
					<input type="button" id="btn_aplicaReci" disabled onclick="aplicaReci()" value="Generar" class="btn btn-primary">
                    <input type="button" id="btn_vallidaApli" onclick="validaApli()" value="Validar" class="btn btn-warning">
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

    $('#fmonto').number( true, 2 );
    $('#ftotalApli').number( true, 2 );    
    if ($("#RoN").val() == "N"){
        $temp = ""; // dummy
      // se deshabilita la linea que sigue x que el usuario
      // debe poder poner el numero de nota, cuando se refiere
      // a un nota que ya existe y solo quiere aplicarla.
      // por ejemplo las que genera el sistema de facturacion de
      // credito y cobro cuando anulan una factura.

     //   $("#boxnumero").css("display","none");
        // como es una nota de credito, se pone un * en el campo de numero
        // para que el sistema use el consecutivo de notas para asignar el
        // siguiente numero
     //   $("#fnumero").val("*");
        // la nota de credito se puede registrar sin aplicarla inmediatamente
    }
    $("#selectCliente").focus();

});


function aplicaReci(){
	
	var selCliente = $("#selectCliente").val();
    var obs = $("#fobs").val();
    var fecRecibo = $("#ffeRecibo").val();
    var idTienda = $("#id_tienda").val();
    var montoRecibo = $("#fmonto").val();
    var RoN = $("#RoN").val();
    var tipoDoc = $("#ftipodoc").val();
    montoRecibo = montoRecibo.replace(/,/g, '');
    var numero = $("#fnumero").val();
    if (numero == "*"){
        numero = "";
    }
	

	var TableData;
	TableData = storeTblValues();
	TableData = $.toJSON(TableData);


    var properties = {
            url: "processAplica.php",
            async: true,
            cache: false,
            data: "selCliente=" + selCliente + "&obs="+obs+"&fecRecibo="+fecRecibo+"&montoRecibo="+montoRecibo+"&numero="+numero+"&tipoDoc="+tipoDoc+"&idTienda="+idTienda+"&RoN="+RoN+"&pTableData=" + TableData,
            type: "POST",
            success: function(msg){                
                    alert(msg);
            }
        };            
        $.ajax(properties);


    if ($("#RoN").val() == "R") {
        window.location.href ='../pagos/ingreso.php?RoN=R'; 
    }else{
        window.location.href ='../pagos/ingreso.php?RoN=N';
    }
   
}

function validaApli(){

    $("#btn_aplicaReci").prop("disabled",true);

    var table = document.getElementById("tblFactAplicar");

    var numRows = table.rows.length -1; // -1 para excluir el encabezado
    var numRow;
    var totalApli = 0.00;
    var vMontoAplica = "";
    var vMontoAplicaS = "";
    var nMontoAplica = 0.00;
    var vNumero = "";

    if (numRows > 0){
        var i;
        for (i=1; i <= numRows; i++) {
            // se obtine el numero de fila para efectos de procesar cada linea
            numRow = i - 1;
            vMontoAplica      = $('input[name^="montoaplica"]').eq(numRow).val();
            if (vMontoAplica != ""){
          
                    vMontoAplicaS  = vMontoAplica.replace(/,/g, '');
                    nMontoAplica = parseFloat(vMontoAplicaS).toFixed(2) * 1;                                                



                    totalApli = totalApli + nMontoAplica;

                 
                    totalApli = parseFloat(totalApli).toFixed(2) * 1;

               
            }
        }

    }
    var vMontoReci = $("#fmonto").val();


    var vMontoReciS = vMontoReci.replace(/,/g, '');
    if (vMontoReciS == ""){
        var nMontoReci = 0.00

    }else{
        var nMontoReci    = parseFloat(vMontoReciS).toFixed(2) * 1;
    }

    // El usuario no quiere aplicar la nota
    // por lo que el calculo de la diferencia
    // no se hace
    if($("#noAplica").is(":checked")){
        totalApli = nMontoReci;
    }

  //   totalApli = Math.floor(totalApli * 100) / 100;

    totalApli = parseFloat(totalApli).toFixed(2) * 1;


    var vMontoDif = nMontoReci - totalApli;

    var vMontoDifStr = vMontoDif.toFixed(2).replace(/./g, function(c, i, a) {
                return i && c !== "." && ((a.length - i) % 3 === 0) ? ',' + c : c;
            });
    var totalApliStr = totalApli.toFixed(2).replace(/./g, function(c, i, a) {
                return i && c !== "." && ((a.length - i) % 3 === 0) ? ',' + c : c;
            });


    $("#ftotalApli").val(totalApliStr);
    $("#fmontoDif").val(vMontoDifStr);

    if (vMontoDifStr == "0.00"){

        vNumero = $("#fnumero").val();

        if (vNumero != ""){
            if (($("#RoN").val() == "N") && (vNumero != "*")){
                validaNotaCr();
            }else{
               $(".notaCrValida").attr("id", "1"); 
            }
            if ($(".notaCrValida").attr("id") == "1"){

                alert('Todos los datos correctos para proceder. Click en Generar.')
                $("#btn_aplicaReci").prop("disabled",false);
                $("#btn_aplicaReci").focus();
            }else{
                alert('Nota no pertenece al Cliente.')
                $("#fnumero").focus();
            }
        }else{
            alert('Debe indicar el numero.')
            $("#fnumero").focus();
        }

    }else{
        alert('Diferencia de montos en la aplicacion. Revisar.');

        $("#btn_aplicaReci").prop("disabled",true);
        $("#fmonto").focus();

    }

}


function storeTblValues(){
    var TableData = new Array();
    var tbl = document.getElementById('tblFactAplicar');
    var numRows = tbl.rows.length -1; // -1 para excluir el encabezado
    var numRow;
    var cont = 0;

    if (numRows > 0){    
        var i;
        for (i=1; i <= numRows; i++) {
            // se obtine el numero de fila para efectos de procesar cada linea
            numRow = i - 1;

            vNumero      = $('input[name^="numeroFactura"]').eq(numRow).val();

            vMontoAplica     = $('input[name^="montoaplica"]').eq(numRow).val();
            // como esta formateado con comas hay que quitarlas
            vMontoAplicaS  = vMontoAplica.replace(/,/g, '');

            // si es una nota de credito y el usuario no quiere aplicarla
            // se le asigna blano a la variable para que se ignore
            // si esta seleccionada
            //
            if (($("#RoN").val() == "N") && ($("#noAplica").is(":checked"))){
                vMontoAplicaS = "";
            }


            if (vMontoAplicaS != ""){
  
   //  alert(vNumero);alert(vMontoAplicaS);

                // se agrega la entrada a la tabla
                TableData[cont]={
                          "Numero"          :vNumero
                        , "MontoAplica"     :vMontoAplicaS
                        
                    } ;
                cont = cont + 1;
            }          
        } //for
    } // if numRows >
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
   
    $("#info-FactAplicar").load("buscarFactCliente.php", { selCliente : $selCliente}, function(response,status,xhr){ });

    $("#btn_aplicaReci").prop("disabled",true);
    $("#ftotalApli").val("0.00");
    $("#fmontoDif").val("");
    $("#fnumero").focus();
  
});



function validaNotaCr() {

        var strNumeroNota =  $.trim($("#fnumero").val());
        var data= $("#selectCliente").val();
     
        $dataStr = (data.split("|"));
        var stridCliente  = $dataStr[0];

        $.ajax({
                type: "POST",
                url: "ValidaNotaCr.php",
                async: false,
                dataType : "text",
                data: "fNumero="+strNumeroNota+"&fidCliente="+stridCliente,
                success: function(data2,strMsg){
                    $dataStr = (data2.trim().split("|"));
                    if ($dataStr[0].trim()=='OK') {
                        if ($dataStr[1] == "1"){
                            $(".notaCrValida").attr("id", "1");
                           
                        }else{
                            $(".notaCrValida").attr("id", "0"); 
                           
                        }                       
                    }else{
                        alert($dataStr[0]);                        
                    }                   
                },
                error: function(jqXHR,textStatus,errorThrown){
                    alert('Error al validar Nota '+errorThrown);
                }
            });

    }



</script>
{/literal}
