<?php /* Smarty version Smarty-3.1.16, created on 2016-12-06 11:27:32
         compiled from "../consultas/view/repCierre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17336482435845b5ce5d08c2-38580213%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa081fb0412596a1a4e595233d56c280230dad12' => 
    array (
      0 => '../consultas/view/repCierre.tpl',
      1 => 1481048848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17336482435845b5ce5d08c2-38580213',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5845b5ce697327_41765631',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'DATOS_TIENDA' => 0,
    'TIT_REPORTE' => 0,
    'FECHA_INICIO' => 0,
    'FECHA_FINAL' => 0,
    'TIT_EXPORT' => 0,
    'CLIENTE' => 0,
    'TIPODOC' => 0,
    'CRITERIO' => 0,
    'LISTA_MOVI' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5845b5ce697327_41765631')) {function content_5845b5ce697327_41765631($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

	<section id="main" >
	    
	  	<br>	<br>    
        
                    <?php echo $_smarty_tpl->tpl_vars['DATOS_TIENDA']->value[0]['NombreTienda'];?>
<br>
                    <?php echo $_smarty_tpl->tpl_vars['DATOS_TIENDA']->value[0]['NombreCia'];?>
<br>
                    <?php echo $_smarty_tpl->tpl_vars['DATOS_TIENDA']->value[0]['Telefonos'];?>
<br>               
                    cobro@satecsa.com<br>                           
             
        	<br>	
		<h1 style="font-family:'Courier New', Courier, serif;"><?php echo $_smarty_tpl->tpl_vars['TIT_REPORTE']->value;?>
</h1>
		<div id="imprimir" style="width:250px; margin: 15px 0;">
			<a href="javascript:;" onclick="printReport()" >Imprimir </a>
		</div> 
            <h2>Periodo del <?php echo $_smarty_tpl->tpl_vars['FECHA_INICIO']->value;?>
 al <?php echo $_smarty_tpl->tpl_vars['FECHA_FINAL']->value;?>
</h2>
	    
		<form name="export" id="export" method="post" action="reports_export_excel.php" target="_blank">
			<input type="hidden" id="cual" name="cual" value="<?php echo $_smarty_tpl->tpl_vars['TIT_EXPORT']->value;?>
" />
			<input type="hidden" id="cualEnc" name="cualEnc" value="<?php echo $_smarty_tpl->tpl_vars['TIT_REPORTE']->value;?>
" />
			<input type="hidden" id="dataExcel" name="dataExcel" />
			<input type="hidden" id="selCliente" name="selCliente" value="<?php echo $_smarty_tpl->tpl_vars['CLIENTE']->value;?>
" />
			<input type="hidden" id="tipodoc"    name="tipodoc"    value="<?php echo $_smarty_tpl->tpl_vars['TIPODOC']->value;?>
" />
			<input type="hidden" id="criterio"   name="criterio"   value="<?php echo $_smarty_tpl->tpl_vars['CRITERIO']->value;?>
" />
			<input type="hidden" id="fechaI"     name="fechaI"     value="<?php echo $_smarty_tpl->tpl_vars['FECHA_INICIO']->value;?>
" />
			<input type="hidden" id="fechaF"     name="fechaF"     value="<?php echo $_smarty_tpl->tpl_vars['FECHA_FINAL']->value;?>
" />
			
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
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['name'] = 'lP';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LISTA_MOVI']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
					<tr> 
						<td style="text-align:left;padding-left:5px;"><?php if ($_smarty_tpl->tpl_vars['LISTA_MOVI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]["numero"]=='TOTAL') {?>  <?php } else { ?><?php echo $_smarty_tpl->tpl_vars['LISTA_MOVI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]["Transaccion"];?>
 <?php }?></td>
						<td style="padding-left:5px"><?php if ($_smarty_tpl->tpl_vars['LISTA_MOVI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]["numero"]=='TOTAL') {?>  <?php } else { ?><?php echo $_smarty_tpl->tpl_vars['LISTA_MOVI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]["numero"];?>
 <?php }?></td>  
						<td style="text-align:right;"><?php if ($_smarty_tpl->tpl_vars['LISTA_MOVI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]["numero"]=='TOTAL') {?> TOTAL <?php } else { ?><?php echo $_smarty_tpl->tpl_vars['LISTA_MOVI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]["Fecha"];?>
 <?php }?></td>
						<td style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['LISTA_MOVI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['Monto'];?>
</td>
						<td style="text-align:left;padding-left:18px;"><?php if ($_smarty_tpl->tpl_vars['LISTA_MOVI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]["numero"]=='TOTAL') {?>  <?php } else { ?><?php echo $_smarty_tpl->tpl_vars['LISTA_MOVI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]["nombre"];?>
 <?php }?></td>
					</tr> 
				<?php endfor; endif; ?>                                            
            </tbody>
        </table>

</section>
	
	

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

<?php }} ?>
