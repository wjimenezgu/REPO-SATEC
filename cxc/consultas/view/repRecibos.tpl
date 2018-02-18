{$NAV_MENU}
	<section id="main" >
	    
	  	<br>	<br>    
        
                    {$DATOS_TIENDA[0].NombreTienda}<br>
                    {$DATOS_TIENDA[0].NombreCia}<br>
                    {$DATOS_TIENDA[0].Telefonos}<br>               
                    cobros@satecsa.com<br>                           
             
        	<br>	
		<h2 style="font-family:'Courier New', Courier, serif;">{$TIT_REPORTE}</h2>
		<div id="imprimir" style="width:250px; margin: 15px 0;">
			<a href="javascript:;" onclick="printReport()" >Imprimir</a>  
		</div>  		
	    <h3 style="font-family:'Courier New', Courier, serif;">Periodo del {$FECHA_INICIO} al {$FECHA_FINAL} </h3>
	   
	    <br><br>
            <h3>Señores: {$NOMBRE_CLIENTE}</h3>
	    
		<form name="export" id="export" method="post" action="reports_export_excel.php" target="_blank">
			<input type="hidden" id="cual" name="cual" value="{$TIT_EXPORT}" />
			<input type="hidden" id="cualEnc" name="cualEnc" value="{$TIT_REPORTE}" />
			<input type="hidden" id="dataExcel" name="dataExcel" />
		</form>           	                                
             
        <table id="tblItemsList"  class="widefat" style="width: 100%;font-family:'Courier New', Courier, serif;">   
        	<thead>
            	<tr>
                	<th style="text-align:left">Numero</th>
                	<th style="text-align:left">Tipo</th>                                        	
                    <th style="text-align:left">Fecha Doc.</th>
                    <th style="text-align:left">Fecha Vence</th>
                    <th style="text-align:right">Antigüedad</th>
                  	<th style="text-align:right">Monto</th>
                  	<th style="text-align:right">Saldo</th>
                </tr>
            </thead>
			<tbody id="info-items" >
				{section name=lP loop=$LISTA_MOVI}
					<tr style="padding:0px;"> 
						<td>{if $LISTA_MOVI[lP]["numero"] eq 'TOTAL'}  {else}{$LISTA_MOVI[lP]["numero"]} {/if}</td>
						<td>{if $LISTA_MOVI[lP]["numero"] eq 'TOTAL'}  {else}{$LISTA_MOVI[lP]["Siglas"]} {/if}</td>  
						<td>{if $LISTA_MOVI[lP]["numero"] eq 'TOTAL'}  {else}{$LISTA_MOVI[lP]["fecDocumento"]} {/if}</td>
						<td>{if $LISTA_MOVI[lP]["numero"] eq 'TOTAL'}  {else}{$LISTA_MOVI[lP]["fechaVence"]} {/if}</td>
						<td style="text-align:right;">{if $LISTA_MOVI[lP]["numero"] eq 'TOTAL'} {else}{$LISTA_MOVI[lP]["diasVencida"]} {/if}</td>
						<td style="text-align:right;">{if $LISTA_MOVI[lP]["numero"] eq 'TOTAL'} TOTAL {else}{$LISTA_MOVI[lP]["montoDocumento"]} {/if}</td>					
						
						<td style="text-align:right;">{$LISTA_MOVI[lP].Saldo}</td>
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


</script>
{/literal}
