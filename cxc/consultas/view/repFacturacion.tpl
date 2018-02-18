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
	    
	  <!--  <h4 style="font-family:'Courier New', Courier, serif;">Fecha Actual: {$CURRENT_DATE}</h4> -->
	    <h3 style="font-family:'Courier New', Courier, serif;">Periodo del {$FECHA_INICIO} al {$FECHA_FINAL} </h3>
	 
	    <br><br>
	    
		<form name="export" id="export" method="post" action="reports_export_excel.php" target="_blank">
			<input type="hidden" id="cual" name="cual" value="{$TIT_EXPORT}" />
			<input type="hidden" id="cualEnc" name="cualEnc" value="{$TIT_REPORTE}" />
			<input type="hidden" id="dataExcel" name="dataExcel" />
		</form>           	                                
        <!-- <h3 style="font-family:'Courier New', Courier, serif;">{$DATOS_TIENDA[0].NombreTienda}</h3> --> 
        <table id="tblItemsList"  class="widefat" style="width: 100%;font-family:'Courier New', Courier, serif;">   
        	<thead>
            	<tr>
                	<th style="text-align:left">Estado</th>
                	<th style="text-align:left">No.Factura</th>                                        	
                    <th style="text-align:left">Fecha</th>
                    <th style="text-align:right">Exenta</th>
                    <th style="text-align:right">Gravada</th>
                  	<th style="text-align:right">Descuento</th>
                  	<th style="text-align:right">%Desc</th>
                  	<th style="text-align:right">Impuesto</th>
                  	<th style="text-align:right">Monto</th>
                </tr>
            </thead>
			<tbody id="infoFact" >
				{section name=lP loop=$LISTA_MOVI}
					<tr style="padding:0px;"> 
						<td>{if $LISTA_MOVI[lP]["NumFactura"] eq 'TOTAL'}  {else}{$LISTA_MOVI[lP]["descCorta"]} {/if}</td>
						<td>{if $LISTA_MOVI[lP]["NumFactura"] eq 'TOTAL'}  {else}{$LISTA_MOVI[lP]["NumFactura"]} {/if}</td>  
						<td>{if $LISTA_MOVI[lP]["NumFactura"] eq 'TOTAL'} TOTAL {else}{$LISTA_MOVI[lP]["FecFactura"]} {/if}</td>
                        <td style="text-align:right;">{$LISTA_MOVI[lP].Exenta}</td>
			            <td style="text-align:right;">{$LISTA_MOVI[lP].Gravada}</td>
			            <td style="text-align:right;">{$LISTA_MOVI[lP].Descuento}</td>
						<td style="text-align:right;">{if $LISTA_MOVI[lP]["NumFactura"] eq 'TOTAL'}  {else}{$LISTA_MOVI[lP]["PorceDesc"]} {/if}</td>
						<td style="text-align:right;">{$LISTA_MOVI[lP].Impuesto}</td>	
						<td style="text-align:right;">{$LISTA_MOVI[lP].MontoTotal}</td>
					   
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
