<?php /* Smarty version Smarty-3.1.16, created on 2016-12-05 14:38:09
         compiled from "../consultas/view/repFactTramitar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:160091787357faac4743f269-91126827%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d976aa90e46d9680c258a233551a7ef4de67a19' => 
    array (
      0 => '../consultas/view/repFactTramitar.tpl',
      1 => 1477420663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160091787357faac4743f269-91126827',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_57faac4747fff4_55655671',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'TIT_REPORTE' => 0,
    'CURRENT_DATE' => 0,
    'DATOS_TIENDA' => 0,
    'NOMBRE_CLIENTE' => 0,
    'TIT_EXPORT' => 0,
    'LISTA_MOVI' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57faac4747fff4_55655671')) {function content_57faac4747fff4_55655671($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

	<section id="main" >
		<h2 style="font-family:'Courier New', Courier, serif;"><?php echo $_smarty_tpl->tpl_vars['TIT_REPORTE']->value;?>
</h2>
		<div id="imprimir" style="width:250px; margin: 15px 0;">
			<a href="javascript:;" onclick="printReport()" >Imprimir</a>  
		</div>  		
	    Fecha: <?php echo $_smarty_tpl->tpl_vars['CURRENT_DATE']->value;?>

	    <br><br>
	    
	      
        
                    <?php echo $_smarty_tpl->tpl_vars['DATOS_TIENDA']->value[0]['NombreTienda'];?>
<br>
                    <?php echo $_smarty_tpl->tpl_vars['DATOS_TIENDA']->value[0]['NombreCia'];?>
<br>
                    <?php echo $_smarty_tpl->tpl_vars['DATOS_TIENDA']->value[0]['CedulaJuridica'];?>
<br>
                    <?php echo $_smarty_tpl->tpl_vars['DATOS_TIENDA']->value[0]['Telefonos'];?>
<br>               
                    cobros@satecsa.com<br>                           
             
        	<br>
            <h3>Señores: <?php echo $_smarty_tpl->tpl_vars['NOMBRE_CLIENTE']->value;?>
</h3>
            <br>
            Sirvase recibir para tramite de pago las siguientes facturas:
            <br>
	    
	    
		<form name="export" id="export" method="post" action="reports_export_excel.php" target="_blank">
			<input type="hidden" id="cual" name="cual" value="<?php echo $_smarty_tpl->tpl_vars['TIT_EXPORT']->value;?>
" />
			<input type="hidden" id="cualEnc" name="cualEnc" value="<?php echo $_smarty_tpl->tpl_vars['TIT_REPORTE']->value;?>
" />
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
					<tr style="padding:0px;"> 
						<td><?php echo $_smarty_tpl->tpl_vars['LISTA_MOVI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]["Numero"];?>
</td>                  
						<td ><?php echo $_smarty_tpl->tpl_vars['LISTA_MOVI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['Fecha'];?>
</td>
						<td style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['LISTA_MOVI']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['Monto'];?>
</td>                  		
					</tr> 
				<?php endfor; endif; ?>                                            
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

<?php }} ?>
