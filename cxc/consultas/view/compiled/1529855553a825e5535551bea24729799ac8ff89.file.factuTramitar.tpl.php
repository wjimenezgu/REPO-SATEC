<?php /* Smarty version Smarty-3.1.16, created on 2016-11-29 10:22:32
         compiled from "../consultas/view/factuTramitar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:76595934357fa296f9afc82-84114793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1529855553a825e5535551bea24729799ac8ff89' => 
    array (
      0 => '../consultas/view/factuTramitar.tpl',
      1 => 1477420663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76595934357fa296f9afc82-84114793',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_57fa296f9c1739_02753803',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'LISTA_CLIENTES' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fa296f9c1739_02753803')) {function content_57fa296f9c1739_02753803($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

<section id="main" >
	<div class="box-content">
	
		<form class="form-horizontal">
			<div class="control-group">
				<h1>Facturas a Tramitar</h1>
			</div>
			<div class="control-group" id="boxSelCliente" >
				<label class="control-label" for="selectCliente"> Cliente</label>
				<div class="controls">
					<select data-placeholder="Ingrese Cliente para listar facturas" style="width:50%;"  id="selectCliente"    name ="selectCliente"  data-rel="chosen"  >
                    	<option value="0"></option>
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['name'] = 'lP';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LISTA_CLIENTES']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                        	<option value="<?php echo $_smarty_tpl->tpl_vars['LISTA_CLIENTES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['id'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_CLIENTES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['nombre'];?>
" ><?php echo $_smarty_tpl->tpl_vars['LISTA_CLIENTES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['nombre'];?>
</option>                        	
                        <?php endfor; endif; ?>
                    </select>
                </div>
            </div>
			<hr width=100%<?php ?>>                           
            <table class="table table-striped table-bordered bootstrap-datatable" id="tblFactTramitar">
                <thead>
                    <tr>
                        <th>N&uacute;mero</th>
                        <th>Fecha</th>
                        <th>Vence</th>
                        <th>Monto</th>
                        <th>Sel</th>
                    </tr>
                </thead>
				<tbody id="info-FactTramitar" >
			
                </tbody>
            </table>                                   
			<form>
				<div class="form-actions">
					<input type="button" id="btn_buscarMovi" onclick="findMovi()" value="Generar" class="btn btn-primary">
				</div>
			</form>		
		</form>
    </div>
</section>
	
	

<script type="text/javascript">

$(document).ready(function(){
	
	$('.datepicker').datepicker({
        language: "es",
        format:"dd/mm/yyyy",
        todayHighlight: true,
        autoclose: true
      //  ,           
      //  startDate: new Date(),
       , defaultDate : new Date()
     });


});


function findMovi(){
	
	 var selCliente = $("#selectCliente").val();
	
	var TableData;
	TableData = storeTblValues()
	TableData = $.toJSON(TableData);
    
    window.open('genRepFactTramitar.php?selCliente='+selCliente+"&pTableData=" + TableData,'_blank');    
    
}


function storeTblValues()
{
    var TableData = new Array();
    var i=0;
    $('#tblFactTramitar tr').each(function(row, tr){
    	var aRowSel = document.getElementById('selRow' + i);
    	
    	if (aRowSel !== null){    		
    		if (aRowSel.checked == true){	
          	  estaSel = 'SI';
      	  	}else {
      		  estaSel = 'NO';
      	  	}	
    	}else{
        	estaSel = 'NO';
    	}
    	
    	if (estaSel == 'SI'){
	        TableData[row]={
	              "Numero" : $(tr).find('td:eq(0)').text()
	            , "Fecha"  : $(tr).find('td:eq(1)').text()
	            , "Vence"  : $(tr).find('td:eq(2)').text()
	            , "Monto"  : $(tr).find('td:eq(3)').text()
	          //  , "EstaSel" : estaSel
	        }
	         
    	 }
    	i++; 
    }); 
    TableData.shift();  // first row will be empty - so remove
    return TableData;
}

// Si cambia algun dato del encabezado se debe limpiar la lista de facturas
// Esto para asegurar que debe vover a traer los datos de factuas a conciliar
//
$("#selectCliente").on("change", function(e){
    $("#info-FactTramitar").html("");
    var data= $("#selectCliente").val();
 
    
    $dataStr = (data.split("|"));
    $selCliente  = $dataStr[0];
   
    $("#info-FactTramitar").load("buscarFactCliente.php", { selCliente : $selCliente}, function(response,status,xhr){ });
  
});



</script>

<?php }} ?>
