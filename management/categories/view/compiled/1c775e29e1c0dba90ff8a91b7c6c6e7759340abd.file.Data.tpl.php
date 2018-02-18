<?php /* Smarty version Smarty-3.1.16, created on 2016-09-09 09:12:44
         compiled from "../categories/view/Data.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30182785757d2d16c5878c7-95038387%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c775e29e1c0dba90ff8a91b7c6c6e7759340abd' => 
    array (
      0 => '../categories/view/Data.tpl',
      1 => 1471877237,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30182785757d2d16c5878c7-95038387',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'ACTION' => 0,
    'ID' => 0,
    'DATA' => 0,
    'BTN_ACTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_57d2d16c622fe7_15423234',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d2d16c622fe7_15423234')) {function content_57d2d16c622fe7_15423234($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header well" data-original-title>
				<h2>Información de Categoría</h2>
			</div>
			<div class="box-content">
				<form class="form-horizontal" id="frmData" action="processData.php" method="POST">
					<input type="hidden" id="action" name="action" value="<?php echo $_smarty_tpl->tpl_vars['ACTION']->value;?>
">						
 			 	<fieldset>
					<div class="control-group" id="boxId" >
						<label class="control-label" for="disabledInput">Id*</label>
						<div class="controls">
							<input class="input-xlarge " name="fId" id="fId" type="text" style="text-transform:uppercase" placeholder="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" maxlength="3" value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['ACTION']->value==2) {?> readonly="true"<?php }?> >
						</div>
					</div>				
					<div class="control-group" id="boxdescripcion" >
						<label class="control-label" for="focusedInput">Descripción*</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fdescripcion" id="fdescripcion" maxlength="50" type="text" value="<?php echo $_smarty_tpl->tpl_vars['DATA']->value[0]['descripcion'];?>
">
						</div>
				 	</div>
				 	<div class="control-group" id="boxidPadre" >
						<label class="control-label" for="focusedInput">Id Padre*</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fidPadre" id="fidPadre" maxlength="50" type="text" value="<?php echo $_smarty_tpl->tpl_vars['DATA']->value[0]['idPadre'];?>
">
						</div>
				 	</div>
				 	<div class="control-group" id="boxNivel" >
						<label class="control-label" for="focusedInput">Nivel*</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fnivel" id="fnivel" maxlength="50" type="text" value="<?php echo $_smarty_tpl->tpl_vars['DATA']->value[0]['nivel'];?>
">
						</div>
				 	</div>
				 	<div class="control-group" id="boxNivelStr" >
						<label class="control-label" for="focusedInput">Nivel String*</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fnivelstr" id="fnivelstr" maxlength="50" type="text" value="<?php echo $_smarty_tpl->tpl_vars['DATA']->value[0]['nivelStr'];?>
">
						</div>
				 	</div>
				 	<div class="control-group" id="boxsigteIdHijo" >
						<label class="control-label" for="focusedInput">Id Siguiente Hijo*</label>
						<div class="controls">
							<input class="input-xlarge focused" name ="fsigteIdHijo" id="fsigteIdHijo" maxlength="50" type="text" value="<?php echo $_smarty_tpl->tpl_vars['DATA']->value[0]['sigteIdHijo'];?>
">
						</div>
				 	</div>	 					 			
 					<div class="modal-footer">
						<button id=btnSubFrmData type="submit" name="enviar" class="btn btn-large btn-primary pull-right"><?php echo $_smarty_tpl->tpl_vars['BTN_ACTION']->value;?>
</button>
						<a href="index.php" class="btn btn-large pull-right" data-dismiss="modal">Cerrar</a>
						<div id="message-fields-obl"></div> 
					</div> 					
				</fieldset>
		  </form>			
		    </div>				
		</div>		
	</div>

<script type="text/javascript">
$(document).ready(function(){
	// Si la action es igual a 3 significa que es un borrado
	// Si la action es igual a 4 significa que es solo visualizar
	// se buscar desabilitar todos los campos y que solo pueda seleccionar los botones de accion.
	var newAction = document.getElementById('action'); 
	if (newAction.value == "3" || newAction.value == "4"){
		$("#frmData :input").attr('readonly', true);
	}else{
		if (newAction.value == "1"){
			$("#boxId").toggle();
			
		}else{
			$("#fdescripcion").focus();
		}
	}
});

$(function(){
	
    $('#frmData').validate({ 
        submitHandler: function (form) {             
            $("#message-fields-obl").css("display","none");
            form.submit();            
        }
    });


    $("#fdescripcion").rules('add', {
        required: function(){$("#boxdescripcion").removeClass("error"); return true;},
        messages: {
            required:  function(){
                               $("#boxdescripcion").addClass("error");
                               $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");
                            }
        }
    });
});
</script>
	<?php }} ?>
