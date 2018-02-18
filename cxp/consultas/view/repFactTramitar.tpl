{$NAV_MENU}
	<section id="main" >
		<h2 style="font-family:'Courier New', Courier, serif;">{$TIT_REPORTE}</h2>
		<div id="imprimir" style="width:250px; margin: 15px 0;">
			<a href="javascript:;" onclick="printReport()" >Imprimir</a>  
		</div>  		
	    Fecha: {$CURRENT_DATE}
	    <br><br>
	    
	      
        
                    {$DATOS_TIENDA[0].NombreTienda}<br>
                    {$DATOS_TIENDA[0].NombreCia}<br>
                    {$DATOS_TIENDA[0].CedulaJuridica}<br>
                    {$DATOS_TIENDA[0].Telefonos}<br>               
                    cobro@satecsa.com<br>                           
             
        	<br>
            <h3>Señores: {$NOMBRE_CLIENTE}</h3>
            <br>
            Sirvase recibir para tramite de pago las siguientes facturas:
            <br>
	    
	    
		<form name="export" id="export" method="post" action="reports_export_excel.php" target="_blank">
			<input type="hidden" id="cual" name="cual" value="{$TIT_EXPORT}" />
			<input type="hidden" id="cualEnc" name="cualEnc" value="{$TIT_REPORTE}" />
			<input type="hidden" id="dataExcel" name="dataExcel" />
		</form>           	                                
             
        <table id="tblItemsList"  class="widefat" style="width: 100%;font-family:'Courier New', Courier, serif;">   
        	<thead>
            	<tr>
                	<th style="text-align:left">Numero</th>                        
                    <th style="text-align:left">Fecha</th>
                  	<th style="text-align:right">Monto</th>
                </tr>
            </thead>
			<tbody id="info-items" >
				{section name=lP loop=$LISTA_MOVI}
					<tr style="padding:0px;"> 
						<td>{$LISTA_MOVI[lP]["Numero"]}</td>                  
						<td >{$LISTA_MOVI[lP].Fecha}</td>
						<td style="text-align:right;">{$LISTA_MOVI[lP].Monto}</td>                  		
					</tr> 
				{/section}                                            
            </tbody>
        </table>
        <br><br><br><br>
        								<table class='table-condensed' style="text-align: center;font-family:'Courier New', Courier, serif">
										
										<tbody>
										<tr>
										<td style="width: 280px;border-bottom:solid 1px black;"></td>
										<td style="width:130px"></td>
										
										<td style="width: 280px;border-bottom:solid 1px black;"></td>										
										</tr>
										<td>Recibo Conforme</td>
										<td style="width:130px"></td>
										
										<td>Hecho Por SATEC</td>
										</tr>
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
