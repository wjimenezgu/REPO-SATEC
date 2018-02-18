<?php /* Smarty version Smarty-3.1.16, created on 2017-11-25 10:13:21
         compiled from "../../_includes/view/topBar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:70892212253e1a2c94aa194-37288065%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e5664afa09847d8678fd9cecda140a7bcda7e68' => 
    array (
      0 => '../../_includes/view/topBar.tpl',
      1 => 1511629685,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70892212253e1a2c94aa194-37288065',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53e1a2c94c6d74_97865352',
  'variables' => 
  array (
    'CRM_SERVER' => 0,
    'USER_SESSION' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e1a2c94c6d74_97865352')) {function content_53e1a2c94c6d74_97865352($_smarty_tpl) {?>	<!-- topbar starts -->
		<div class="navbar">

			<div class="container-fluid">

<div class="span10">			
				<a class=" pull-left"href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/home/"> <img alt="Charisma Logo" src="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/resources/img/logoPage.jpg" /></a>							
					<div class="btn-group pull-left" id="divREP_CXC">
					<a class="btn btn-large  dropdown-toggle" style="margin-left:10px;margin-top:5px;"  data-toggle="dropdown" href="#">
						<i class="icon-print"></i><span class="hidden-phone"> Reportes CxC</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
                    	<li id="module_4_option_1"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/cxc/consultas/estadoCuenta.php"><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_4_option_1');?>
</span></a></li>						
                    	<li id="module_4_option_2"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/cxc/consultas/factuTramitar.php"><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_4_option_2');?>
</span></a></li>
                    	<li id="module_4_option_3"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/cxc/consultas/facturacionCxC.php"><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_4_option_3');?>
</span></a></li>
			<li id="module_4_option_7"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/cxc/consultas/notasCxC.php"><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_4_option_7');?>
</span></a></li>
                    	<li id="module_4_option_4"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/cxc/consultas/recibos.php"><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_4_option_4');?>
</span></a></li>
                    	<li id="module_4_option_5"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/cxc/consultas/antigSaldos.php"><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_4_option_5');?>
</span></a></li>
                    	<li id="module_4_option_6"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/cxc/consultas/cierre.php"><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_4_option_6');?>
</span></a></li>
                    	<li id="module_4_option_8"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/cxc/consultas/conSaldo.php"><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_4_option_8');?>
</span></a></li>                   	                    	                    	
                    	                    	                    	
					</ul>
				</div>
				<div class="btn-group pull-left" id="divREP_CXP">
					<a class="btn btn-large  dropdown-toggle" style="margin-left:10px;margin-top:5px;"  data-toggle="dropdown" href="#">
						<i class="icon-print"></i><span class="hidden-phone"> Reportes CxP</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
                    	<li id="module_5_option_1"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/cxp/consultas/estadoCuenta.php"><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_5_option_1');?>
</span></a></li>						
                    	<li id="module_5_option_2"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/cxp/consultas/documentosCxP.php"><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_5_option_2');?>
</span></a></li>
                    	<li id="module_5_option_3"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/cxp/consultas/antigSaldosCxP.php"><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_5_option_3');?>
</span></a></li>                    	                    	                    	
					</ul>
				</div>
				
				<div class="btn-group pull-left" id="divREP_INVENTARIO">
					<a class="btn btn-large dropdown-toggle" style="margin-left:10px;margin-top:5px;"  data-toggle="dropdown" href="#">
						<i class="icon-print"></i><span class="hidden-phone"> Inventario</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
                    	<li id="module_2_option_1"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/sInventario/consultas/moviPlantronics.php"><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_2_option_1');?>
</span></a></li>						
                    	<li id="module_2_option_2"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/sInventario/consultas/existencias.php"><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_2_option_2');?>
</span></a></li>
                    	<li id="module_2_option_3"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/sInventario/consultas/moviArtTiempo.php"><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_2_option_3');?>
</span></a></li>
                    	<li id="module_2_option_4"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/sInventario/consultas/ventas.php"><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_2_option_4');?>
</span></a></li>
                              	                    	                    	
					</ul>
				</div>
				<div class="btn-group pull-left" id="divREP_FACTURACION">
					<a class="btn btn-large dropdown-toggle" style="margin-left:10px;margin-top:5px;"  data-toggle="dropdown" href="#">
						<i class="icon-print"></i><span class="hidden-phone"> Facturaci&oacute;n</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
                    	<li id="module_4_option_1"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/cxc/consultas/moviPlantronics.php"><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_4_option_1');?>
</span></a></li>						
                    	<li id="module_4_option_2"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/cxc/consultas/moviPlantronics.php"><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_4_option_2');?>
</span></a></li>
                    	<li id="module_4_option_3"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/cxc/consultas/moviPlantronics.php"><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_4_option_3');?>
</span></a></li>
                    	<li id="module_4_option_4"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/cxc/consultas/moviPlantronics.php"><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_4_option_4');?>
</span></a></li>
                    	<li id="module_4_option_5"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/cxc/consultas/moviPlantronics.php"><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_4_option_5');?>
</span></a></li>                    	                    	                    	
					</ul>
				</div>
				<div class="btn-group pull-left" id="divRECI_CXC">
					<a class="btn btn-large  dropdown-toggle" style="margin-left:10px;margin-top:5px;"  data-toggle="dropdown" href="#">
						<i class="icon-print"></i><span class="hidden-phone"> Aplicar CxC</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
                    	<li id="module_6_option_1"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/cxc/recibos/ingresoRecibos.php?RoN=R"><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_6_option_1');?>
</span></a></li>					
                    	<li id="module_6_option_1"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/cxc/recibos/ingresoRecibos.php?RoN=N"><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_6_option_3');?>
</span></a></li>	
                    	<li id="module_6_option_2"><a class="ajax-link" href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/cxc/recibos/imprimeRecibos.php"><span class="hidden-tablet"> <?php echo $_smarty_tpl->getConfigVariable('module_6_option_2');?>
</span></a></li>	         	 	                
					</ul>
				</div>


				<div class="btn-group pull-left" id="divPAGO_CXP">
					<a class="btn btn-large  dropdown-toggle" style="margin-left:10px;margin-top:5px;"  data-toggle="dropdown" href="#">
						<i class="icon-print"></i><span class="hidden-phone"> Aplicar CxP</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
                    	<li id="module_7_option_1">
                    		<a class="ajax-link" href="	http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/cxp/pagos/ingreso.php?RoN=R"><span class="hidden-tablet"><?php echo $_smarty_tpl->getConfigVariable('module_7_option_1');?>
</span></a>
                    	</li>					         	 	                
					</ul>
				</div>
		</div>
				
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-user"></i><span class="hidden-phone"> <?php echo $_smarty_tpl->tpl_vars['USER_SESSION']->value;?>
</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/security/closeSession.php"><?php echo $_smarty_tpl->getConfigVariable('text_logOut');?>
</a></li>
						<li class="divider"></li>
						<li><a href="http://<?php echo $_smarty_tpl->tpl_vars['CRM_SERVER']->value;?>
/<?php echo $_smarty_tpl->getConfigVariable('system_name');?>
/login/cambioclave/frmChangePwd.php"><?php echo $_smarty_tpl->getConfigVariable('text_changepwd');?>
</a></li>
					</ul>
				</div>
		
				<!-- user dropdown ends -->

		
		</div>
	
	<!-- topbar ends -->
	
<?php }} ?>
