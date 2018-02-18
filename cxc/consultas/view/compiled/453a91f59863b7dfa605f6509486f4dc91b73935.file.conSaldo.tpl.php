<?php /* Smarty version Smarty-3.1.16, created on 2017-08-02 11:16:10
         compiled from "../consultas/view/conSaldo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:872909298598208dacefd59-53952374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '453a91f59863b7dfa605f6509486f4dc91b73935' => 
    array (
      0 => '../consultas/view/conSaldo.tpl',
      1 => 1501694150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '872909298598208dacefd59-53952374',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'LISTA_DOCS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_598208dad1a082_92291618',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598208dad1a082_92291618')) {function content_598208dad1a082_92291618($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

<section id="main" >
 
	<div class="box-content">
	
	<div class="control-group">
	 
          
    <div class="control-label" >
                <h2 style="margin-left:50px; "></i>Reporte de Doc. con Saldo</h2>      
    </div>
    <form class="form-horizontal">
		  <div class="control-group" id="boxSelTipoDoc" >
        <label class="control-label" for="selectTipoDoc"> Documento</label>
        <div class="controls">
          <select data-placeholder="Documento" style="width:50%;"  id="selectTipoDoc"    name ="selectTipoDoc"  data-rel="chosen"  >
                <option value="0"></option>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['I'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['I']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['I']['name'] = 'I';
$_smarty_tpl->tpl_vars['smarty']->value['section']['I']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LISTA_DOCS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                  <option value="<?php echo $_smarty_tpl->tpl_vars['LISTA_DOCS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['I']['index']]['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['LISTA_DOCS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['I']['index']]['descripcion'];?>
</option>                          
                <?php endfor; endif; ?>
          </select>
        </div>
      </div>
    </form>
		<form>
			<div class="form-actions">
				<input type="button" id="btn_buscarMovi" onclick="findMovi()" value="Generar" class="btn btn-primary">
			</div>
		</form>		
		
  </div>
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

    	
	tipodoc     = $("#selectTipoDoc").val();    
    
   // window.open('buscar.php?fechaI='+fechaI+"&fechaF="+fechaF,'_blank');
    
    window.open('genConSaldo.php?tipodoc='+tipodoc,'_blank');
    
    
}



</script>

<?php }} ?>
