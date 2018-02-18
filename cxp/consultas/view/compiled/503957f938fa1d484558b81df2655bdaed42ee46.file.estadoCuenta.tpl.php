<?php /* Smarty version Smarty-3.1.16, created on 2016-11-09 15:42:13
         compiled from "../consultas/view/estadoCuenta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:190259714457f7a31ce78547-51317963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '503957f938fa1d484558b81df2655bdaed42ee46' => 
    array (
      0 => '../consultas/view/estadoCuenta.tpl',
      1 => 1478728860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190259714457f7a31ce78547-51317963',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_57f7a31cf07a66_66224083',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'LISTA_CLIENTES' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f7a31cf07a66_66224083')) {function content_57f7a31cf07a66_66224083($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

<section id="main" >
	<div class="box-content">
	
		<form class="form-horizontal">
			<div class="control-group">
				<h1>Estado de Cuenta</h1>
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
    		<div class="control-group " id="boxSelectCriterio">
        		<label class="control-label"  for="selectCriterio">Incluir</label>
            	<div class="controls ">                                             
            		<select id="selectCriterio"  name="selectCriterio">
                		<option  value="S">Solo con saldo</option>                                         
                    	<option  value="N">Todos</option>
                	</select>
                </div>
         	</div>            
			<form>
				<div class="form-actions">
					<input type="button" id="btn_buscarMovi" onclick="findMovi()" value="Generar" class="btn btn-primary">
				</div>
			</form>		
		</form>
    </div>
</section>
	
	

<script type="text/javascript">


function findMovi(){
	
	 var selCliente = $("#selectCliente").val();
	 var selCriterio = $("#selectCriterio").val();
	 if (selCliente != "0"){
    	window.open('genEstadoCuenta.php?selCliente='+selCliente+'&selCriterio='+selCriterio,'_blank');    
	 }else{
		alert("Debe seleccionar un cliente."); 
	 }
}

</script>

<?php }} ?>
