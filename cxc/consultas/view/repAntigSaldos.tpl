{$NAV_MENU}
	<section id="main" >
                    {$DATOS_TIENDA[0].NombreTienda}<br>
                    {$DATOS_TIENDA[0].NombreCia}<br>
                    {$DATOS_TIENDA[0].Telefonos}<br>               
                    cobro@satecsa.com<br>                           
             
        	<br>	
		<h2 style="font-family:'Courier New', Courier, serif ;">{$TIT_REPORTE}</h2>
		<div id="imprimir" style="width:250px; margin: 15px 0;">
			<a href="javascript:;" onclick="printReport()" >Imprimir</a> | <a href="javascript:;" onclick="exportExcel()">Exportar Excel</a> 

		</div>  		
	    <h5 style="font-family:'Courier New', Courier, serif;">Fecha Actual: {$CURRENT_DATE}</h5>
	    <h3 style="font-family:'Courier New', Courier, serif;">Fecha  Corte: {$FECHA_CORTE}</h3>
		<form name="export" id="export" method="post" action="reports_export_excel.php" target="_blank">
			<input type="hidden" id="cual" name="cual" value="{$TIT_EXPORT}" />
			<input type="hidden" id="cualEnc" name="cualEnc" value="{$TIT_REPORTE}" />
			<input type="hidden" id="dataExcel" name="dataExcel" />
		</form>           	                                
             
        <table id="tblItemsList"  class="table-reportes" style="width: 100%;font-size:10px ;font-family:'Courier New', Courier, serif;">   
        	<thead>
            	<tr>
                	<th style="text-align:right;padding-right:14px;">Codigo</th>
                	<th style="text-align:left;">Cliente Nombre</th>                                        	
                    <th style="text-align:right;">Sin Vencer</th>
                    <th style="text-align:right;">1-30</th>
                    <th style="text-align:right">31-60</th>
                  	<th style="text-align:right">61-90</th>
                  	<th style="text-align:right">Mas 91</th>
                  	<th style="text-align:right">Saldo</th>
                </tr>
            </thead>
			<tbody id="info-items" >
				{section name=lP loop=$LISTA_MOVI}
					<tr style="padding:0px;"> 
						<td style="text-align:right;padding-right:14px">{if $LISTA_MOVI[lP]["Codigo"] eq 'TOTAL'}  {else}{$LISTA_MOVI[lP]["Codigo"]} {/if}</td>
						<td>{if $LISTA_MOVI[lP]["Codigo"] eq 'TOTAL'} TOTAL {else}{$LISTA_MOVI[lP]["Nombre"]} {/if}</td>  
						<td style="text-align:right; ">{$LISTA_MOVI[lP].SinVencer} </td>
                        <td style="text-align:right;">{$LISTA_MOVI[lP].Rango1} </td>						
                        <td style="text-align:right;">{$LISTA_MOVI[lP].Rango2}</td>
                        <td style="text-align:right;">{$LISTA_MOVI[lP].Rango3}</td>
						<td style="text-align:right;">{$LISTA_MOVI[lP].RangoFinal}</td>	
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
	$("#dataExcel").val( $("<div>").append($(".table-reportes").eq(0).clone()).html());
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
