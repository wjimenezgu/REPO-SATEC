 {if (empty($LISTA_FACTCLIENTE))}
	<tr><td style="text-align:center;" colspan="7">No hay factuas que cargar</td></tr>
 {/if}
 {section name=lP loop=$LISTA_FACTCLIENTE}
	<tr style="padding:0px;" > 
		<td>{$LISTA_FACTCLIENTE[lP].numero}</td>  
		<td >{$LISTA_FACTCLIENTE[lP].fecFactura}</td>
		<td >{$LISTA_FACTCLIENTE[lP].fecVence}</td>
		<td >{$LISTA_FACTCLIENTE[lP].montoFactura}</td>						
		<td  >
			<input type="checkbox"  id="selRow{$smarty.section.lP.index+1}" value='s'>
		</td>
	</tr> 
{/section}



