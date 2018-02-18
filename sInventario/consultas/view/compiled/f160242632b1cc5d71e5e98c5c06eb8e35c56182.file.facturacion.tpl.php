<?php /* Smarty version Smarty-3.1.16, created on 2016-10-12 11:51:09
         compiled from "../consultas/view/facturacion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7082135725705a9e85403b3-93751188%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f160242632b1cc5d71e5e98c5c06eb8e35c56182' => 
    array (
      0 => '../consultas/view/facturacion.tpl',
      1 => 1476288684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7082135725705a9e85403b3-93751188',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5705a9e8594c92_18592610',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'SELTIENDA_OFF' => 0,
    'LISTA_TIENDAS' => 0,
    'ID_TIENDA' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5705a9e8594c92_18592610')) {function content_5705a9e8594c92_18592610($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

<div class="row-fluid ">		
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2>Reporte de Facturación</h2>
        </div>
        <div class="box-content">

				<div class="control-group">
					<div class="controls">
					
                        <div class="input-prepend pull-left " id="boxselectStore">
                        	<span class="add-on" style="padding:0px; height:26px; margin:0px 3px 3px 0px;">                                                   
                        	<select class="pull-right" id="selectStore" name="selectStore" <?php if ($_smarty_tpl->tpl_vars['SELTIENDA_OFF']->value=="S") {?> disabled<?php }?>> 
                        		<option value="-1"></option>
                            	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['name'] = 'lP';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LISTA_TIENDAS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                                	<option value="<?php echo $_smarty_tpl->tpl_vars['LISTA_TIENDAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codTienda'];?>
" <?php if ($_smarty_tpl->tpl_vars['LISTA_TIENDAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codTienda']==$_smarty_tpl->tpl_vars['ID_TIENDA']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LISTA_TIENDAS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['nombreTienda'];?>
</option>                                	
                                <?php endfor; endif; ?>
                            </select>
              				</span>                                      
                        </div>
                        
                        <br><br>
                        <div class="row-fluid" >                                  
                                	<div id="input-dateInicial">
                                    	<input type="text" class="datepicker" id="dateInicial" name="dateInicial" placeholder="Seleccione Fecha Inicial *" value=""> 
                                    </div>
                                    <div id="input-dateFinal">
                                    	<input type="text" class="datepicker" id="dateFinal" name="dateFinal" placeholder="Seleccione Fecha Final *" value=""> 
                                    </div>
                        </div>

                        
                        <br><br>
                        
                         <div id="message-fields-obl"></div>                  
						<button type="button" class="btn btn-large btn-primary" name ="btnImpFacturacion"  id="btnImpFacturacion" onclick="prnFacturacion()" style="float:right;margin-top:-30px;"><i class="icon-print icon-white"></i> Generar Reporte</button>
						 

    

					</div>               
				</div>
</div> <!-- box-content -->
			         
    </div><!--/span-->
</div><!--/row-->


<script type="text/javascript">


function goPage(){
		var store 	= $("#selectStore").val();
		var fechaI 	= $("#dateInicial").val();
		var fechaF 	= $("#dateFinal").val();
				
		window.open('prnFacturacion.php?store='+store+"&fechaI="+fechaI+"&fechaF="+fechaF,'_blank');

	};	

$(document).ready(function(){    
    
    $('.datepicker').datepicker({
       language: "es",
       format:"dd/mm/yyyy",
       todayHighlight: true,
       autoclose: true
       //,           
       //startDate: new Date()
    });
    
    $( "#dateInicial" ).datepicker({dateFormat:"dd/mm/yyyy"}).datepicker("setDate",new Date());
    $( "#dateFinal" ).datepicker({dateFormat:"dd/mm/yyyy"}).datepicker("setDate",new Date());

});

function prnFacturacion(){
	// Se debe validar primero si los campos obligatorio fueron seleccionados.
	
	// se inicializa a con false, no hay errores
	var errors = false;

    // El campo tienda es obligatorio
	var selStore = $("#selectStore").val();
    if(selStore == "-1"){
        $("#boxselectStore").addClass("error");
        errors = true;
    }else{
        $("#boxselectStore").removeClass("error");
    }
	// fecha inicial es obligatorio
    var fInicial = $("#dateInicial").val();
    if(fInicial == ""){
        $("#input-dateInicial").addClass("error");
        errors = true;
    }else{
        $("#input-dateInicial").removeClass("error");
    }
   
	// fecha final es obligatorio
    var fFinal = $("#dateFinal").val();
    if(fFinal == ""){
        $("#input-dateFinal").addClass("error");
        errors = true;
    }else{
        $("#input-dateFinal").removeClass("error");
    }
    
    if(errors != true){
    	
    	// todos los datos obligarios fueron suministrados.
    	// se debe revisar fecha final >= a fecha inicial
    	var startDate = $('#dateInicial').datepicker('getDate');
		var endDate = $('#dateFinal').datepicker('getDate');	
		if (startDate > endDate){
			
			errors = true;
			// fecha inicial es mayor a la fecha final
			$("#input-dateFinal").addClass("error");
			$("#input-dateInicial").addClass("error");
			document.getElementById('message-fields-obl').innerHTML = "<div class='alert alert-error center' style=''><strong><span class='icon icon-red icon-alert'/></span> Fecha Inicial mayor a Fecha Final</strong></div>";
			return false;
		
		}else{
			$("#input-dateFinal").removeClass("error");
			$("#input-dateInicial").removeClass("error");
			// no hay errores se puede continuar
			// se limpia el campo de mensaje de errores.
			$("#message-fields-obl").html("");
			
			
			var store 	= $("#selectStore").val();
			var fechaI 	= $("#dateInicial").val();
			var fechaF 	= $("#dateFinal").val();
					
			window.open('prnFacturacion.php?store='+store+"&fechaI="+fechaI+"&fechaF="+fechaF,'_blank');
		}
   	 
    }else{
        $("#message-fields-obl").html("<div class='alert alert-error pull-left'><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");
        return false;
    } // if(errors != true)    
        
}




</script>

<?php }} ?>
