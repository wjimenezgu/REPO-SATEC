{$NAV_MENU}
	<section id="main" >
	    
	  	<br>	<br>    
        
                    {$DATOS_TIENDA[0].NombreTienda}<br>
                    {$DATOS_TIENDA[0].NombreCia}<br>
                    {$DATOS_TIENDA[0].Telefonos}<br>               
                    cobro@satecsa.com<br>                           
             
        	<br>	
		<h1 style="font-family:'Courier New', Courier, serif;">{$TIT_REPORTE}</h1>
		<div id="imprimir" style="width:250px; margin: 15px 0;">
			<a href="javascript:;" onclick="printReport()" >Imprimir </a>
		</div> 
            <h2>Periodo del {$FECHA_INICIO} al {$FECHA_FINAL}</h2>
	    
		<form name="export" id="export" method="post" action="reports_export_excel.php" target="_blank">
			<input type="hidden" id="cual" name="cual" value="{$TIT_EXPORT}" />
			<input type="hidden" id="cualEnc" name="cualEnc" value="{$TIT_REPORTE}" />
			<input type="hidden" id="dataExcel" name="dataExcel" />
			<input type="hidden" id="selCliente" name="selCliente" value="{$CLIENTE}" />
			<input type="hidden" id="tipodoc"    name="tipodoc"    value="{$TIPODOC}" />
			<input type="hidden" id="criterio"   name="criterio"   value="{$CRITERIO}" />
			<input type="hidden" id="fechaI"     name="fechaI"     value="{$FECHA_INICIO}" />
			<input type="hidden" id="fechaF"     name="fechaF"     value="{$FECHA_FINAL}" />
			
		</form>           	                                
             
        <table id="tblItemsList" class="table-reportes" style="font-family:'Arial', Courier, serif;">   
        	<thead>
            	<tr>
                	<th style="text-align:left;padding-left:5px;">Transaccion</th>
                	<th style="text-align:left;padding-left:5px;">Numero</th>                                        	
                    <th style="text-align:right;padding-left:5px;">Fecha</th>
                    <th style="text-align:right;padding-left:5px;width:100px;">Monto</th>
                    <th style="text-align:left;padding-left:18px">Nombre</th>
                </tr>
            </thead>
			<tbody id="info-items" >
				{section name=lP loop=$LISTA_MOVI}
					<tr> 
						<td style="text-align:left;padding-left:5px;">{if $LISTA_MOVI[lP]["numero"] eq 'TOTAL'}  {else}{$LISTA_MOVI[lP]["Transaccion"]} {/if}</td>
						<td style="padding-left:5px">{if $LISTA_MOVI[lP]["numero"] eq 'TOTAL'}  {else}{$LISTA_MOVI[lP]["numero"]} {/if}</td>  
						<td style="text-align:right;">{if $LISTA_MOVI[lP]["numero"] eq 'TOTAL'} TOTAL {else}{$LISTA_MOVI[lP]["Fecha"]} {/if}</td>
						<td style="text-align:right;">{$LISTA_MOVI[lP].Monto}</td>
						<td style="text-align:left;padding-left:18px;">{if $LISTA_MOVI[lP]["numero"] eq 'TOTAL'}  {else}{$LISTA_MOVI[lP]["nombre"]} {/if}</td>
					</tr> 
				{/section}                                            
            </tbody>
        </table>

</section>
	
	
{literal}
<script type="text/javascript">

$(document).ready(function(){

});

function exportExcel(){
	//alert( $("<div>").append($(".widefat").eq(0).clone()).html() );
	$("#dataExcel").val( $("<div>").append($(".widefat").eq(0).clone()).html());
	$("#export").submit();
}

function printReport(){
	$('#imprimir').css('display', 'none'); 
	if (window.print) {
		window.print();
	}else{
		alert("Lo siento, pero a su navegador no se le puede ordenar imprimir" + " desde la web. Actualise.");
	}
	
	setTimeout("$('#imprimir').css('display', 'block')", 800);
}

function printMatriz(){

   /* selCliente  = selCliente.value; 
	tipodoc     = tipodoc.value;
	criterio    = criterio.value; 
    fechaI 		= fechaI.value;
    fechaF 		= fechaF.value;
    
    window.location.href ='recibos_impreMatriz.php?selCliente='+selCliente+"&tipodoc="+tipodoc+"&criterio="+criterio+"&fechaI="+fechaI+"&fechaF="+fechaF;
*/
}


</script>
{/literal}
