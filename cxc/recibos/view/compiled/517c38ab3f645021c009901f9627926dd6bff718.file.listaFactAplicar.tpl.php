<?php /* Smarty version Smarty-3.1.16, created on 2017-07-18 14:42:23
         compiled from "../recibos/view/listaFactAplicar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:168197390590e14ef3e6706-96704192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '517c38ab3f645021c009901f9627926dd6bff718' => 
    array (
      0 => '../recibos/view/listaFactAplicar.tpl',
      1 => 1494101403,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168197390590e14ef3e6706-96704192',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_590e14ef45b7f7_43105128',
  'variables' => 
  array (
    'LISTA_FACTCLIENTE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590e14ef45b7f7_43105128')) {function content_590e14ef45b7f7_43105128($_smarty_tpl) {?> <?php if ((empty($_smarty_tpl->tpl_vars['LISTA_FACTCLIENTE']->value))) {?>
	<tr><td style="text-align:center;" colspan="8">No hay factuas que cargar</td></tr>
 <?php }?>
 <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['name'] = 'lP';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LISTA_FACTCLIENTE']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['total']);
?>
	<tr style="padding:0px;" > 
		<td>
			<input  style="text-align:left;"  name="numeroFactura[]" id="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['lP']['index'];?>
" type="text"  disabled value="<?php echo $_smarty_tpl->tpl_vars['LISTA_FACTCLIENTE']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['numero'];?>
">
		</td>  
		<td ><?php echo $_smarty_tpl->tpl_vars['LISTA_FACTCLIENTE']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['fecFactura'];?>
</td>
		<td style="text-align: right;">
			<input  style="text-align:right;"  name="saldoFactura[]" id="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['lP']['index'];?>
" type="text"  disabled value="<?php echo $_smarty_tpl->tpl_vars['LISTA_FACTCLIENTE']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['saldoFactura'];?>
">
		</td>
		<td >
			<select id="sel<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['lP']['index'];?>
" name="selectAplica[]" 
				onchange="cambiaMontoAplica(this.id)">        
				<option  value="N" selected>No</option>                                         
                <option  value="S">Si</option>    
         	</select>
		</td>
		<td style="text-align: right;">
			<input  style="text-align:right;" name="montoaplica[]" id="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['lP']['index'];?>
" type="text"  onkeydown="keyPressN(event);" onchange="comparaSaldo(this.id)"    value="">
		</td>
	</tr> 
<?php endfor; endif; ?>

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
	



<?php }} ?>
