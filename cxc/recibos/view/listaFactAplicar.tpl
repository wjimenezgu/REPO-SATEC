 {if (empty($LISTA_FACTCLIENTE))}
	<tr><td style="text-align:center;" colspan="8">No hay factuas que cargar</td></tr>
 {/if}
 {section name=lP loop=$LISTA_FACTCLIENTE}
	<tr style="padding:0px;" > 
		<td>
			<input  style="text-align:left;"  name="numeroFactura[]" id="{$smarty.section.lP.index}" type="text"  disabled value="{$LISTA_FACTCLIENTE[lP].numero}">
		</td>  
		<td >{$LISTA_FACTCLIENTE[lP].fecFactura}</td>
		<td style="text-align: right;">
			<input  style="text-align:right;"  name="saldoFactura[]" id="{$smarty.section.lP.index}" type="text"  disabled value="{$LISTA_FACTCLIENTE[lP].saldoFactura}">
		</td>
		<td >
			<select id="sel{$smarty.section.lP.index}" name="selectAplica[]" 
				onchange="cambiaMontoAplica(this.id)">        
				<option  value="N" selected>No</option>                                         
                <option  value="S">Si</option>    
         	</select>
		</td>
		<td style="text-align: right;">
			<input  style="text-align:right;" name="montoaplica[]" id="{$smarty.section.lP.index}" type="text"  onkeydown="keyPressN(event);" onchange="comparaSaldo(this.id)"    value="">
		</td>
	</tr> 
{/section}
{literal}
<script type="text/javascript">

	function keyPressN(e){
		// alert(e.keyCode+' '+e.ctrlKey+' '+e.shiftKey);
	    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13,56,106,107, 110, 187,190]) !== -1 ||
	            // Allow: Ctrl+A
	           (e.keyCode == 65 && e.ctrlKey === true) || 
	            // Allow: home, end, left, right, down, up
	           (e.keyCode >= 35 && e.keyCode <= 40)) {
	                // let it happen, don't do anything
	                return;
	       }
	       // Ensure that it is a number and stop the keypress
	       if ((e.shiftKey || ((e.keyCode < 48) || (e.keyCode > 57))) && ((e.keyCode < 96) || (e.keyCode > 105))) {
	           e.preventDefault();
	       };
	}


	function comparaSaldo(numRow){

		$("#btn_aplicaReci").prop("disabled",true);
		$("#ftotalApli").val("0.00");
		 $("#fmontoDif").val("");

		var vMontoAplica = $('input[name^="montoaplica"]').eq(numRow).val();
		var nMontoAplica = parseFloat(vMontoAplica) * 1;


		var vSaldoFactura 	 = $('input[name^="saldoFactura"]').eq(numRow).val();

		// como esta formateado con comas hay que quitarlas
		var vSaldoFacturaS  = vSaldoFactura.replace(/,/g, '');

		var nSaldoFactura	 = parseFloat(vSaldoFacturaS) * 1;

		if (nMontoAplica > nSaldoFactura){
			alert('Monto Aplica Mayor al Saldo.')
			$('input[name^="montoaplica"]').eq(numRow).val("");

		}else{

			var nMontoAplicaStr = nMontoAplica.toFixed(2).replace(/./g, function(c, i, a) {
			    return i && c !== "." && ((a.length - i) % 3 === 0) ? ',' + c : c;
			});
			$('input[name^="montoaplica"]').eq(numRow).val(nMontoAplicaStr);
		}	
	
	}

	function cambiaMontoAplica(idRow){

		$("#btn_aplicaReci").prop("disabled",true);
		$("#ftotalApli").val("0.00");
		 $("#fmontoDif").val("");

		
		var numRow   = idRow.substring(3);
		var vFactor  = document.getElementById(idRow).value;

		var vSel  = document.getElementById(idRow).value;

		if (vSel == 'N'){
			$('input[name^="montoaplica"]').eq(numRow).val("");

		}
		else{

			var vCosto 	 = $('input[name^="saldoFactura"]').eq(numRow).val();

			// como esta formateado con comas hay que quitarlas
			var vCostoS  = vCosto.replace(/,/g, '');

			var nCost	 = parseFloat(vCostoS) ;


			
			var nCostoStr = nCost.toFixed(2).replace(/./g, function(c, i, a) {
			    return i && c !== "." && ((a.length - i) % 3 === 0) ? ',' + c : c;
			});
			
			
			$('input[name^="montoaplica"]').eq(numRow).val(nCostoStr);
		}

	}
</script>
{/literal}	



