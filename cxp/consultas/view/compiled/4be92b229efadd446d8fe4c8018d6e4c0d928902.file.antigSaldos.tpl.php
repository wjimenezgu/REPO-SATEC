<?php /* Smarty version Smarty-3.1.16, created on 2016-11-14 07:23:31
         compiled from "../consultas/view/antigSaldos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1759451489580f694131a636-86434995%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4be92b229efadd446d8fe4c8018d6e4c0d928902' => 
    array (
      0 => '../consultas/view/antigSaldos.tpl',
      1 => 1478728860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1759451489580f694131a636-86434995',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_580f694137ba57_15199307',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'LISTA_CLIENTES' => 0,
    'LISTA_TIPOS' => 0,
    'CURRENT_DATE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580f694137ba57_15199307')) {function content_580f694137ba57_15199307($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

<section id="main" >
	<div class="box-content">
	<div class="control-group">
            <h2></i>Reporte de Antigüedad Saldos</h2>
       
        	<form class="form-horizontal">

		<div class="control-group" id="boxSelCliente" >
        <label class="control-label" for="selectEstCliente"> Estado Cliente</label>
        <div class="controls">
          <select data-placeholder="Estado" style="width:50%;"  id="selectEstCliente"    name ="selectEstCliente"  data-rel="chosen"  >
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
" ><?php echo $_smarty_tpl->tpl_vars['LISTA_CLIENTES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['descripcion'];?>
 (<?php echo $_smarty_tpl->tpl_vars['LISTA_CLIENTES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['id'];?>
)</option>                         
                        <?php endfor; endif; ?>
                    </select>
                </div>
            </div>
            
            </form>           
            
             <form class="form-horizontal">
                  
		  <div class="control-group" id="boxSelTipoCli" >
               <label class="control-label" for="selectTipoCli"> Tipo Cliente</label>
               <div class="controls">
          <select data-placeholder="Documento" style="width:50%;"  id="selectTipoCli"    name ="selectTipoCli"  data-rel="chosen"  >
                      <option value="0"></option>
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['I'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['I']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['I']['name'] = 'I';
$_smarty_tpl->tpl_vars['smarty']->value['section']['I']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LISTA_TIPOS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['I']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['I']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['I']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['I']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['I']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['I']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['I']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['I']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['I']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['I']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['I']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['I']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['I']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['I']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['I']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['I']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['I']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['I']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['I']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['I']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['I']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['I']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['I']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['I']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['I']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['I']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['I']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['I']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['I']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['I']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['I']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['I']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['I']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['I']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['I']['total']);
?>
                          <option value="<?php echo $_smarty_tpl->tpl_vars['LISTA_TIPOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['I']['index']]['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['LISTA_TIPOS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['I']['index']]['descripcion'];?>
</option>                          
                        <?php endfor; endif; ?>
                    </select>
                </div>
          </div>
                  </form>
                	
		
		 <form class="form-horizontal">
            <div class="control-group" id="boxdateFechaI">	
            	<label class="control-label" for="dateFechaI">Fecha Corte</label>                                           
                <div class="controls" id="input-dateFechaI">
                	<input type="text" class="datepicker" id="dateFechaI" name="dateFechaI" placeholder="Indicar Fecha Inicio" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_DATE']->value;?>
"> 
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

    
	selCliente  = $("#selectEstCliente").val(); 
	tipocli     = $("#selectTipoCli").val();
    fechaI 		= $("#dateFechaI").val();
    
    
   // window.open('buscar.php?fechaI='+fechaI+"&fechaF="+fechaF,'_blank');
    
    window.open('genAntigSaldos.php?selCliente='+selCliente+"&tipocli="+tipocli+"&fechaI="+fechaI,'_blank');
    
    
}



</script>

<?php }} ?>
