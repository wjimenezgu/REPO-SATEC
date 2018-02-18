<?php /* Smarty version Smarty-3.1.16, created on 2015-08-04 18:22:51
         compiled from "../mcompras/view/prnBoletaBodega.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25569818555c143d1685e25-06789669%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bd586f8ff9b4fab2fa11a463cc3d1fdc6ca531f' => 
    array (
      0 => '../mcompras/view/prnBoletaBodega.tpl',
      1 => 1438730547,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25569818555c143d1685e25-06789669',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55c143d1731d28_82086493',
  'variables' => 
  array (
    'CURRENT_DATE' => 0,
    'TIT_REPORTE' => 0,
    'LIST_ITEMS_ORDERS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c143d1731d28_82086493')) {function content_55c143d1731d28_82086493($_smarty_tpl) {?><form class="form-horizontal" id='frmprnBoletaBodega'>

  	<div class='row-fluid'>
  	
  		<table cellspacing="0" style="width: 100%;  font-size: 16px;">
  		
	        <tr>
	        
	            <td style="margin-left:15px; width: 50%;">
	                <img  src="../../resources/img/logoPage.jpg" alt="Logo"><br>
	                <label style="text-align: left; font-size: 60%" >Impreso: <?php echo $_smarty_tpl->tpl_vars['CURRENT_DATE']->value;?>
</label>
	            </td>
	            
	        </tr>
	        
	    </table>
	    
  	</div>
  	
	<div class="row-fluid" >		
	
		</br>
		</br>
		<h2 style='text-align:  center;'><?php echo $_smarty_tpl->tpl_vars['TIT_REPORTE']->value;?>
</h2>
		</br>
 		<h2 style='text-align:  center;'>Número de Orden:<?php echo $_smarty_tpl->tpl_vars['LIST_ITEMS_ORDERS']->value[0]['numOrdenCompra'];?>
</h2>
 		</br>

	</div>
	
	</br>
	</br>
    
    <div class="box-content">
    
    	<table class="table table-bordered" id="tableItem">
    	
        	<thead>
        	
            	<tr>
                        		<th>Codigo</th>
                        		<th>Codigo Externo</th>
                        		<th>Descripcion</th>                        
                        		<th style="text-align:right;">Cantidad Ingresada</th>
                        		<th style="text-align:right;">Cantidad en Bodega</th>
                        		<th style="text-align:right;">Cantidad en Despacho</th>                    
                    
                </tr>
                
            </thead>
            
            <tbody id="tbod" name="tbod">
            
            	<div id ="divtbod" class="grid" style="width: fit-content; border: 1px;"></div>
            	
        		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['name'] = 'lP';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LIST_ITEMS_ORDERS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
					
		<td style="width:50px;"><?php echo $_smarty_tpl->tpl_vars['LIST_ITEMS_ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codArti'];?>
</td>
		<td style="width:150px;"><?php echo $_smarty_tpl->tpl_vars['LIST_ITEMS_ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['codArtiProveedor'];?>
</td>
		<td style="width:350px;"><?php echo $_smarty_tpl->tpl_vars['LIST_ITEMS_ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['descArti'];?>
</td>
		<td style="width:75px;text-align:right;"><?php echo $_smarty_tpl->tpl_vars['LIST_ITEMS_ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['cantIngInv'];?>
</td>
		<td style="width:75px;"></td>
		<td style="width:75px;"></td>
        			</tr> 
        			
				<?php endfor; endif; ?>
				
			</tbody>
			
        </table>  
        
	</div>
			
	</br>
		</br>
			</br>
				</br>
					</br>
						
<!-- 										
	<table class='table-condensed' style='text-align: center;'>
	
			<thead>
			
				<tr>
				
					<th >________________________________</th>

				</tr>
				
			</thead>
			
			<tbody>
			
				<tr>
				
					<td>Conciliado por:</td>

					
				</tr>
				
			</tbody>
			
	</table>
 -->	
</form>            <?php }} ?>
