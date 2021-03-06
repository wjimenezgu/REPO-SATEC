{$NAV_MENU}
<div class="row-fluid">
        <div class="box span12">
                <div class="box-header well" data-original-title>
                        <h2><i class="icon-edit"></i> CREACIÓN DE PEDIDO</h2>
                        <p class="btn-group" style="margin-left:10px; float:left;">
                                  <button class="btn active">Simple</button>
                                  <!--
                                  <button class="btn">Múltiple</button>
                                  -->
                        </p>                        
                </div>
                <div class="box-content">
                    <form class="form-horizontal" action="savePedido.php" id="frm-newPedido" method="post">
                        <input type="hidden" name="count-numRow" id="count-numRow" value="1">
                        <input type="hidden" name="invOpen" id="invOpen" value="0">
                    <legend style="height:35px">                                                

                        <div class="span4" style="height:30px; margin-top:0px;">
                            
                            <div class="input-prepend pull-left">
                                <span class="add-on" style="padding:0px; height:26px; margin:0px 3px 3px 0px;">                                    
                                    <select id="selectProveedor" name="selectProveedor" data-rel="chosen" style="height:25px;">
                                        <option value="0">- Seleccione el Proveedor -</option>
                                        {section name="p" loop=$PROVEEDORES}
                                            <option value="{$PROVEEDORES[p].idProveedor}">{$PROVEEDORES[p].nombreProveedor|lower|capitalize}</option>
                                        {/section}
                                    </select>                                    
                                    <input type='hidden' name='txt-costObl' id='txt-costObl' value='N'>
                                </span>                                
                            </div>  
                                    
                            <a class="btn btn-small" data-toggle="modal" style="display: none" data-target="#message-NA" id="btn-NA"><i class="icon icon-orange icon-add"></i> Nuevo Artículo</a>
                        </div>
                        <div class="span8" id="content-message-obl">

                        </div>
                    </legend>
                                    
                    <div class="row-fluid">

                        <div class="span4">                                                   
                            
                            <div class="row-fluid" >
                                    <div class="span6">Fecha Pedido:</div>
                                    <div class="span6">                                        
                                        <div class="pull-left control-group" id="input-datePedido">
                                            <input type="text" class="input-block-level datepicker" id="datePedido" name="datePedido" style="width:122px" disabled value="{$CURRENT_DATE}">
                                        </div>
                                    </div>
                            </div>                                              
   
                        </div> 
                                        
                        <div class="span4">                                              
                            
                            <div class="row-fluid">
                                    <div class="span6">Fecha de Arribo:</div>
                                    <div class="span6">
                                        <div class="pull-left control-group" id="input-dateArribo">
                                            <input type="text" class="input-block-level datepicker" id="dateArribo" name="dateArribo" style="width:122px" disabled value="">
                                        </div>
                                    </div>
                            </div>                                                        
                                                                                   
                        </div> 
                                        
                        <div class="span4">                           
                            
                            <div class="row-fluid" >
                                    <div class="span4">Embarques Parciales:</div>
                                    <div class="span8">
                                        <label class="radio">
                                        <input type="radio" name="embarquesP" id="embarquesP1" value="N" checked="" disabled> No
                                        </label>
                                        <label class="radio">
                                        <input type="radio" name="embarquesP" id="embarquesP2" value="S" disabled> Sí
                                        </label>
                                    </div>
                            </div>                              
                            
                        </div>                        
                        
                    </div> 
                                        
                    <div class="row-fluid">

                        <div class="span4">
                            
                            <div class="row-fluid" >
                                    <div class="span6">Dirección Envío:</div>
                                    <div class="span6">                                        
                                        <div class="pull-left control-group" id="input-DirEnvio">
                                        <select id="selectDirEnvio"  name="selectDirEnvio" style="width:122px" disabled>
                                            <option style="padding:5px;" value="0">- Dir. Envío -</option>
                                        {section name=tc loop=$ALL_DIR_ENVIO}
                                            <option style="padding:5px;" value="{$ALL_DIR_ENVIO[tc].id}" >{$ALL_DIR_ENVIO[tc].DirEnvioMer}</option>
                                        {/section}
                                        </select>                                        
                                        </div>
                                    </div>
                            </div>  
                            
                           <div class="row-fluid" style="margin-top:20px;">
                                    <div class="span6">Forma de Pago:</div>
                                    <div class="span6">
                                        {section loop=$LIST_OPT_PAGO name=opt}
                                        <label class="radio" style="margin-left:-7px;">
                                            <input type="radio" name="payMethod" id="payMethod{$LIST_OPT_PAGO[opt].idOpcionPago}" value="{$LIST_OPT_PAGO[opt].idOpcionPago}" disabled> {$LIST_OPT_PAGO[opt].descripcion|lower|capitalize}
                                        </label>
                                        <br />
                                        {/section}                                                                          
                                        <script type="text/javascript">
                                            var arr = [ {section loop=$LIST_OPT_PAGO name=val}{$smarty.section.val.index+1}{if $smarty.section.val.index eq count($LIST_OPT_PAGO)-1}{else},{/if} {/section}];
                                        </script>
                                    </div>
                            </div>                             
                            
                        </div>
                        <div class="span4">
                            
                            <div class="row-fluid" >
                                    <div class="span6">Envío Documentos:</div>
                                    <div class="span6">
                                        <div class="pull-left control-group" id="input-DirDocs">
                                        <select id="selectDirDocs"  name="selectDirDocs" style="width:122px;" disabled>
                                            <option style="padding:5px;" value="0">- Dir. Documet -</option>
                                        {section name=tc loop=$ALL_DIR_DOCS}
                                            <option style="padding:5px;" value="{$ALL_DIR_DOCS[tc].id}" >{$ALL_DIR_DOCS[tc].DirenvioDoc}</option>
                                        {/section}
                                        </select>  
                                        </div>
                                    </div>
                            </div>  
                            
                            <div class="row-fluid" style="margin-top:20px;">
                                <div id="box-tajetas" style="display:none;">    
                                    <div class="span6">Tipo Tarjeta:</div>
                                    <div class="span6">
                                        
                                        <div class="pull-left control-group" id="input-TipTarjeta">
                                        <select id="selectTipTarjeta"  name="selectTipTarjeta" style="width:122px;">
                                            <option style="padding:5px;" value="0">- Tipo Tarjeta -</option>
                                        {section name=tc loop=$ALL_TIP_CARDS}
 											{if $ALL_TIP_CARDS[tc].idTarjeta == '0'}
                                             <option style="padding:5px;" value="{$ALL_TIP_CARDS[tc].idTarjeta}" selected>{$ALL_TIP_CARDS[tc].Tarjeta}</option>
                                             {else}
                                             <option style="padding:5px;" value="{$ALL_TIP_CARDS[tc].idTarjeta}">{$ALL_TIP_CARDS[tc].Tarjeta}</option>
                                             {/if}                                       
<!-- 
                                         <option style="padding:5px;" value="{$ALL_TIP_CARDS[tc].idTarjeta}" >{$ALL_TIP_CARDS[tc].Tarjeta}</option>
 -->                               
                                          
                                        {/section}
                                        </select>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>                             
                            
                        </div>
                        <div class="span4">
                            
                            <div class="row-fluid" style="margin-top:5px;">
                                    <div class="span4">Marcas:</div>
                                    <div class="span6">                                        
                                        <textarea class="input-block-level" id="marks" name="marks" style="margin-top:0px; margin-left:0px; height:40px; resize: none;" disabled="">SATEC S.A. SAN JOSE, COSTA RICA</textarea>
                                    </div>
                            </div>
                            
                            <div class="row-fluid" style="margin-top:5px;">
                                    <div class="span4">Empaque:</div>
                                    <div class="span6">                                                                                
                                        <textarea class="input-block-level" id="packing" name="packing" style="margin-top:0px; margin-left:0px; height:40px; resize: none;" disabled="">EXPORT/EXPORTACION</textarea>                                        
                                    </div>
                            </div>
                            
                            <div class="row-fluid" style="margin-top:5px;">
                                    <div class="span4">Vía Envío:</div>
                                    <div class="span6">                                        
                                        <textarea class="input-block-level" id="shipvia" name="shipvia" style="margin-top:0px; margin-left:0px; height:40px; resize: none;" disabled=""></textarea>
                                    </div>
                            </div>                             
                            
                        </div>
                        
                    </div>                                                           
                                        
                    <div class="row-fluid">
                            <div class="box span12">
                                    <div class="box-header well" data-original-title>
                                            <h2>Lista de Artículos</h2>
                                            <div class="box-icon">                                                    
                                                <a href="#" class="btn btn-minimize btn-round" style="display: none;"><i class="icon-chevron-down" id="own-arrow-frmBP"></i></a>                                                    
                                            </div> 
                                            
                                            <div class="box" style="float: right; padding:0; margin-top:0px; font-weight:normal; ">
                                                
                                                <select id="selectMoneda"  name="selectMoneda" style="width:100px" disabled>
                                                    <option style="padding:5px;" value="0">- Moneda -</option>
                                                {section name=m loop=$MONEDAS}
                                                    <option style="padding:5px;" value="{$MONEDAS[m].idMoneda}" {if $MONEDAS[m].idMoneda eq "DOL"} selected{/if}>{$MONEDAS[m].descripcion|lower|capitalize}</option>
                                                {/section}
                                                </select> 
                                                
                                            </div>                                                
                                            <label class="control-label" for="selectMoneda" id="lbl-moneda" style="margin-right:5px; margin-top:-2px; float:right; font-weight:bold;">Moneda: </label>
                                    </div>
                                    <div class="box-content" id="box-frmPedido" style="display: none;">

                                        
                                        <table class="table table-striped tabs-content-inner" id="tblPedido" border="0">
							  <thead>
								<tr>
                                                                    <th style="text-align:center; ">#</th>
                                                                    <th style="text-align:center; ">Cant</th>
                                                                    <th >
                                                                        Artículo
                                                                    </th>
                                                                    <th >Cost. Unit</th>                                          
                                                                    <th >Cost. Tot</th>                                          
                                                                    <th colspan="2">Tipo Compromiso</th>                                          
                                                                      
                                                                </tr>
							  </thead>   
							  <tbody>
                                                                <tr class="none"></tr>
                                                                <tr class="numRow1" id="register1">
                                                                    <td class="evalNumRegister" style="text-align:center;"><br><div style="margin-top:4px; ">1</div></td>
                                                                        <td class="evalCant" style="text-align: center">
                                                                            <div class="control-group" id="row1-input-cant">
                                                                                <br><input class="input-mini toCalc" name="row1-cant" id="row1-cant" type="text" value="0" style="text-align:right; font-size:12px; width:26px;" oninput="makeCal(this.id)">
                                                                            </div>
                                                                        </td>
                                                                        <td class="evalArti" style="width:45%">
                                                                            <div class="pull-left control-group" id="row1-input-codProveedor" style="width:28%;" title="codProveedor">
                                                                                <span class="label label-info">Cod.Arti.Prov</span><br><input type="text" class="input-mini" style="width:90%;" id="row1-codProveedor" name="row1-codProveedor" value="" placeholder="Cod.Arti.Prov">
                                                                            </div>
                                                                            <div class="pull-left control-group" id="row1-input-nameArticle" style="width:54%" title="nameArticle">
                                                                                <span class="label label-info">Descripción</span><br><input type="text" class="input-mini" style="width:95%;" id="row1-nameArticle"  name="row1-nameArticle"  value="" placeholder="Nombre Artículo">
                                                                            </div>                                                                            
                                                                            <div class="pull-left control-group" id="row1-input-codInterno" title="codInterno">
                                                                                <span class="label label-info">Cod.Interno</span><br><input type="text" class="input-mini" id="row1-codInterno"   name="row1-codInterno"   value="" placeholder="Cod.Interno">
                                                                            </div>
                                                                            
                                                                            <!--
                                                                            <i class="icon icon-blue icon-info pull-left"></i>
                                                                            -->
                                                                            
                                                                        </td>
                                                                        <td class="evalCostUnit" >
                                                                            <div class="pull-left control-group" id="row1-input-costUnit" style="margin-right:3px;">
                                                                                <br><input class="input-mini toCalc" id="row1-costUnit"  name="row1-costUnit"  type="text" value="" style="text-align:right;" oninput="makeCal(this.id)">
                                                                            </div>
                                                                        </td>
                                                                        <td class="evalCostTotal">
                                                                                <br><input class="input-mini toCalc" id="row1-costTotal" name="row1-costTotal" type="text" value="0" style="text-align:right;">
                                                                        </td>
                                                                        <td class='evalInfoRef' style="width:30%">
                                                                            
                                                                            <br>
                                                                            <div class="pull-left">
                                                                                    <select id="row1-typeRef" name="row1-typeRef" class="own-selected" style="width:68px; padding:0; float: left; margin-top:2px; margin-right:2px;">
                                                                                            <option value="0">Tipo</option>
                                                                                            {section loop=$COMPROMISOS name=co}
                                                                                                {if $COMPROMISOS[co].descripcion eq "STOCK"}
                                                                                                <option value="{$COMPROMISOS[co].idTipoCompromiso}" selected="">{$COMPROMISOS[co].descripcion|truncate:15:""}</option>
                                                                                                {else}
                                                                                                <option value="{$COMPROMISOS[co].idTipoCompromiso}">{$COMPROMISOS[co].descripcion|truncate:15:""}</option>
                                                                                                {/if}
                                                                                            {/section}                                                                                            
                                                                                    </select>                                                                        
                                                                                <input type="text" id="row1-numRef" name="row1-numRef" placeholder="#referencia" class="input-mini pull-left" style="margin:0px 3px 3px 0px; float: left; width:30%;">
                                                                                <input type="text" id="row1-detRef" name="row1-detRef" placeholder="detalle" class="input-mini pull-left" style="margin:0px 3px 3px 0px; float: left; width:29%;">
                                                                            </div>
                                                                            
                                                                            
                                                                        </td>
                                                                        <td class="evalBtnDel">
                                                                            <br><a onclick="delRegister(1)" style="cursor: pointer;"><span class="icon icon-color icon-remove"></span></a>
                                                                        </td>
                                                                        
								</tr>                                                                 
                                                                <tr>
                                                                     <td colspan="3">
                                                                     </td>
                                                                     <td colspan="4" style="text-align:right;">
                                                                         <!--                                                                                                                                                  
                                                                         <button class="btn btn-small" data-toggle="modal" data-target="#solicitudes-modal"><i class="icon icon-blue icon-book"></i> Solicitudes de Pedido</button>
                                                                         -->
                                                                         <button id="btn-newArticulo" class="btn btn-small" data-toggle="modal" data-target="#newArticle-modal"><i class="icon icon-orange icon-add"></i> Nuevo Artículo</button>
 
                                                                         <button id="btn-getInventario" class="btn btn-small" data-toggle="modal" data-target="#inventory-modal" ><i class="icon-list-alt"></i> Inventario</button>

                                                                         
                                                                         <button type="button" class="btn btn-small btn-success" id="addNewRow"><i class="icon-plus icon-white"></i> Agregar</button>
                                                                     </td>
                                                                </tr>
                                                                
                                                                <tr>
                                                                     <th colspan="3" style="border:none;">Instrucciones:</th>
                                                                     <th style="text-align:right; border:none;">Sub-Total</th>
                                                                     <td style="border:none;"><input class="input-mini" id="subTotal" name="subTotal" type="text" value="0" style="text-align:right;" ></td>
                                                                     <th style="border:none;"></th>
                                                                     <td style="border:none;">
                                                                     </td>
                                                                </tr>
                                                                
                                                        <tr>                                                             
                                                             <td colspan="3" rowspan="3" style="border:none;">
                                                                 <textarea class="input-block-level" id="instructions" name="instructions" rows="3" style="margin-top:0px; height:135px;"></textarea>
                                                             </td>
                                                             <th style="text-align:right; border:none;">Cost.Envío</th>
                                                             <td style="border:none;"><input class="input-mini finalCost" id="costEnvio" name="costEnvio" type="text" value="0" style="text-align:right;"></td>
                                                             <th style="border:none;"></th>
                                                             
                                                        </tr>
                                                        <tr>

                                                             <th style="text-align:right; border:none;">                                                         
                                                                <input class="input-mini"  title="Cambiar Etiqueta" data-rel="tooltip" id="lblOtherCost" name="lblOtherCost" type="text" value="Other/Otros" style="text-align:right; font-weight:bold; cursor:pointer; font-size:10px; width:64px;">
                                                             </th>
                                                             <td style="border:none;"><input class="input-mini finalCost" id="otherCost" name="otherCost" type="text" value="0" style="text-align:right;"></td>
                                                        </tr>
                                                        <tr>

                                                             <th style="text-align:right; border:none;">Total</th>
                                                             <td style="border:none;"><input class="input-mini" id="totalPedido" name="totalPedido" type="text" value="0" style="text-align:right;"></td>
                                                             <th style="border:none;"></th>
                                                             <td style="border:none;">                                                                   
                                                             </td>                                       
                                                        </tr>                                                                   
                                                                
                                                        <tr>
                                                             <td></td>
                                                             <td></td>
                                                             
                                                             <td colspan="5" style="text-align:right;">                                                                 
                                                                 <button type="submit" id="btnPedido" name="btnPedido" class="btn btn-large btn-primary pull-right">Crear Pedido</button>
                                                                 <div id="message-fields-obl">
                                                                    
                                                                 </div>
                                                                 <div id="boxProgress" style="display:none; width:250px; margin-top:10px; margin-right:25px; float: right;">
                                                                 <div class="progress progress-striped progress-info active" >
                                                                    <div class="bar" style="width:0%;"></div>
                                                                 </div>
                                                                 </div>
                                                             </td>                                       
                                                        </tr>                                                          
                                                                
							  </tbody>
						 </table>                                                                                                                                    
                                    </div>
                            </div><!--/span-->
                    </div><!--/row-->                    
                    
                    </form>
                </div>
        </div><!--/span-->

</div><!--/row-->

<!-- NEW ARTICLE MESSAGE MODAL -->
<div class="modal fade" id="newArticle-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title blue"><i class="fa fa-bars"></i> Nuevo Artículo</h3>
                <br />
                <p>Para agregar un nuevo articulo, complete la siguiente información</p>
            </div>
            <form method="post" id="frm-newArticle">
                <div class="modal-body" id="newArticle">

                    <table class="table table-condensed">
                      <tbody> 

                          <tr>
                              <th>Cod. Artículo</th>
                              <td>                                
                                <div class="pull-left control-group" id="input-new-codInterno" style="margin-right:3px;">
                                    <input type="text" class="input-block-level"  id="new-codInterno" name="new-codInterno" value="" placeholder="Codigo Interno">
                                </div>                                  
                              </td>
                          </tr>
                          <tr>
                              <th>Descripción</th>
                              <td>
                                  <div class="pull-left control-group" id="input-new-nameArticulo" style="margin-right:3px;">
                                    <input type="text" class="input-block-level" id="new-nameArticulo" name="new-nameArticulo" value="" placeholder="Descripción del Articulo">
                                  </div>
                              </td>
                          </tr>
                          <tr>
                              <th>Cod. Arti. Proveedor</th>
                              <td>
                                  <div class="pull-left control-group" id="input-new-codProveedor" style="margin-right:3px;">
                                      <input type="text" class="input-block-level" id="new-codProveedor" name="new-codProveedor" placeholder="Codx. Arti. Proveedor" value="N/A">
                                  </div>
                              </td>
                          </tr>

                      </tbody>
                    </table>                    

                </div>
                <div class="modal-footer clearfix">
                    <div id="message-newArticle">

                    </div>    
                    <button type="button" class="btn btn-success" id="add-new-article" name="add-new-article"><i class="fa fa-check-square-o"></i> Agregar Artículo</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- INVENTORY MESSAGE MODAL -->
<div class="modal fade" id="inventory-modal" tabindex="-1" role="dialog" aria-hidden="true" style="margin: -320px 0 0 -280px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <a class="btn pull-right" href="#" style="margin-right:15px;" title="Recargar Inventario" data-rel="tooltip" id="refreshInv"><i class="icon-refresh"></i></a>
                <h3 class="modal-title green"><i class="fa fa-bars"></i> Inventario de Artículos</h3>                
            </div>
            <form action="#" method="post" id="frmAllInventory">
                <div class="modal-body" id="allInventory" style="max-height: 490px;">
                    
                    <h5>Cargando Inventario</h5><div id='boxProgress2' style='width:100%; margin-top:10px;'><div class='progress progress-striped progress-info active' ><div class='bar' style='width:0%;'></div></div></div>
                    
                </div>
                <div class="modal-footer clearfix">
                    <button type="button" class="btn btn-inverse" id="accept-choosed" data-dismiss="modal"><i class="fa fa-check-square-o"></i> Aceptar</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- SOLICITUDES MESSAGE MODAL -->
<div class="modal fade" id="solicitudes-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><i class="fa fa-bars"></i> Solicitudes de Pedido</h4>                
            </div>
            <form action="#" method="post" id="frmListStudent">
                <div class="modal-body" id="totalStudentMatches">
                   
                </div>
                <div class="modal-footer clearfix">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Cancelar</button>
                    <button type="button" class="btn btn-primary pull-left" id="choose-student" data-dismiss="modal"><i class="fa fa-check-square-o"></i> Aceptar</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- SOLICITUDES MESSAGE MODAL -->
<div class="modal fade" id="message-NA" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title red"><i class="fa fa-bars"></i>Atención</h3>                
            </div>
            <form action="#" method="post" id="frmListStudent">
                <div class="modal-body" id="totalStudentMatches">
                   No se han realizado <b>Pedidos de Artículos para este Proveedor</b> últimamente
                </div>
                <div class="modal-footer clearfix">
                    <button type="button" class="btn btn-" id="choose-student" data-dismiss="modal"><i class="fa fa-check-square-o"></i> Aceptar</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


{literal}
<script type="text/javascript">
    $(document).ready(function(){    
        
        $("#btn-newArticulo").on("click", function (e){
            e.preventDefault();
            $("#message-newArticle").html("");
            $("#new-codInterno").val("");
            $("#new-nameArticulo").val("");
            $("#new-codProveedor").val("N/A");
            $("#input-new-codProveedor").removeClass("error");
            $("#input-new-nameArticulo").removeClass("error"); 
            $("#input-new-codInterno").removeClass("error");            
        });
       
        $("input[type=text]").on("click", function(e){
            this.select();
        });
        
        $('.datepicker').datepicker({
           language: "es",
           format:"dd/mm/yyyy",
           todayHighlight: true,
           autoclose: true
           //,           
           //startDate: new Date()
        });        
        
        $("#lblOtherCost").on("click", function(e){
            e.preventDefault();
            $(this).select();
        });

        

        $('#row1-costUnit').number( true, 2 );

        $('#row1-costTotal').number( true, 2 );
        $('#subTotal').number( true, 2 );
        $('#costEnvio').number( true, 2 );
        $('#otherCost').number( true, 2 );
        //$('#otherCost').number( true, 1, ',', ' ' );
        $('#totalPedido').number( true, 2 );
        
        var cache = {
            $selProveedor     : $("#selectProveedor"),
            $addNewRow        : $("#addNewRow"),
            $tblPedido        : $("#tblPedido"),
            $btnInventario    : $("#btn-getInventario"),
            $reloadInventario : $("#refreshInv"),
            $boxInventory     : $("#allInventory"),
            $infoProveedor    : {}
        };        
        
        $('input:radio[name=payMethod]').on("change", function(e){
            if($(this).val() == 3){
                $("#box-tajetas").css("display","block");
      /*          
                $("#selectTipTarjeta").rules('add', {
                    notEqual: function(){$("#input-TipTarjeta").removeClass("error"); return 0;},
                    messages: {
                        notEqual:  function(){                                   
                                           $("#input-TipTarjeta").addClass("error");
                                           $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");

                                        }
                    }
                });  
      */
                
            }else{
                $("#box-tajetas").css("display","none");
                $("#selectTipTarjeta").rules('remove');
            }
        });
        
        cache.$selProveedor.on("change", function(e){
            e.preventDefault();
            
            var idProveedor = cache.$selProveedor.val();
            
            if(idProveedor != 0){
                
                resetFrmPedido();
                //pageAnt = 1;
                $("#count-numRow").val(1);
                //Se muestra el formulario de pedido
                $("#box-frmPedido").slideDown();
                $("#own-arrow-frmBP").removeClass("icon-chevron-down");
                $("#own-arrow-frmBP").addClass("icon-chevron-up");            
                
                //Se habilitan las fechas de pedido y arribo
                $("#datePedido").prop('disabled', false);
                $("#dateArribo").prop('disabled', false);
                
                //Se habilitan los nuevos campos
                $("#selectDirEnvio").prop('disabled', false); 
                $("#selectDirDocs").prop('disabled', false);                
                $("#marks").prop('disabled', false);
                $("#packing").prop('disabled', false);
                $("#shipvia").prop('disabled', false);
                
                //Se habilitan las formas de pago
                $('input:radio[name=payMethod]').prop('disabled', false);
                $.each( arr, function( i, val ) {                            
                    $( "#uniform-payMethod" + val ).removeClass("disabled");   
                });                
                
                //Se habilita la forma de embarque
                $('input:radio[name=embarquesP]').prop('disabled', false);                
                $( "#uniform-embarquesP1").removeClass("disabled");   
                $( "#uniform-embarquesP2").removeClass("disabled"); 
                
                //Se habilita la moneda
                $("#selectMoneda").prop('disabled', false);
                $('#selectMoneda').prop('selectedIndex',2);
                
                $('#lblOtherCost').val("Other/Otros");
                $('#instructions').val("");
                $('#dateArribo').val("");
                
                var codInternos = {
                    url: "loadInfoProveedor.php",
                    async: true,
                    cache: false,
                    data: "idProveedor="+cache.$selProveedor.val(),
                    type: "POST",
                    dataType: "json",
                    success: function(dataProveedor){                        
                        //alert(dataProveedor);
                        if(dataProveedor["COSTO_OBL"] == "S"){
                            $("#content-message-obl").html("<div class='alert alert-warning pull-right' style='font-size:12px; height:30px; padding:0px; padding:0 5px;'><strong>IMPORTANTE: </strong> Para este Proveedor debe de indicar los costos.</div>");
                            $("#txt-costObl").val("S");
                            
                            $("#row1-costUnit").rules('add', {
                                required: function(){
                                    $("#row1-input-costUnit").removeClass("error"); return true;
                                },
                                number:true,
                                notEqual: 0,
                                messages: {
                                    required:  function(){
                                                       $("#row1-input-costUnit").addClass("error");
                                                       $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");
                                                    },
                                    number:  function(){
                                                       $("#row1-input-costUnit").addClass("error");
                                                       $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");
                                                    },
                                    notEqual:  function(){
                                                       $("#row1-input-costUnit").addClass("error");
                                                       $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");
                                                    }
                                }
                            });

                        }else{
                            $("#content-message-obl").html("");
                            $("#txt-costObl").val("N");                             
                        }
                        
                        if(dataProveedor["LIST_CODES"] != "0"){
                            //SE CARGAN LOS DATOS DE LOS ARTICULOS UNA VEZ QUE SE SE SELECCIONE EL PROVEEDOR: MAS EFICIENTE (Funciona con la Primera linea)//
                            $( "#row1-codInterno" ).autocomplete(
                                    {
                                            source:dataProveedor["LIST_CODES"][0],
                                            select: function( event, ui ) {                    
                                                    //$( "#codInterno" ).val( ui.item.label + " / " + ui.item.DesArticulo );
                                                    $( "#row1-codInterno" ).val( ui.item.label );                           
                                                    
                                                    var infoCodSel = {                                                        
                                                        url: "loadInfoByCod.php",
                                                        async: true,
                                                        cache: false,
                                                        data: "idProveedor="+cache.$selProveedor.val()+"&codArticulo="+ui.item.label,
                                                        type: "POST",
                                                        dataType: "json",
                                                        success: function(infoCod){
                                                            //alert(infoCod);
                                                            $( "#row1-codProveedor" ).val( infoCod[0].CodArtiPro );
                                                            $( "#row1-nameArticle" ).val( infoCod[0].DesArticulo );
                                                            $( "#row1-costUnit" ).val( infoCod[0].UltCosto );
                                                        }                                                           
                                                        
                                                    };
                                                    $.ajax(infoCodSel);
                                                    
                                                    return false;
                                            }
                                    }).data( "autocomplete" )._renderItem = function( ul, item ) {

                                                return $( "<li></li>" )
                                                        .data( "item.autocomplete", item )
                                                        //.append( "<a><strong>" + item.label + "</strong> / " + item.DesArticulo + "</a>" )
                                                        .append( "<a><strong>" + item.label + "</strong></a>" )
                                                        .appendTo( ul );


                                      };                                         

                            //SE CARGAN LOS DATOS DE LOS ARTICULOS UNA VEZ QUE SE SE SELECCIONE EL PROVEEDOR: MAS EFICIENTE (Funciona con la Primera linea)//
                            $( "#row1-nameArticle" ).autocomplete(
                                    {
                                            source:dataProveedor["LIST_CODES"][1],
                                            select: function( event, ui ) {                    
                                                    //$( "#codInterno" ).val( ui.item.label + " / " + ui.item.DesArticulo );
                                                    $( "#row1-nameArticle" ).val( ui.item.label );
                                                                                                        
                                                    var infoDesSel = {                                                        
                                                        url: "loadInfoByDes.php",
                                                        async: true,
                                                        cache: false,
                                                        data: "idProveedor="+cache.$selProveedor.val()+"&desArticle="+ui.item.label,
                                                        type: "POST",
                                                        dataType: "json",
                                                        success: function(infoDes){
                                                            
                                                            $( "#row1-codInterno" ).val( infoDes[0].CodArti );
                                                            $( "#row1-codProveedor" ).val( infoDes[0].CodArtiPro );
                                                            $( "#row1-costUnit" ).val( infoDes[0].UltCosto );
                                                            
                                                        }                                                           
                                                        
                                                    };
                                                    $.ajax(infoDesSel);                                                    
                                                    
                                                    
                                                    return false;
                                            }
                                    }).data( "autocomplete" )._renderItem = function( ul, item ) {
                                            return $( "<li></li>" )
                                                    .data( "item.autocomplete", item )
                                                    //.append( "<a><strong>" + item.label + "</strong> / " + item.DesArticulo + "</a>" )
                                                    .append( "<a><strong>" + item.label + "</strong></a>" )
                                                    .appendTo( ul );
                                      };                       

                            //SE CARGAN LOS DATOS DE LOS ARTICULOS UNA VEZ QUE SE SE SELECCIONE EL PROVEEDOR: MAS EFICIENTE (Funciona con la Primera linea)//
                            $( "#row1-codProveedor" ).autocomplete(
                                    {
                                            source:dataProveedor["LIST_CODES"][2],
                                            select: function( event, ui ) {                    
                                                    //$( "#codInterno" ).val( ui.item.label + " / " + ui.item.DesArticulo );
                                                    $( "#row1-codProveedor" ).val( ui.item.label );
                                                    
                                                    var infoProSel = {                                                        
                                                        url: "loadInfoByCodPro.php",
                                                        async: true,
                                                        cache: false,
                                                        data: "idProveedor="+cache.$selProveedor.val()+"&codProArticle="+ui.item.label,
                                                        type: "POST",
                                                        dataType: "json",
                                                        success: function(infoPro){
                                                            //alert(infoPro)
                                                            $( "#row1-codInterno" ).val( infoPro[0].CodArti );                                                            
                                                            $( "#row1-nameArticle" ).val( infoPro[0].DesArticulo );
                                                            $( "#row1-costUnit" ).val( infoPro[0].UltCosto );
                                                            
                                                        }                                                           
                                                        
                                                    };
                                                    $.ajax(infoProSel);                                                    
                                                    
                                                    
                                                    return false;
                                            }
                                    }).data( "autocomplete" )._renderItem = function( ul, item ) {
                                            return $( "<li></li>" )
                                                    .data( "item.autocomplete", item )
                                                    //.append( "<a><strong>" + item.label + "</strong> / " + item.DesArticulo + "</a>" )
                                                    .append( "<a><strong>" + item.label + "</strong></a>" )
                                                    .appendTo( ul );
                                      };                       
                        }else{                                                        
                            //alert("No Existen Articulos");
                            
                            $( "#btn-NA" ).trigger( "click" );
                            
                            //SE CARGAN LOS DATOS DE LOS ARTICULOS UNA VEZ QUE SE SE SELECCIONE EL PROVEEDOR: MAS EFICIENTE (Funciona con la Primera linea)//
                            $( "#row1-codInterno" ).autocomplete(
                                    {
                                            source:[{"label":"Sin Resultados"}],
                                            select: function( event, ui ) {                    
                                                    //$( "#codInterno" ).val( ui.item.label + " / " + ui.item.DesArticulo );
                                                    $( "#row1-codInterno" ).val( ui.item.label );                                                
                                                    return false;
                                            }
                                    }).data( "autocomplete" )._renderItem = function( ul, item ) {

                                                return $( "<li></li>" )
                                                        .data( "item.autocomplete", item )
                                                        //.append( "<a><strong>" + item.label + "</strong> / " + item.DesArticulo + "</a>" )
                                                        .append( "<a><strong>" + item.label + "</strong></a>" )
                                                        .appendTo( ul );


                                      };                                         

                            //SE CARGAN LOS DATOS DE LOS ARTICULOS UNA VEZ QUE SE SE SELECCIONE EL PROVEEDOR: MAS EFICIENTE (Funciona con la Primera linea)//
                            $( "#row1-nameArticle" ).autocomplete(
                                    {
                                            source:[{"label":"Sin Resultados"}],
                                            select: function( event, ui ) {                    
                                                    //$( "#codInterno" ).val( ui.item.label + " / " + ui.item.DesArticulo );
                                                    $( "#row1-nameArticle" ).val( ui.item.label );
                                                    return false;
                                            }
                                    }).data( "autocomplete" )._renderItem = function( ul, item ) {
                                            return $( "<li></li>" )
                                                    .data( "item.autocomplete", item )
                                                    //.append( "<a><strong>" + item.label + "</strong> / " + item.DesArticulo + "</a>" )
                                                    .append( "<a><strong>" + item.label + "</strong></a>" )
                                                    .appendTo( ul );
                                      };                              
                           
                        }                                                
                        
                        var optPago = parseInt(dataProveedor["OPT_PAGO"]);
                        
                        $.each( arr, function( i, val ) {                            
                            if(optPago === val){                                
                                $('#uniform-payMethod'+dataProveedor["OPT_PAGO"]).addClass("focus");
                                $('#uniform-payMethod'+dataProveedor["OPT_PAGO"]).find("span").addClass("checked");
                                
                                if(optPago == 3){
                                    $("#box-tajetas").css("display","block");
                                }else{
                                    $("#box-tajetas").css("display","none");
                                }
                                
                            }else{                                
                                $( "#uniform-payMethod" + val ).removeClass("focus");   
                                $( "#uniform-payMethod" + val ).find("span").removeClass("checked");   
                            }

                        });                        
                        
                        var $radios = $('input:radio[name=payMethod]');
        
                        $radios.filter('[value='+dataProveedor["OPT_PAGO"]+']').prop('checked', true);                        
        
                        
                    }
                };                   
                $.ajax(codInternos);                 
        
            }else{
                //Se oculta el formulario de pedido
                $("#box-frmPedido").slideUp();               
                $("#own-arrow-frmBP").removeClass("icon-chevron-up");
                $("#own-arrow-frmBP").addClass("icon-chevron-down");            
                
                //Se deshabilita las fechas de pedido y arribo
                $("#datePedido").prop('disabled', true);
                $("#dateArribo").prop('disabled', true);
                
                //Se habilitan los nuevos campos
                $("#selectDirEnvio").prop('disabled', true); 
                $("#selectDirDocs").prop('disabled', true);                
                $("#marks").prop('disabled', true);
                $("#packing").prop('disabled', true);
                $("#shipvia").prop('disabled', true);                
                
                $('#selectDirEnvio').prop('selectedIndex',0);                
                $('#selectDirDocs').prop('selectedIndex',0);                
                
                $("#box-tajetas").css("display","none");
                
                //Se deshabilita las formas de pago
                $('input:radio[name=payMethod]').prop('disabled', true);                
                $.each( arr, function( i, val ) {                            
                    $( "#uniform-payMethod" + val ).addClass("disabled");   
                    $( "#uniform-payMethod" + val ).find("span").removeClass("checked"); 
                });                
                
                //Se deshabilita la forma de embarque
                $('input:radio[name=embarquesP]').prop('disabled', true);                
                $( "#uniform-embarquesP1").addClass("disabled");   
                $( "#uniform-embarquesP2").addClass("disabled");                
                
                //Se deshabilita la moneda
                $('#selectMoneda').prop('selectedIndex',0);
                $("#selectMoneda").prop('disabled', true);
                
                $('#lblOtherCost').val("Other/Otros");
                $('#instructions').val("");
                $('#dateArribo').val("");                
                
            }
            
        });           
        
        //ESTE CODIGO TAMBIEN FUNCIONA: IMPLICA QUE VA A LA BASE DE DATOS POR CADA VEZ QUE SE INGRESE 1 DATO MENOS EFICIENTE//
        /*
        $( "#codInterno" ).autocomplete({
            source: function( request, response ) {
                $.ajax({
                    url: "loadCodInternos.php",
                    dataType: "json",
                    type: "POST",
                    data: {idProveedor: cache.$selProveedor.val() , codInterno: request.term},
                    success: function(listCodes) {
                        //alert(listCodes.dat1)                        
                        response( $.map( listCodes, function( item ) {
                            //alert(item);
                            console.log(item);
                            
                            return {
                                label: item.CodArti,
                                value: item.CodArti
                            }
                            
                        }));
                        
                    }
                });
            }
	});
        */
            
        cache.$addNewRow.on("click", function(e){
            e.preventDefault();

            var htmlTable = "";
            
            var pageAnt = parseInt($("#count-numRow").val());            
            var numRow = parseInt($("#count-numRow").val())+ 1;
            
            htmlTable += "<tr class=\"numRow"+numRow+"\" id=\"register"+numRow+"\">";
            htmlTable += "<td class='evalNumRegister' style=\"text-align:center;\"><div style='margin-top:4px;'><br>"+numRow+"</div></td>";
            htmlTable += "<td class='evalCant' style=\"text-align: center\"><div class='control-group' id='row"+numRow+"-input-cant'><br><input class=\"input-mini toCalc\" name=\"row"+numRow+"-cant\" id=\"row"+numRow+"-cant\" type=\"text\" value=\"0\" style=\"text-align:right; font-size:12px; width:26px;\" oninput=\"makeCal(this.id)\"></div></td>";
            htmlTable += "<td class='evalArti' style='width:45%'>";
            htmlTable += "<div class='pull-left control-group' id='row"+numRow+"-input-codProveedor' style='width:28%;' title='codProveedor'><span class=\"label label-info\">Cod.Arti.Prov</span><br><input type=\"text\" class=\"input-mini\" style=\"width:90%;\" id=\"row"+numRow+"-codProveedor\" name=\"row"+numRow+"-codProveedor\" value=\"\" placeholder=\"Cod.Arti.Prov\"></div>";            
            htmlTable += "<div class='pull-left control-group' id='row"+numRow+"-input-nameArticle' style='width:54%;' title='nameArticle'><span class=\"label label-info\">Descripción</span><br><input type=\"text\" class=\"input-mini\" style=\"width:95%;\" id=\"row"+numRow+"-nameArticle\"  name=\"row"+numRow+"-nameArticle\"  value=\"\" placeholder=\"Nombre Artículo\"></div>";
            htmlTable += "<div class='pull-left control-group' id='row"+numRow+"-input-codInterno'  title='codInterno'><span class=\"label label-info\">Cod.Interno</span><br><input type=\"text\" class=\"input-mini\"   id=\"row"+numRow+"-codInterno\"   name=\"row"+numRow+"-codInterno\"   value=\"\" placeholder=\"Cod.Interno\"></div>";                        
            htmlTable += "<!--<i class=\"icon icon-blue icon-info\"></i>-->";
            htmlTable += "</td>";
            htmlTable += "<td class='evalCostUnit'><div class='pull-left control-group' id='row"+numRow+"-input-costUnit' style='margin-right:3px;'><br><input class=\"input-mini toCalc\" id=\"row"+numRow+"-costUnit\"  name=\"row"+numRow+"-costUnit\"  type=\"text\"  style=\"text-align:right;\" oninput=\"makeCal(this.id)\"></div></td>";
			// no se asigna value por que imput-mini tiene problemas cuando se pone 0.00
            //            htmlTable += "<td class='evalCostUnit'><div class='pull-left control-group' id='row"+numRow+"-input-costUnit' style='margin-right:3px;'><br><input class=\"input-mini toCalc\" id=\"row"+numRow+"-costUnit\"  name=\"row"+numRow+"-costUnit\"  type=\"text\" value=\"0\" style=\"text-align:right;\" oninput=\"makeCal(this.id)\"></div></td>";
            htmlTable += "<td class='evalCostTotal'><br><input class=\"input-mini toCalc\" id=\"row"+numRow+"-costTotal\" name=\"row"+numRow+"-costTotal\" type=\"text\" value=\"0\" style=\"text-align:right;\"></td>";
            htmlTable += "<td class='evalInfoRef' style='width:30%'><br>";
        
            htmlTable += "<div class=\"pull-left\">";
            
            htmlTable += "          <select id=\"row"+numRow+"-typeRef\" name=\"row"+numRow+"-typeRef\" class=\"own-selected\" style=\"width:68px; padding:0; float: left; margin-top:2px; margin-right:2px;\">";
            htmlTable += "                <option>Tipo</option>";
            htmlTable += "                <option>COD</option>";
            htmlTable += "                <option>PRO</option>";
            htmlTable += "                <option>CLI</option>";
            htmlTable += "          </select>";
            
            htmlTable += "<input type=\"text\" id=\"row"+numRow+"-numRef\" name=\"row"+numRow+"-numRef\" placeholder=\"#referencia\" class=\"input-mini pull-left\" style=\"margin:0px 3px 3px 0px; float: left; width:30%;\">";
            htmlTable += "<input type=\"text\" id=\"row"+numRow+"-detRef\" name=\"row"+numRow+"-detRef\" placeholder=\"detalle\" class=\"input-mini pull-left\" style=\"margin:0px 3px 3px 0px; float: left; width:29%;\">";            
            
            htmlTable += "</div>";

        
            htmlTable += "</td>";
            htmlTable += "<td class='evalBtnDel'><br><a onclick='delRegister("+numRow+")' style='cursor: pointer;'><span class='icon icon-color icon-remove'></span></a></td>";
            htmlTable += "</tr>";                                          
            //cache.$tblPedido.find("tr.numRow"+pageAnt).after(htmlTable);        
            if(pageAnt == 0){
                cache.$tblPedido.find("tr.none").after(htmlTable);        
            }else{
                cache.$tblPedido.find("tr.numRow"+pageAnt).after(htmlTable);        
            }

            var strCompromisos = "";
            var listCompromisos = {                                                        
                url: "loadListCompromisos.php",
                async: true,
                cache: false,
                type: "POST",
                dataType: "json",
                success: function(infoComp){
                    
                    var total = Object.keys(infoComp).length

                    strCompromisos += "<option value='0'>Tipo</option>";
                    for(var x=0; x < total; x++){ 
                        if(infoComp[x].descripcion == "STOCK"){
                            strCompromisos += "<option value='"+infoComp[x].id+"' selected>"+infoComp[x].descripcion+"</option>";
                        }else{
                            strCompromisos += "<option value='"+infoComp[x].id+"'>"+infoComp[x].descripcion+"</option>";
                        }
                        
                    }
                    
                    $("#row"+numRow+"-typeRef").html(strCompromisos);                    
                    //alert(strCompromisos);
                }                                                           

            };
            $.ajax(listCompromisos);  


            $('#row'+numRow+'-costUnit').number( true, 2 );
            $('#row'+numRow+'-costTotal').number( true, 2 );  
                    
            var infoProveedor = {
                url: "loadInfoProveedor.php",
                async: true,
                cache: false,
                data: "idProveedor="+cache.$selProveedor.val(),
                type: "POST",
                dataType: "json",
                success: function(dataProveedor){                        

                    if(dataProveedor["LIST_CODES"] != "0"){
                        //SE CARGAN LOS DATOS DE LOS ARTICULOS UNA VEZ QUE SE SE SELECCIONE EL PROVEEDOR: MAS EFICIENTE (Funciona con la Primera linea)//
                        $( "#row"+numRow+"-codInterno" ).autocomplete(
                                {
                                        source:dataProveedor["LIST_CODES"][0],
                                        select: function( event, ui ) {                    
                                                //$( "#codInterno" ).val( ui.item.label + " / " + ui.item.DesArticulo );
                                                //$( "#row"+numRow+"-codInterno" ).val( ui.item.label );
                                                //alert($(this).attr("id"));
                                                var choosedRow = $(this).attr("id").split('-');                                                
                                                $( "#"+choosedRow[0]+"-codInterno" ).val( ui.item.label );
                                                
                                                    var infoCodSel = {                                                        
                                                        url: "loadInfoByCod.php",
                                                        async: true,
                                                        cache: false,
                                                        data: "idProveedor="+cache.$selProveedor.val()+"&codArticulo="+ui.item.label,
                                                        type: "POST",
                                                        dataType: "json",
                                                        success: function(infoCod){
                                                            $( "#"+choosedRow[0]+"-codProveedor" ).val( infoCod[0].CodArtiPro );
                                                            $( "#"+choosedRow[0]+"-nameArticle" ).val( infoCod[0].DesArticulo );
                                                            $( "#"+choosedRow[0]+"-costUnit" ).val( infoCod[0].UltCosto );
                                                        }                                                           
                                                        
                                                    };
                                                    $.ajax(infoCodSel);                                                
                                                
                                                
                                                return false;
                                        }
                                }).data( "autocomplete" )._renderItem = function( ul, item ) {

                                            return $( "<li></li>" )
                                                    .data( "item.autocomplete", item )
                                                    //.append( "<a><strong>" + item.label + "</strong> / " + item.DesArticulo + "</a>" )
                                                    .append( "<a><strong>" + item.label + "</strong></a>" )
                                                    .appendTo( ul );


                                  };                                         

                        //SE CARGAN LOS DATOS DE LOS ARTICULOS UNA VEZ QUE SE SE SELECCIONE EL PROVEEDOR: MAS EFICIENTE (Funciona con la Primera linea)//
                        $( "#row"+numRow+"-nameArticle" ).autocomplete(
                                {
                                        source:dataProveedor["LIST_CODES"][1],
                                        select: function( event, ui ) {                    
                                                //$( "#codInterno" ).val( ui.item.label + " / " + ui.item.DesArticulo );                                                
                                                var choosedRow = $(this).attr("id").split('-');                                                
                                                $( "#"+choosedRow[0]+"-nameArticle" ).val( ui.item.label );                                                
                                                
                                                    var infoDesSel = {                                                        
                                                        url: "loadInfoByDes.php",
                                                        async: true,
                                                        cache: false,
                                                        data: "idProveedor="+cache.$selProveedor.val()+"&desArticle="+ui.item.label,
                                                        type: "POST",
                                                        dataType: "json",
                                                        success: function(infoDes){
                                                            
                                                            $( "#"+choosedRow[0]+"-codInterno" ).val( infoDes[0].CodArti );
                                                            $( "#"+choosedRow[0]+"-codProveedor" ).val( infoDes[0].CodArtiPro );
                                                            $( "#"+choosedRow[0]+"-costUnit" ).val( infoDes[0].UltCosto );
                                                            
                                                        }                                                           
                                                        
                                                    };
                                                    $.ajax(infoDesSel);                                                 
                                                
                                                return false;
                                        }
                                }).data( "autocomplete" )._renderItem = function( ul, item ) {
                                        return $( "<li></li>" )
                                                .data( "item.autocomplete", item )
                                                //.append( "<a><strong>" + item.label + "</strong> / " + item.DesArticulo + "</a>" )
                                                .append( "<a><strong>" + item.label + "</strong></a>" )
                                                .appendTo( ul );
                                  };
                                  

                            $( "#row"+numRow+"-codProveedor" ).autocomplete(
                                    {
                                            source:dataProveedor["LIST_CODES"][2],
                                            select: function( event, ui ) {                    
                                                    //$( "#codInterno" ).val( ui.item.label + " / " + ui.item.DesArticulo );                                                    
                                                    var choosedRow = $(this).attr("id").split('-');                                                
                                                    $( "#"+choosedRow[0]+"-codProveedor" ).val( ui.item.label );     
                                                
                                                    var infoProSel = {                                                        
                                                        url: "loadInfoByCodPro.php",
                                                        async: true,
                                                        cache: false,
                                                        data: "idProveedor="+cache.$selProveedor.val()+"&codProArticle="+ui.item.label,
                                                        type: "POST",
                                                        dataType: "json",
                                                        success: function(infoPro){
                                                            //alert(infoPro)                                                            
                                                            $( "#"+choosedRow[0]+"-codInterno" ).val( infoPro[0].CodArti );
                                                            $( "#"+choosedRow[0]+"-nameArticle" ).val( infoPro[0].DesArticulo );
                                                            $( "#"+choosedRow[0]+"-costUnit" ).val( infoPro[0].UltCosto );
                                                            
                                                        }                                                           
                                                        
                                                    };
                                                    $.ajax(infoProSel);                                                    
                                                    
                                                    
                                                    return false;
                                            }
                                    }).data( "autocomplete" )._renderItem = function( ul, item ) {
                                            return $( "<li></li>" )
                                                    .data( "item.autocomplete", item )
                                                    //.append( "<a><strong>" + item.label + "</strong> / " + item.DesArticulo + "</a>" )
                                                    .append( "<a><strong>" + item.label + "</strong></a>" )
                                                    .appendTo( ul );
                                      };    
            
                                  
                    }else{
                     
                        //SE CARGAN LOS DATOS DE LOS ARTICULOS UNA VEZ QUE SE SE SELECCIONE EL PROVEEDOR: MAS EFICIENTE (Funciona con la Primera linea)//
                        $( "#row"+numRow+"-codInterno" ).autocomplete(
                                {
                                        source:[{"label":"Sin Resultados"}],
                                        select: function( event, ui ) {                    
                                                //$( "#codInterno" ).val( ui.item.label + " / " + ui.item.DesArticulo );
                                                $( "#row"+numRow+"-codInterno" ).val( ui.item.label );                                                
                                                return false;
                                        }
                                }).data( "autocomplete" )._renderItem = function( ul, item ) {

                                            return $( "<li></li>" )
                                                    .data( "item.autocomplete", item )
                                                    //.append( "<a><strong>" + item.label + "</strong> / " + item.DesArticulo + "</a>" )
                                                    .append( "<a><strong>" + item.label + "</strong></a>" )
                                                    .appendTo( ul );


                                  };                                         

                        //SE CARGAN LOS DATOS DE LOS ARTICULOS UNA VEZ QUE SE SE SELECCIONE EL PROVEEDOR: MAS EFICIENTE (Funciona con la Primera linea)//
                        $( "#row"+numRow+"-nameArticle" ).autocomplete(
                                {
                                        source:[{"label":"Sin Resultados"}],
                                        select: function( event, ui ) {                    
                                                //$( "#codInterno" ).val( ui.item.label + " / " + ui.item.DesArticulo );
                                                $( "#row"+numRow+"-nameArticle" ).val( ui.item.label );
                                                return false;
                                        }
                                }).data( "autocomplete" )._renderItem = function( ul, item ) {
                                        return $( "<li></li>" )
                                                .data( "item.autocomplete", item )
                                                //.append( "<a><strong>" + item.label + "</strong> / " + item.DesArticulo + "</a>" )
                                                .append( "<a><strong>" + item.label + "</strong></a>" )
                                                .appendTo( ul );
                                  };                              

                    }                        

                }
            };                   
            $.ajax(infoProveedor);

            $("input[type=text]").on("click", function(e){
                this.select();
            });
                        
            //pageAnt = numRow;
            $("#count-numRow").val(numRow);
             
             var statusCostObl = $("#txt-costObl").val();
             $("[id*='register']").each(function() {

               var rwIDName = $(this).find('td.evalCant').find("div").attr("id");
               var inputIDName = $(this).find('td.evalCant').find("div").find("input").attr("id");
               
                $("#"+inputIDName).rules('add', {
                    required: function(){
                        $("#"+rwIDName).removeClass("error"); return true;
                    },
                    min:1,
                    messages: {
                        required:  function(){
                                           $("#"+rwIDName).addClass("error");
                                           $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");                                           
                                        },
                        min:  function(){
                                           $("#"+rwIDName).addClass("error");
                                           $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");
                                        }
                    }
                });

               var rwIDName2 = $(this).find('td.evalArti').find("div[title=codInterno]").attr("id");
               var inputIDName2 = $(this).find('td.evalArti').find("div[title=codInterno]").find("input").attr("id");
                              
                $("#"+inputIDName2).rules('add', {
                    required: function(){
                        $("#"+rwIDName2).removeClass("error"); return true;
                    },
                    min:1,
                    messages: {
                        required:  function(){
                                           $("#"+rwIDName2).addClass("error");
                                           $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");                                           
                                        },
                        min:  function(){
                                           $("#"+rwIDName2).addClass("error");
                                           $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");
                                        }
                    }
                });

               var rwIDName3 = $(this).find('td.evalArti').find("div[title=codProveedor]").attr("id");
               var inputIDName3 = $(this).find('td.evalArti').find("div[title=codProveedor]").find("input").attr("id");
                              
                $("#"+inputIDName3).rules('add', {
                    required: function(){
                        $("#"+rwIDName3).removeClass("error"); return true;
                    },
                    messages: {
                        required:  function(){
                                           $("#"+rwIDName3).addClass("error");
                                           $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");                                           
                                        }
                    }
                });

               var rwIDName4 = $(this).find('td.evalArti').find("div[title=nameArticle]").attr("id");
               var inputIDName4 = $(this).find('td.evalArti').find("div[title=nameArticle]").find("input").attr("id");
                              
                $("#"+inputIDName4).rules('add', {
                    required: function(){
                        $("#"+rwIDName4).removeClass("error"); return true;
                    },
                    messages: {
                        required:  function(){
                                           $("#"+rwIDName4).addClass("error");
                                           $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");                                           
                                        }
                    }
                });
                                                  
                if(statusCostObl == "S"){
                    
                    var rwIDName5 = $(this).find('td.evalCostUnit').find("div").attr("id");
                    var inputIDName5 = $(this).find('td.evalCostUnit').find("div").find("input").attr("id");

                     $("#"+inputIDName5).rules('add', {
                         required: function(){
                             $("#"+rwIDName5).removeClass("error"); return true;
                         },
                         number:true,
                         notEqual: 0,
                         messages: {
                             required:  function(){
                                                $("#"+rwIDName5).addClass("error");
                                                $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");                                           
                                             },
                             number:  function(){
                                                $("#"+rwIDName5).addClass("error");
                                                $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");
                                             },
                             notEqual:  function(){
                                                       $("#"+rwIDName5).addClass("error");
                                                       $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");
                                                    }
                         }
                     });                   
                }else{
                    var inputIDName5 = $(this).find('td.evalCostUnit').find("div").find("input").attr("id");
                    $("#"+inputIDName5).rules('remove');
                }

            });            
            
        });
        
        $("input.finalCost").on("input", function (e){
            var inputId = $(this).attr("id");
            var datInput = $("#"+inputId).val();
            
            if(datInput != ""){
                
                var datInput = parseInt($("#"+inputId).val());
                if(!isNaN(datInput)){
                
                var sumFinalCost = 0;
                $( "input.finalCost" ).each( function( i, el ) {

                    sumFinalCost += parseFloat($("#"+$(el).attr("id")).val());

                });
                
                //Se añade la suma de los costos al Total
                var sumOtherCosts = parseFloat($("#subTotal").val()) + sumFinalCost;                
                $("#totalPedido").val(sumOtherCosts);
                    
                }else{
                    $("#"+inputId).val(0);
                    $("#"+inputId).select();                    
                }
            }else{                
                $("#"+inputId).val(0);
                $("#"+inputId).select();                
                var sumAllCosts = parseFloat($("#subTotal").val()) + parseFloat($("#costEnvio").val()) + parseFloat($("#otherCost").val());
                $("#totalPedido").val(sumAllCosts);
            }
            
        });
        
        //*********FUNCIONES DE LA VENTANA DE INVENTARIO************////       
        
        //BOTON QUE CARGA EL INVENTARIO DE ARTICULOS
        cache.$btnInventario.on("click", function(e){
            
            //cache.$boxInventory.html("<h5>Cargando Inventario</h5><div id='boxProgress2' style='width:100%; margin-top:10px;'><div class='progress progress-striped progress-info active' ><div class='bar' style='width:0%;'></div></div></div>");
            
            var openStatus = $("#invOpen").val();
            
            if(openStatus == 1){
                $("#inventory-modal").toggle();
            }else{
            
                var progress = setInterval(function() {
                    var $bar = $('.bar');

                    if ($bar.width()>=450) {
                        clearInterval(progress);
                        $('.progress').removeClass('active');

                        var idProveedor = cache.$selProveedor.val();
                        if(idProveedor != 0){
                            var properties = {
                                url: "ajaxLoad.php",
                                async: true,
                                cache: false,
                                data: "idProveedor="+idProveedor+"&action=1",
                                type: "POST",
                                //dataType: "json",
                                success: function(inventario){

                                    cache.$boxInventory.html(inventario);

                                }
                            };            
                            $.ajax(properties);                
                        }else{
                            cache.$boxInventory.html("Debe seleccionar al menos 1 proveedor");
                        }            
                    } else {
                        $bar.width($bar.width()+150);
                    }
                    $bar.text($bar.width()/5 + "%");

                }, 2300);
            
                $("#invOpen").val("1");
            }
            
        });
        
        cache.$reloadInventario.on("click", function(e){
            
                cache.$boxInventory.html("<h5>Cargando Inventario</h5><div id='boxProgress2' style='width:100%; margin-top:10px;'><div class='progress progress-striped progress-info active' ><div class='bar2' style='width:0%;'></div></div></div>");
                
                var progress = setInterval(function() {
                    var $bar = $('.bar2');

                    if ($bar.width()>=450) {
                        clearInterval(progress);
                        $('.progress').removeClass('active');

                        var idProveedor = cache.$selProveedor.val();
                        if(idProveedor != 0){
                            var properties = {
                                url: "ajaxLoad.php",
                                async: true,
                                cache: false,
                                data: "idProveedor="+idProveedor+"&action=1",
                                type: "POST",
                                //dataType: "json",
                                success: function(inventario){

                                    cache.$boxInventory.html(inventario);

                                }
                            };            
                            $.ajax(properties);                
                        }else{
                            cache.$boxInventory.html("Debe seleccionar al menos 1 proveedor");
                        }            
                    } else {                        
                        $bar.width($bar.width()+150);
                    }
                    
                    if(($bar.width()/5) != 0){
                        if( (($bar.width()/5)+30) == 120 ){
                            $bar.text(90 + "%");
                        }else{
                            $bar.text(($bar.width()/5)+30 + "%");
                        }                        
                    }else{
                        $bar.text(30 + "%");
                    }
                    

                }, 2300);
            
                $("#invOpen").val("1");
            
        });
        
        //*****************************************************//
        // * SE MUEVE LA FUNCION A LA PLANTILLA INVENTORY.TPL *
        //*****************************************************//
        /*
        //BOTON QUE AGREGA UN ARTICULO
        var inv_btnAdd = $("[id*='inv-rowArt']").find("td").find("a");
        $(inv_btnAdd).on("click", function(e){
            e.preventDefault(); 
            
            var htmlTable = "";
                        
            var dataArticulo = $(this).attr("data").split('|');                                                
            
            var pageAnt = parseInt($("#count-numRow").val());            
            var numRow = parseInt($("#count-numRow").val())+ 1;
            
            htmlTable += "<tr class=\"numRow"+numRow+"\" id=\"register"+numRow+"\">";
            htmlTable += "<td class='evalNumRegister' style=\"text-align:center;\"><div style='margin-top:4px;'><br>"+numRow+"</div></td>";
            htmlTable += "<td class='evalCant' style=\"text-align: center\"><div class='control-group' id='row"+numRow+"-input-cant'><br><input class=\"input-mini toCalc\" name=\"row"+numRow+"-cant\" id=\"row"+numRow+"-cant\" type=\"text\" value=\"0\" style=\"text-align:right; width:28px;\"  oninput=\"makeCal(this.id)\"></div></td>";
            htmlTable += "<td class='evalArti'>";
            htmlTable += "<div class='pull-left control-group' id='row"+numRow+"-input-codProveedor' style='margin-right:3px;' title='codProveedor'><span class=\"label label-info\">Cod.Arti.Prov</span><br><input type=\"text\" class=\"input-mini\" style=\"width:71px;\" id=\"row"+numRow+"-codProveedor\" name=\"row"+numRow+"-codProveedor\" value=\""+dataArticulo[2]+"\" placeholder=\"Cod.Arti.Prov\"></div>";            
            htmlTable += "<div class='pull-left control-group' id='row"+numRow+"-input-nameArticle' style='margin-right:3px;' title='nameArticle'><span class=\"label label-info\">Descripción</span><br><input type=\"text\" class=\"input-mini\" style=\"width:78px;\" id=\"row"+numRow+"-nameArticle\"  name=\"row"+numRow+"-nameArticle\"  value=\""+dataArticulo[1]+"\" placeholder=\"Nombre Artículo\"></div>";
            htmlTable += "<div class='pull-left control-group' id='row"+numRow+"-input-codInterno' style='margin-right:3px;' title='codInterno'><span class=\"label label-info\">Cod.Interno</span><br><input type=\"text\" class=\"input-mini\"  style=\"width:65px;\" id=\"row"+numRow+"-codInterno\"   name=\"row"+numRow+"-codInterno\"   value=\""+dataArticulo[0]+"\" placeholder=\"Cod.Interno\"></div>";                        
            htmlTable += "<!--<i class=\"icon icon-blue icon-info\"></i>-->";
            htmlTable += "</td>";
            htmlTable += "<td class='evalCostUnit'><div class='pull-left control-group' id='row"+numRow+"-input-costUnit' style='margin-right:3px;'><br><input class=\"input-mini toCalc\" id=\"row"+numRow+"-costUnit\"  name=\"row"+numRow+"-costUnit\"  type=\"text\" value=\"0\" style=\"text-align:right;\" oninput=\"makeCal(this.id)\"></div></td>";
            htmlTable += "<td class='evalCostTotal'><br><input class=\"input-mini toCalc\" id=\"row"+numRow+"-costTotal\" name=\"row"+numRow+"-costTotal\" type=\"text\" value=\"0\" style=\"text-align:right;\"></td>";
            htmlTable += "<td class='evalInfoRef'><br>";
        
            htmlTable += "<div class=\"pull-left\">";

            htmlTable += "          <select id=\"row"+numRow+"-typeRef\" name=\"row"+numRow+"-typeRef\" class=\"own-selected\" style=\"width:48px; padding:0; float: left; margin-top:2px; margin-right:2px;\">";
            htmlTable += "                <option>Tipo</option>";
            htmlTable += "                <option>COD</option>";
            htmlTable += "                <option>PRO</option>";
            htmlTable += "                <option>CLI</option>";
            htmlTable += "          </select>";

            htmlTable += "<input type=\"text\" id=\"row"+numRow+"-numRef\" name=\"row"+numRow+"-numRef\" placeholder=\"#referencia\" class=\"input-mini pull-left\" style=\"margin:0px 3px 3px 0px; float: left; width:47px;\">";
            htmlTable += "<input type=\"text\" id=\"row"+numRow+"-detRef\" name=\"row"+numRow+"-detRef\" placeholder=\"detalle\" class=\"input-mini pull-left\" style=\"margin:0px 3px 3px 0px; float: left;\">";

            htmlTable += "</div>";

        
            htmlTable += "</td>";
            htmlTable += "<td class='evalBtnDel'><br><a onclick='delRegister("+numRow+")' style='cursor: pointer;'><span class='icon icon-color icon-remove'></span></a></td>";
            htmlTable += "</tr>";                              
            
            if(pageAnt == 0){
                cache.$tblPedido.find("tr.none").after(htmlTable);
            }else{
                cache.$tblPedido.find("tr.numRow"+pageAnt).after(htmlTable);
            }            
            
            $('#row'+numRow+'-costUnit').number( true, 2 );
            $('#row'+numRow+'-costTotal').number( true, 2 );            
            
            var infoProveedor = {
                url: "loadInfoProveedor.php",
                async: true,
                cache: false,
                data: "idProveedor="+cache.$selProveedor.val(),
                type: "POST",
                dataType: "json",
                success: function(dataProveedor){                        

                    if(dataProveedor["LIST_CODES"] != "0"){
                        //SE CARGAN LOS DATOS DE LOS ARTICULOS UNA VEZ QUE SE SE SELECCIONE EL PROVEEDOR: MAS EFICIENTE (Funciona con la Primera linea)//
                        $( "#row"+numRow+"-codInterno" ).autocomplete(
                                {
                                        source:dataProveedor["LIST_CODES"][0],
                                        select: function( event, ui ) {                    
                                                //$( "#codInterno" ).val( ui.item.label + " / " + ui.item.DesArticulo );
                                                //$( "#row"+numRow+"-codInterno" ).val( ui.item.label );
                                                //alert($(this).attr("id"));
                                                var choosedRow = $(this).attr("id").split('-');                                                
                                                $( "#"+choosedRow[0]+"-codInterno" ).val( ui.item.label );
                                                
                                                    var infoCodSel = {                                                        
                                                        url: "loadInfoByCod.php",
                                                        async: true,
                                                        cache: false,
                                                        data: "idProveedor="+cache.$selProveedor.val()+"&codArticulo="+ui.item.label,
                                                        type: "POST",
                                                        dataType: "json",
                                                        success: function(infoCod){
                                                            $( "#"+choosedRow[0]+"-codProveedor" ).val( infoCod[0].CodArtiPro );
                                                            $( "#"+choosedRow[0]+"-nameArticle" ).val( infoCod[0].DesArticulo );
                                                        }                                                           
                                                        
                                                    };
                                                    $.ajax(infoCodSel);                                                
                                                
                                                
                                                return false;
                                        }
                                }).data( "autocomplete" )._renderItem = function( ul, item ) {

                                            return $( "<li></li>" )
                                                    .data( "item.autocomplete", item )
                                                    //.append( "<a><strong>" + item.label + "</strong> / " + item.DesArticulo + "</a>" )
                                                    .append( "<a><strong>" + item.label + "</strong></a>" )
                                                    .appendTo( ul );


                                  };                                         

                        //SE CARGAN LOS DATOS DE LOS ARTICULOS UNA VEZ QUE SE SE SELECCIONE EL PROVEEDOR: MAS EFICIENTE (Funciona con la Primera linea)//
                        $( "#row"+numRow+"-nameArticle" ).autocomplete(
                                {
                                        source:dataProveedor["LIST_CODES"][1],
                                        select: function( event, ui ) {                    
                                                //$( "#codInterno" ).val( ui.item.label + " / " + ui.item.DesArticulo );                                                
                                                var choosedRow = $(this).attr("id").split('-');                                                
                                                $( "#"+choosedRow[0]+"-nameArticle" ).val( ui.item.label );                                                
                                                
                                                    var infoDesSel = {                                                        
                                                        url: "loadInfoByDes.php",
                                                        async: true,
                                                        cache: false,
                                                        data: "idProveedor="+cache.$selProveedor.val()+"&desArticle="+ui.item.label,
                                                        type: "POST",
                                                        dataType: "json",
                                                        success: function(infoDes){
                                                            
                                                            $( "#"+choosedRow[0]+"-codInterno" ).val( infoDes[0].CodArti );
                                                            $( "#"+choosedRow[0]+"-codProveedor" ).val( infoDes[0].CodArtiPro );
                                                            
                                                        }                                                           
                                                        
                                                    };
                                                    $.ajax(infoDesSel);                                                 
                                                
                                                return false;
                                        }
                                }).data( "autocomplete" )._renderItem = function( ul, item ) {
                                        return $( "<li></li>" )
                                                .data( "item.autocomplete", item )
                                                //.append( "<a><strong>" + item.label + "</strong> / " + item.DesArticulo + "</a>" )
                                                .append( "<a><strong>" + item.label + "</strong></a>" )
                                                .appendTo( ul );
                                  };
                                  

                            $( "#row"+numRow+"-codProveedor" ).autocomplete(
                                    {
                                            source:dataProveedor["LIST_CODES"][2],
                                            select: function( event, ui ) {                    
                                                    //$( "#codInterno" ).val( ui.item.label + " / " + ui.item.DesArticulo );                                                    
                                                    var choosedRow = $(this).attr("id").split('-');                                                
                                                    $( "#"+choosedRow[0]+"-codProveedor" ).val( ui.item.label );     
                                                
                                                    var infoProSel = {                                                        
                                                        url: "loadInfoByCodPro.php",
                                                        async: true,
                                                        cache: false,
                                                        data: "idProveedor="+cache.$selProveedor.val()+"&codProArticle="+ui.item.label,
                                                        type: "POST",
                                                        dataType: "json",
                                                        success: function(infoPro){
                                                            //alert(infoPro)                                                            
                                                            $( "#"+choosedRow[0]+"-codInterno" ).val( infoPro[0].CodArti );
                                                            $( "#"+choosedRow[0]+"-nameArticle" ).val( infoPro[0].DesArticulo );
                                                            
                                                        }                                                           
                                                        
                                                    };
                                                    $.ajax(infoProSel);                                                    
                                                    
                                                    
                                                    return false;
                                            }
                                    }).data( "autocomplete" )._renderItem = function( ul, item ) {
                                            return $( "<li></li>" )
                                                    .data( "item.autocomplete", item )
                                                    //.append( "<a><strong>" + item.label + "</strong> / " + item.DesArticulo + "</a>" )
                                                    .append( "<a><strong>" + item.label + "</strong></a>" )
                                                    .appendTo( ul );
                                      };    
            
                                  
                    }else{
                     
                        //SE CARGAN LOS DATOS DE LOS ARTICULOS UNA VEZ QUE SE SE SELECCIONE EL PROVEEDOR: MAS EFICIENTE (Funciona con la Primera linea)//
                        $( "#row"+numRow+"-codInterno" ).autocomplete(
                                {
                                        source:[{"label":"Sin Resultados"}],
                                        select: function( event, ui ) {                    
                                                //$( "#codInterno" ).val( ui.item.label + " / " + ui.item.DesArticulo );
                                                $( "#row"+numRow+"-codInterno" ).val( ui.item.label );                                                
                                                return false;
                                        }
                                }).data( "autocomplete" )._renderItem = function( ul, item ) {

                                            return $( "<li></li>" )
                                                    .data( "item.autocomplete", item )
                                                    //.append( "<a><strong>" + item.label + "</strong> / " + item.DesArticulo + "</a>" )
                                                    .append( "<a><strong>" + item.label + "</strong></a>" )
                                                    .appendTo( ul );


                                  };                                         

                        //SE CARGAN LOS DATOS DE LOS ARTICULOS UNA VEZ QUE SE SE SELECCIONE EL PROVEEDOR: MAS EFICIENTE (Funciona con la Primera linea)//
                        $( "#row"+numRow+"-nameArticle" ).autocomplete(
                                {
                                        source:[{"label":"Sin Resultados"}],
                                        select: function( event, ui ) {                    
                                                //$( "#codInterno" ).val( ui.item.label + " / " + ui.item.DesArticulo );
                                                $( "#row"+numRow+"-nameArticle" ).val( ui.item.label );
                                                return false;
                                        }
                                }).data( "autocomplete" )._renderItem = function( ul, item ) {
                                        return $( "<li></li>" )
                                                .data( "item.autocomplete", item )
                                                //.append( "<a><strong>" + item.label + "</strong> / " + item.DesArticulo + "</a>" )
                                                .append( "<a><strong>" + item.label + "</strong></a>" )
                                                .appendTo( ul );
                                  };                              

                    }                        

                }
            };                   
            $.ajax(infoProveedor);            
            
            $("#count-numRow").val(numRow); 
            
            $("input[type=text]").on("click", function(e){
                this.select();
            });            
            
             var statusCostObl = $("#txt-costObl").val();
             $("[id*='register']").each(function() {

               var rwIDName = $(this).find('td.evalCant').find("div").attr("id");
               var inputIDName = $(this).find('td.evalCant').find("div").find("input").attr("id");
               
                $("#"+inputIDName).rules('add', {
                    required: function(){
                        $("#"+rwIDName).removeClass("error"); return true;
                    },
                    min:1,
                    messages: {
                        required:  function(){
                                           $("#"+rwIDName).addClass("error");
                                           $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");                                           
                                        },
                        min:  function(){
                                           $("#"+rwIDName).addClass("error");
                                           $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");
                                        }
                    }
                });

               var rwIDName2 = $(this).find('td.evalArti').find("div[title=codInterno]").attr("id");
               var inputIDName2 = $(this).find('td.evalArti').find("div[title=codInterno]").find("input").attr("id");
                              
                $("#"+inputIDName2).rules('add', {
                    required: function(){
                        $("#"+rwIDName2).removeClass("error"); return true;
                    },
                    min:1,
                    messages: {
                        required:  function(){
                                           $("#"+rwIDName2).addClass("error");
                                           $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");                                           
                                        },
                        min:  function(){
                                           $("#"+rwIDName2).addClass("error");
                                           $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");
                                        }
                    }
                });

               var rwIDName3 = $(this).find('td.evalArti').find("div[title=codProveedor]").attr("id");
               var inputIDName3 = $(this).find('td.evalArti').find("div[title=codProveedor]").find("input").attr("id");
                              
                $("#"+inputIDName3).rules('add', {
                    required: function(){
                        $("#"+rwIDName3).removeClass("error"); return true;
                    },
                    min:1,
                    messages: {
                        required:  function(){
                                           $("#"+rwIDName3).addClass("error");
                                           $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");                                           
                                        },
                        min:  function(){
                                           $("#"+rwIDName3).addClass("error");
                                           $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");
                                        }
                    }
                });

               var rwIDName4 = $(this).find('td.evalArti').find("div[title=nameArticle]").attr("id");
               var inputIDName4 = $(this).find('td.evalArti').find("div[title=nameArticle]").find("input").attr("id");
                              
                $("#"+inputIDName4).rules('add', {
                    required: function(){
                        $("#"+rwIDName4).removeClass("error"); return true;
                    },
                    messages: {
                        required:  function(){
                                           $("#"+rwIDName4).addClass("error");
                                           $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");                                           
                                        }
                    }
                });
                
                
                if(statusCostObl == "S"){
                    
                    var rwIDName5 = $(this).find('td.evalCostUnit').find("div").attr("id");
                    var inputIDName5 = $(this).find('td.evalCostUnit').find("div").find("input").attr("id");

                     $("#"+inputIDName5).rules('add', {
                         required: function(){
                             $("#"+rwIDName5).removeClass("error"); return true;
                         },
                         number:true,
                         notEqual: 0,
                         messages: {
                             required:  function(){
                                                $("#"+rwIDName5).addClass("error");
                                                $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");                                           
                                             },
                             number:  function(){
                                                $("#"+rwIDName5).addClass("error");
                                                $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");
                                             },
                             notEqual:  function(){
                                                       $("#"+rwIDName5).addClass("error");
                                                       $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");
                                                    }
                         }
                     });                   
                }else{
                    var inputIDName5 = $(this).find('td.evalCostUnit').find("div").find("input").attr("id");
                    $("#"+inputIDName5).rules('remove');
                }

            });            
            
            
        });
        */
     
     
        $("#add-new-article").on("click", function(e){

             var newCodInterno   = $("#new-codInterno").val();
             var newNameArticulo = $("#new-nameArticulo").val();
             var newCodProveedor = $("#new-codProveedor").val();        
             var errors = false;

             if(newCodInterno == ""){
                 $("#input-new-codInterno").addClass("error");
                 errors = true;
             }else{
                 $("#input-new-codInterno").removeClass("error");
             }                

             if(newNameArticulo == ""){
                 $("#input-new-nameArticulo").addClass("error");
                 errors = true;
             }else{
                 $("#input-new-nameArticulo").removeClass("error"); 
             }
 			
		if(newNameArticulo.indexOf("'") > -1){
 				alert("Comilla simple no es permitida como parte de la descripcion");
 				return false;
		}
		if(newNameArticulo.indexOf('"') > -1){
 				alert("Comillas no es permitida como parte de la descripcion");
 				return false;
		}

/*
             if(newCodProveedor == ""){
                 $("#input-new-codProveedor").addClass("error");
                 errors = true;
             }else{
                 $("#input-new-codProveedor").removeClass("error"); 
             }
*/
             if(errors != true){
                 //$('#frm-newArticle').submit();
                 var idProveedor = cache.$selProveedor.val();
                 var infoNewArticle = {   

                     url: "saveNewArticle.php",
                     async: true,
                     cache: false,
                     data: "codInterno="+newCodInterno+"&nameArticulo="+newNameArticulo+"&codProveedor="+newCodProveedor+"&idProveedor="+idProveedor,
                     type: "POST",
                     success: function(response){                    
                         if(response !=0){
                             $("#message-newArticle").html("<div class='alert alert-error pull-left'><strong><span class='icon icon-red icon-alert'/></span> <strong>NO se pudo agregar el articulo al inventario</strong></div>");
                         }else{
                             $("#message-newArticle").html("<div class='alert alert-success pull-left'><strong><span class='icon icon-green icon-info'/></span> <strong>Se agregó un articulo nuevo al inventario</strong></div>");
                             $("#new-codInterno").val("");
                             $("#new-nameArticulo").val("");
                             $("#new-codProveedor").val("");


     //****************************************  ESTO DEBE DE COLOCARSE EN UNA LIBRERIA ************************************************************ //




            var htmlTable = "";
            
            var pageAnt = parseInt($("#count-numRow").val());            
            var numRow = parseInt($("#count-numRow").val())+ 1;
            
            htmlTable += "<tr class=\"numRow"+numRow+"\" id=\"register"+numRow+"\">";
            htmlTable += "<td class='evalNumRegister' style=\"text-align:center;\"><div style='margin-top:4px;'><br>"+numRow+"</div></td>";
            htmlTable += "<td class='evalCant' style=\"text-align: center\"><div class='control-group' id='row"+numRow+"-input-cant'><br><input class=\"input-mini toCalc\" name=\"row"+numRow+"-cant\" id=\"row"+numRow+"-cant\" type=\"text\" value=\"0\" style=\"text-align:right; width:28px;\" oninput=\"makeCal(this.id)\"></div></td>";
            htmlTable += "<td class='evalArti' style='width:45%'>";
            htmlTable += "<div class='pull-left control-group' id='row"+numRow+"-input-codProveedor' style='width:28%;' title='codProveedor'><span class=\"label label-info\">Cod.Arti.Prov</span><br><input type=\"text\" class=\"input-mini\" style=\"width:90%;\" id=\"row"+numRow+"-codProveedor\" name=\"row"+numRow+"-codProveedor\" value=\""+newCodProveedor+"\" placeholder=\"Cod.Arti.Prov\"></div>";            
            htmlTable += "<div class='pull-left control-group' id='row"+numRow+"-input-nameArticle' style='width:54%;' title='nameArticle'><span class=\"label label-info\">Descripción</span><br><input type=\"text\" class=\"input-mini\" style=\"width:95%;\" id=\"row"+numRow+"-nameArticle\"  name=\"row"+numRow+"-nameArticle\"  value=\""+newNameArticulo+"\" placeholder=\"Nombre Artículo\"></div>";
            htmlTable += "<div class='pull-left control-group' id='row"+numRow+"-input-codInterno'  title='codInterno'><span class=\"label label-info\">Cod.Interno</span><br><input type=\"text\" class=\"input-mini\"   id=\"row"+numRow+"-codInterno\"   name=\"row"+numRow+"-codInterno\"   value=\""+newCodInterno+"\" placeholder=\"Cod.Interno\"></div>";                        
            htmlTable += "<!--<i class=\"icon icon-blue icon-info\"></i>-->";
            htmlTable += "</td>";
            htmlTable += "<td class='evalCostUnit'><div class='pull-left control-group' id='row"+numRow+"-input-costUnit' style='margin-right:3px;'><br><input class=\"input-mini toCalc\" id=\"row"+numRow+"-costUnit\"  name=\"row"+numRow+"-costUnit\"  type=\"text\" value=\"0\" style=\"text-align:right;\" oninput=\"makeCal(this.id)\"></div></td>";
            htmlTable += "<td class='evalCostTotal'><br><input class=\"input-mini toCalc\" id=\"row"+numRow+"-costTotal\" name=\"row"+numRow+"-costTotal\" type=\"text\" value=\"0\" style=\"text-align:right;\"></td>";
            htmlTable += "<td class='evalInfoRef' style='width:30%'><br>";
        
            htmlTable += "<div class=\"pull-left\">";

            htmlTable += "          <select id=\"row"+numRow+"-typeRef\" name=\"row"+numRow+"-typeRef\" class=\"own-selected\" style=\"width:68px; padding:0; float: left; margin-top:2px; margin-right:2px;\">";
            htmlTable += "                <option>Tipo</option>";
            htmlTable += "                <option>COD</option>";
            htmlTable += "                <option>PRO</option>";
            htmlTable += "                <option>CLI</option>";
            htmlTable += "          </select>";
            
            htmlTable += "<input type=\"text\" id=\"row"+numRow+"-numRef\" name=\"row"+numRow+"-numRef\" placeholder=\"#referencia\" class=\"input-mini pull-left\"  style=\"margin:0px 3px 3px 0px; float: left; width:30%;\">";
            htmlTable += "<input type=\"text\" id=\"row"+numRow+"-detRef\" name=\"row"+numRow+"-detRef\" placeholder=\"detalle\" class=\"input-mini pull-left\" style=\"margin:0px 3px 3px 0px; float: left;width:29%;\">";
            
            htmlTable += "</div>";

        
            htmlTable += "</td>";
            htmlTable += "<td class='evalBtnDel'><br><a onclick='delRegister("+numRow+")' style='cursor: pointer;'><span class='icon icon-color icon-remove'></span></a></td>";
            htmlTable += "</tr>";                              
            
            if(pageAnt == 0){
                cache.$tblPedido.find("tr.none").after(htmlTable);        
            }else{
                cache.$tblPedido.find("tr.numRow"+pageAnt).after(htmlTable);                
            }       

            var strCompromisos = "";
            var listCompromisos = {                                                        
                url: "loadListCompromisos.php",
                async: true,
                cache: false,
                type: "POST",
                dataType: "json",
                success: function(infoComp){
                    
                    var total = Object.keys(infoComp).length
                    
                    strCompromisos += "<option value='0'>Tipo</option>";
                    for(var x=0; x < total; x++){
                        if(infoComp[x].descripcion == "STOCK"){
                            strCompromisos += "<option value='"+infoComp[x].id+"' selected>"+infoComp[x].descripcion+"</option>";
                        }else{
                            strCompromisos += "<option value='"+infoComp[x].id+"'>"+infoComp[x].descripcion+"</option>";
                        }
                        
                    }
                    
                    $("#row"+numRow+"-typeRef").html(strCompromisos);                    
                    //alert(strCompromisos);
                }                                                           

            };
            $.ajax(listCompromisos);

            $('#row'+numRow+'-costUnit').number( true, 2 );
            $('#row'+numRow+'-costTotal').number( true, 2 );  
                    
            var infoProveedor = {
                url: "loadInfoProveedor.php",
                async: true,
                cache: false,
                data: "idProveedor="+cache.$selProveedor.val(),
                type: "POST",
                dataType: "json",
                success: function(dataProveedor){                        

                    if(dataProveedor["LIST_CODES"] != "0"){
                        //SE CARGAN LOS DATOS DE LOS ARTICULOS UNA VEZ QUE SE SE SELECCIONE EL PROVEEDOR: MAS EFICIENTE (Funciona con la Primera linea)//
                        $( "#row"+numRow+"-codInterno" ).autocomplete(
                                {
                                        source:dataProveedor["LIST_CODES"][0],
                                        select: function( event, ui ) {                    
                                                //$( "#codInterno" ).val( ui.item.label + " / " + ui.item.DesArticulo );
                                                //$( "#row"+numRow+"-codInterno" ).val( ui.item.label );
                                                //alert($(this).attr("id"));
                                                var choosedRow = $(this).attr("id").split('-');                                                
                                                $( "#"+choosedRow[0]+"-codInterno" ).val( ui.item.label );
                                                
                                                    var infoCodSel = {                                                        
                                                        url: "loadInfoByCod.php",
                                                        async: true,
                                                        cache: false,
                                                        data: "idProveedor="+cache.$selProveedor.val()+"&codArticulo="+ui.item.label,
                                                        type: "POST",
                                                        dataType: "json",
                                                        success: function(infoCod){
                                                            $( "#"+choosedRow[0]+"-codProveedor" ).val( infoCod[0].CodArtiPro );
                                                            $( "#"+choosedRow[0]+"-nameArticle" ).val( infoCod[0].DesArticulo );
                                                            $( "#"+choosedRow[0]+"-costUnit" ).val( infoCod[0].UltCosto );
                                                        }                                                           
                                                        
                                                    };
                                                    $.ajax(infoCodSel);                                                
                                                
                                                
                                                return false;
                                        }
                                }).data( "autocomplete" )._renderItem = function( ul, item ) {

                                            return $( "<li></li>" )
                                                    .data( "item.autocomplete", item )
                                                    //.append( "<a><strong>" + item.label + "</strong> / " + item.DesArticulo + "</a>" )
                                                    .append( "<a><strong>" + item.label + "</strong></a>" )
                                                    .appendTo( ul );


                                  };                                         

                        //SE CARGAN LOS DATOS DE LOS ARTICULOS UNA VEZ QUE SE SE SELECCIONE EL PROVEEDOR: MAS EFICIENTE (Funciona con la Primera linea)//
                        $( "#row"+numRow+"-nameArticle" ).autocomplete(
                                {
                                        source:dataProveedor["LIST_CODES"][1],
                                        select: function( event, ui ) {                    
                                                //$( "#codInterno" ).val( ui.item.label + " / " + ui.item.DesArticulo );                                                
                                                var choosedRow = $(this).attr("id").split('-');                                                
                                                $( "#"+choosedRow[0]+"-nameArticle" ).val( ui.item.label );                                                
                                                
                                                    var infoDesSel = {                                                        
                                                        url: "loadInfoByDes.php",
                                                        async: true,
                                                        cache: false,
                                                        data: "idProveedor="+cache.$selProveedor.val()+"&desArticle="+ui.item.label,
                                                        type: "POST",
                                                        dataType: "json",
                                                        success: function(infoDes){
                                                            
                                                            $( "#"+choosedRow[0]+"-codInterno" ).val( infoDes[0].CodArti );
                                                            $( "#"+choosedRow[0]+"-codProveedor" ).val( infoDes[0].CodArtiPro );
                                                            $( "#"+choosedRow[0]+"-costUnit" ).val( infoDes[0].UltCosto );
                                                            
                                                        }                                                           
                                                        
                                                    };
                                                    $.ajax(infoDesSel);                                                 
                                                
                                                return false;
                                        }
                                }).data( "autocomplete" )._renderItem = function( ul, item ) {
                                        return $( "<li></li>" )
                                                .data( "item.autocomplete", item )
                                                //.append( "<a><strong>" + item.label + "</strong> / " + item.DesArticulo + "</a>" )
                                                .append( "<a><strong>" + item.label + "</strong></a>" )
                                                .appendTo( ul );
                                  };
                                  

                            $( "#row"+numRow+"-codProveedor" ).autocomplete(
                                    {
                                            source:dataProveedor["LIST_CODES"][2],
                                            select: function( event, ui ) {                    
                                                    //$( "#codInterno" ).val( ui.item.label + " / " + ui.item.DesArticulo );                                                    
                                                    var choosedRow = $(this).attr("id").split('-');                                                
                                                    $( "#"+choosedRow[0]+"-codProveedor" ).val( ui.item.label );     
                                                
                                                    var infoProSel = {                                                        
                                                        url: "loadInfoByCodPro.php",
                                                        async: true,
                                                        cache: false,
                                                        data: "idProveedor="+cache.$selProveedor.val()+"&codProArticle="+ui.item.label,
                                                        type: "POST",
                                                        dataType: "json",
                                                        success: function(infoPro){
                                                         //   alert(infoPro)                                                            
                                                            $( "#"+choosedRow[0]+"-codInterno" ).val( infoPro[0].CodArti );
                                                            $( "#"+choosedRow[0]+"-nameArticle" ).val( infoPro[0].DesArticulo );
                                                            $( "#"+choosedRow[0]+"-costUnit" ).val( infoPro[0].UltCosto );
                                                        }                                                           
                                                        
                                                    };
                                                    $.ajax(infoProSel);                                                    
                                                    
                                                    
                                                    return false;
                                            }
                                    }).data( "autocomplete" )._renderItem = function( ul, item ) {
                                            return $( "<li></li>" )
                                                    .data( "item.autocomplete", item )
                                                    //.append( "<a><strong>" + item.label + "</strong> / " + item.DesArticulo + "</a>" )
                                                    .append( "<a><strong>" + item.label + "</strong></a>" )
                                                    .appendTo( ul );
                                      };    
            
                                  
                    }else{
                     
                        //SE CARGAN LOS DATOS DE LOS ARTICULOS UNA VEZ QUE SE SE SELECCIONE EL PROVEEDOR: MAS EFICIENTE (Funciona con la Primera linea)//
                        $( "#row"+numRow+"-codInterno" ).autocomplete(
                                {
                                        source:[{"label":"Sin Resultados"}],
                                        select: function( event, ui ) {                    
                                                //$( "#codInterno" ).val( ui.item.label + " / " + ui.item.DesArticulo );
                                                $( "#row"+numRow+"-codInterno" ).val( ui.item.label );                                                
                                                return false;
                                        }
                                }).data( "autocomplete" )._renderItem = function( ul, item ) {

                                            return $( "<li></li>" )
                                                    .data( "item.autocomplete", item )
                                                    //.append( "<a><strong>" + item.label + "</strong> / " + item.DesArticulo + "</a>" )
                                                    .append( "<a><strong>" + item.label + "</strong></a>" )
                                                    .appendTo( ul );


                                  };                                         

                        //SE CARGAN LOS DATOS DE LOS ARTICULOS UNA VEZ QUE SE SE SELECCIONE EL PROVEEDOR: MAS EFICIENTE (Funciona con la Primera linea)//
                        $( "#row"+numRow+"-nameArticle" ).autocomplete(
                                {
                                        source:[{"label":"Sin Resultados"}],
                                        select: function( event, ui ) {                    
                                                //$( "#codInterno" ).val( ui.item.label + " / " + ui.item.DesArticulo );
                                                $( "#row"+numRow+"-nameArticle" ).val( ui.item.label );
                                                return false;
                                        }
                                }).data( "autocomplete" )._renderItem = function( ul, item ) {
                                        return $( "<li></li>" )
                                                .data( "item.autocomplete", item )
                                                //.append( "<a><strong>" + item.label + "</strong> / " + item.DesArticulo + "</a>" )
                                                .append( "<a><strong>" + item.label + "</strong></a>" )
                                                .appendTo( ul );
                                  };                              

                    }                        

                }
            };                   
            $.ajax(infoProveedor);

            $("input[type=text]").on("click", function(e){
                this.select();
            });
                        
            //pageAnt = numRow;
            $("#count-numRow").val(numRow);
             
             var statusCostObl = $("#txt-costObl").val();
             $("[id*='register']").each(function() {

               var rwIDName = $(this).find('td.evalCant').find("div").attr("id");
               var inputIDName = $(this).find('td.evalCant').find("div").find("input").attr("id");
               
                $("#"+inputIDName).rules('add', {
                    required: function(){
                        $("#"+rwIDName).removeClass("error"); return true;
                    },
                    min:1,
                    messages: {
                        required:  function(){
                                           $("#"+rwIDName).addClass("error");
                                           $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");                                           
                                        },
                        min:  function(){
                                           $("#"+rwIDName).addClass("error");
                                           $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");
                                        }
                    }
                });

               var rwIDName2 = $(this).find('td.evalArti').find("div[title=codInterno]").attr("id");
               var inputIDName2 = $(this).find('td.evalArti').find("div[title=codInterno]").find("input").attr("id");
                              
                $("#"+inputIDName2).rules('add', {
                    required: function(){
                        $("#"+rwIDName2).removeClass("error"); return true;
                    },
                    min:1,
                    messages: {
                        required:  function(){
                                           $("#"+rwIDName2).addClass("error");
                                           $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");                                           
                                        },
                        min:  function(){
                                           $("#"+rwIDName2).addClass("error");
                                           $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");
                                        }
                    }
                });

               var rwIDName3 = $(this).find('td.evalArti').find("div[title=codProveedor]").attr("id");
               var inputIDName3 = $(this).find('td.evalArti').find("div[title=codProveedor]").find("input").attr("id");
                              
                $("#"+inputIDName3).rules('add', {
                    required: function(){
                        $("#"+rwIDName3).removeClass("error"); return true;
                    },
                    messages: {
                        required:  function(){
                                           $("#"+rwIDName3).addClass("error");
                                           $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");                                           
                                        }
                    }
                });

               var rwIDName4 = $(this).find('td.evalArti').find("div[title=nameArticle]").attr("id");
               var inputIDName4 = $(this).find('td.evalArti').find("div[title=nameArticle]").find("input").attr("id");
                              
                $("#"+inputIDName4).rules('add', {
                    required: function(){
                        $("#"+rwIDName4).removeClass("error"); return true;
                    },
                    messages: {
                        required:  function(){
                                           $("#"+rwIDName4).addClass("error");
                                           $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");                                           
                                        }
                    }
                });
                
                
                if(statusCostObl == "S"){
                    
                    var rwIDName5 = $(this).find('td.evalCostUnit').find("div").attr("id");
                    var inputIDName5 = $(this).find('td.evalCostUnit').find("div").find("input").attr("id");

                     $("#"+inputIDName5).rules('add', {
                         required: function(){
                             $("#"+rwIDName5).removeClass("error"); return true;
                         },
                         number:true,
                         notEqual: 0,
                         messages: {
                             required:  function(){
                                                $("#"+rwIDName5).addClass("error");
                                                $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");                                           
                                             },
                             number:  function(){
                                                $("#"+rwIDName5).addClass("error");
                                                $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");
                                             },
                             notEqual:  function(){
                                                       $("#"+rwIDName5).addClass("error");
                                                       $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");
                                                    }
                         }
                     });                   
                }else{
                    var inputIDName5 = $(this).find('td.evalCostUnit').find("div").find("input").attr("id");
                    $("#"+inputIDName5).rules('remove');
                }

            });




     //**************************************** FIN DEL CODIGO A LIBRERIA *******************************************************************//





                         }

                     }                                                           
                 };
                 $.ajax(infoNewArticle);

             }else{
                 $("#message-newArticle").html("<div class='alert alert-error pull-left'><strong><span class='icon icon-red icon-alert'/></span> <strong>Complete la Información Requerida</strong></div>");
                 return false;
             }

         });     
     
        
        
    });
     





$(function(){
    
        $.validator.addMethod("notEqual", function(value, element, param) {
          return this.optional(element) || value != param;
        }, "");    
    
        $.validator.addMethod("valueNotEquals", function(value, element, arg){
         return arg != value;
        }, "");    

        
        $('#frm-newPedido').validate({ 
            submitHandler: function (form) { 
                
                $("#message-fields-obl").css("display","none");
                
                $("#boxProgress").css("display","block");
                
                $("#btnPedido").prop('disabled', true);
                
                var progress = setInterval(function() {
                    var $bar = $('.bar');

                    if ($bar.width()>=300) {
                        clearInterval(progress);
                        $('.progress').removeClass('active');
                        form.submit();
                    } else {
                        $bar.width($bar.width()+100);
                    }
                    //$bar.text($bar.width()/4 + "%");
                    
                }, 100); 
                
            }
        });    

        $("#datePedido").rules('add', {
            required: function(){$("#input-datePedido").removeClass("error"); return true;},
            messages: {
                required:  function(){
                                   $("#input-datePedido").addClass("error");
                                   $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");
                                }
            }
        });        

        $("#dateArribo").rules('add', {
            required: function(){$("#input-dateArribo").removeClass("error"); return true;},
            messages: {
                required:  function(){
                                   $("#input-dateArribo").addClass("error");
                                   $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");
                                }
            }
        });        
        
        $("#selectDirEnvio").rules('add', {
            notEqual: function(){$("#input-DirEnvio").removeClass("error"); return 0;},
            messages: {
                notEqual:  function(){                                   
                                   $("#input-DirEnvio").addClass("error");
                                   $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");

                                }
            }
        }); 
        
        $("#selectDirDocs").rules('add', {
            notEqual: function(){$("#input-DirDocs").removeClass("error"); return 0;},
            messages: {
                notEqual:  function(){                                   
                                   $("#input-DirDocs").addClass("error");
                                   $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");
                                   
                                }
            }
        });        
/*      
        $("#selectTipTarjeta").rules('add', {
            notEqual: function(){$("#input-TipTarjeta").removeClass("error"); return 0;},
            messages: {
                notEqual:  function(){                                   
                                   $("#input-TipTarjeta").addClass("error");
                                   $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");
                                   
                                }
            }
        }); 
*/              
        
        $("#selectMoneda").rules('add', {
            notEqual: 0,
            messages: {
                notEqual:  function(){                                   
                                   $("#lbl-moneda").html("<span class='label label-important' >Seleccione la moneda</span>");
                                   $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");
                                }
            }
        });        
        
        $("#row1-cant").rules('add', {
            required: function(){$("#row1-input-cant").removeClass("error"); return true;},
            min:1,
            messages: {
                required:  function(){
                                   $("#row1-input-cant").addClass("error");
                                   $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");
                                },
                min:  function(){
                                   $("#row1-input-cant").addClass("error");
                                   $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");                                           
                                }
            }
        });            
        
        $("#row1-codInterno").rules('add', {
            required: function(){$("#row1-input-codInterno").removeClass("error"); return true;},
//            min:1,
            messages: {
                required:  function(){
                                   $("#row1-input-codInterno").addClass("error");
                                   $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");                                           
                                }
//            ,
//                min:  function(){
//                                   $("#row1-input-codInterno").addClass("error");
//                                   $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");                                           
//                                }
            }
        }); 

                   
        
        $("#row1-codProveedor").rules('add', {
            required: function(){$("#row1-input-codProveedor").removeClass("error"); return true;},
            messages: {
                required:  function(){
                                   $("#row1-input-codProveedor").addClass("error");
                                   $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");
                                }
            }
        });            
        
        $("#row1-nameArticle").rules('add', {
            required: function(){$("#row1-input-nameArticle").removeClass("error"); return true;},
            messages: {
                required:  function(){
                                   $("#row1-input-nameArticle").addClass("error");
                                   $("#message-fields-obl").html("<div class='alert alert-error pull-right' style=''><strong><span class='icon icon-red icon-alert'/></span> Complete la Información Requerida</strong></div>");
                                }
            }
        });        

});


    function resetFrmPedido(){
           
        $("[id*='register']").each(function() {

            var register = $(this).attr("id");
            
            if(register != "register1"){                
                $("#"+register).remove();
            }

        });
        
        $("#input-datePedido").removeClass("error");
        $("#input-dateArribo").removeClass("error");
        
        $("#row1-cant").val(0);
        $("#row1-codInterno").val("");
        $("#row1-codProveedor").val("");
        $("#row1-nameArticle").val("");
        
        $("#row1-costUnit").rules( "remove" );
//        $("#row1-costUnit").val(0);
        
        $("#row1-costTotal").val(0); 
        //$("#row1-typeRef").val(); 
        $("#row1-numRef").val(""); 
        $("#row1-detRef").val(""); 
        $("#subTotal").val(0); 
        $("#costEnvio").val(0); 
        $("#otherCost").val(0); 
        $("#totalPedido").val(0);
        
        $("#row1-input-cant").removeClass("error");
        $("#row1-input-codInterno").removeClass("error");
        $("#row1-input-codProveedor").removeClass("error");
        $("#row1-input-nameArticle").removeClass("error");
        $("#row1-input-costUnit").removeClass("error");
        
        $("#message-fields-obl").html("");
    }  

    function makeCal(rowID){
        
        var datInput = $("#"+rowID).val();
                
        if(datInput != ""){

            var datInput = parseInt($("#"+rowID).val());

            if(!isNaN(datInput)){
                var count = 1;

                var cant      = 0;
                var costUnit  = 0;
                var costTotal = 0;            

                $( "input.toCalc" ).each( function( i, el ) {

                    if ($(el).attr("id") == "row"+count+"-cant"){
                        cant = $("#"+$(el).attr("id")).val(); 
                        //alert(cant);
                    }

                    if($(el).attr("id") == "row"+count+"-costUnit"){                        
                        costUnit  = $("#"+$(el).attr("id")).val();
                        //alert(costUnit);
                    }

                    if($(el).attr("id") == "row"+count+"-costTotal"){
                        costTotal  = cant * costUnit;
                        //alert(costTotal);
                        $("#"+$(el).attr("id")).val(costTotal); 
                        count++;
                    }

                });   
                                
                var contTotales = 1;
                var sumAllTotales = 0;
                
                $( "input.toCalc" ).each( function( i, el ) {

                    if($(el).attr("id") == "row"+contTotales+"-costTotal"){
                        sumAllTotales  += parseFloat($("#"+$(el).attr("id")).val()); 
                        contTotales++;
                    }

                });
                                
                $("#subTotal").val(sumAllTotales);
                
                var resultTotal = parseFloat($("#costEnvio").val()) + parseFloat($("#otherCost").val()) + sumAllTotales;
                $("#totalPedido").val(resultTotal);
                
            }
            
        }else{ 
            
            var count = 1;
            var sumAllTotales = 0;
            $( "input.toCalc" ).each( function( i, el ) {

                if($(el).attr("id") == rowID){
                    $("#"+"row"+count+"-costTotal").val(0);
                }

                if($(el).attr("id") == "row"+count+"-costTotal"){
                    sumAllTotales  += parseFloat($("#"+$(el).attr("id")).val()); 
                    count++;
                }                    

            });
            
            $("#subTotal").val(sumAllTotales);
            var resultTotal = parseFloat($("#costEnvio").val()) + parseFloat($("#otherCost").val()) + sumAllTotales;
            $("#totalPedido").val(resultTotal);            
            
        }
        
    }

    function delRegister(numRegister){
        //alert(numRegister);
  //      if(numRegister != 1){
            //$("#register"+numRegister).remove();
            var maxNumRow = parseInt($("#count-numRow").val());
            //alert(numRegister);
            //alert(maxNumRow);
            if(maxNumRow == numRegister){
              //alert("Eliminando ULTIMO");  
              $("#register"+numRegister).remove();
              $("#count-numRow").val(numRegister-1);
            }else{
                //alert("Eliminando INTERMEDIOS");
                $("#register"+numRegister).remove();
                
                var contR = parseInt($("#count-numRow").val()) - 1
                var cont = numRegister;
                $("[id*='register']").each(function() {

                    var register  = $(this).attr("id");
                    var strRegis  = $(this).attr("id").split('r'); 
                    var currRegis = parseInt(strRegis[2]);
                    
                    if((register != "register1") && (currRegis >= numRegister)){
                        
                        //SE CAMBIA EL NUMERO DE REGISTRO
                        $("#"+register).find("td.evalNumRegister").html("<div style='margin-top:4px;'><br>"+cont+"</div>");
                        
                        //SE CAMBIA CAMPO CANTIDAD
                        $("#"+register).find("td.evalCant").find("div").attr("id", "row"+cont+"-input-cant");
                        $("#"+register).find("td.evalCant").find("div").find("input").attr("name", "row"+cont+"-cant");
                        $("#"+register).find("td.evalCant").find("div").find("input").attr("id", "row"+cont+"-cant");
                        
                        //SE CAMBIA LA INFORMACION DEL ARTICULO
                        
                        //CodProveedor//
                        $("#"+register).find("td.evalArti").find("div[title=codProveedor]").attr("id", "row"+cont+"-input-codProveedor");
                        $("#"+register).find("td.evalArti").find("div[title=codProveedor]").find("input").attr("id", "row"+cont+"-codProveedor");
                        $("#"+register).find("td.evalArti").find("div[title=codProveedor]").find("input").attr("name", "row"+cont+"-codProveedor");                        
                        //NameArticle//
                        $("#"+register).find("td.evalArti").find("div[title=nameArticle]").attr("id", "row"+cont+"-input-nameArticle");
                        $("#"+register).find("td.evalArti").find("div[title=nameArticle]").find("input").attr("id", "row"+cont+"-nameArticle");
                        $("#"+register).find("td.evalArti").find("div[title=nameArticle]").find("input").attr("name", "row"+cont+"-nameArticle");
                        //CodInterno//
                        $("#"+register).find("td.evalArti").find("div[title=codInterno]").attr("id", "row"+cont+"-input-codInterno");
                        $("#"+register).find("td.evalArti").find("div[title=codInterno]").find("input").attr("id", "row"+cont+"-codInterno");
                        $("#"+register).find("td.evalArti").find("div[title=codInterno]").find("input").attr("name", "row"+cont+"-codInterno");
                        
                        //SE CAMBIA EL COSTO UNITARIO
                        $("#"+register).find("td.evalCostUnit").find("div").attr("id", "row"+cont+"-input-costUnit");
                        $("#"+register).find("td.evalCostUnit").find("div").find("input").attr("id", "row"+cont+"-costUnit");                                                 
                        $("#"+register).find("td.evalCostUnit").find("div").find("input").attr("name", "row"+cont+"-costUnit"); 
                        
                        //SE CAMBIA EL COSTO TOTAL
                        $("#"+register).find("td.evalCostTotal").find("input").attr("id", "row"+cont+"-costTotal");                                                 
                        $("#"+register).find("td.evalCostTotal").find("input").attr("name", "row"+cont+"-costTotal");                                                 
                           
                        //SE CAMBIA LA INFORMACION DE REFERECIA
                        
                        //Tipo de Referencia//
                        $("#"+register).find("td.evalInfoRef").find("select").attr("id", "row"+cont+"-typeRef");                                                 
                        $("#"+register).find("td.evalInfoRef").find("select").attr("name", "row"+cont+"-typeRef");                                                                         
                        //Numero de Referencia//
                        $("#"+register).find("td.evalInfoRef").find("input").attr("id", "row"+cont+"-numRef");                                                 
                        $("#"+register).find("td.evalInfoRef").find("input").attr("name", "row"+cont+"-numRef"); 
                        //Detalle de Referencia//
                        $("#"+register).find("td.evalInfoRef").find("input").attr("id", "row"+cont+"-detRef");                                                 
                        $("#"+register).find("td.evalInfoRef").find("input").attr("name", "row"+cont+"-detRef");                                                 
                        
                        //SE CAMBIA EL BOTON DE ELIMINAR
                        $("#"+register).find("td.evalBtnDel").find("a").attr("onclick", "delRegister("+cont+")");
                        $("#"+register).attr("class", "numRow"+cont);
                        $("#"+register).attr("id", "register"+cont);
                        cont++;
                    }
                    
                });
                
                $("#count-numRow").val(contR);
            }
            
            
     //   }
     
     
                var count = 1;

                var cant      = 0;
                var costUnit  = 0;
                var costTotal = 0;            

                $( "input.toCalc" ).each( function( i, el ) {

                    if ($(el).attr("id") == "row"+count+"-cant"){
                        cant = $("#"+$(el).attr("id")).val(); 
                        //alert(cant);
                    }

                    if($(el).attr("id") == "row"+count+"-costUnit"){                        
                        costUnit  = $("#"+$(el).attr("id")).val();
                        //alert(costUnit);
                    }

                    if($(el).attr("id") == "row"+count+"-costTotal"){
                        costTotal  = cant * costUnit;
                        //alert(costTotal);
                        $("#"+$(el).attr("id")).val(costTotal); 
                        count++;
                    }

                });   
                                
                var contTotales = 1;
                var sumAllTotales = 0;
                
                $( "input.toCalc" ).each( function( i, el ) {

                    if($(el).attr("id") == "row"+contTotales+"-costTotal"){
                        sumAllTotales  += parseFloat($("#"+$(el).attr("id")).val()); 
                        contTotales++;
                    }

                });
                                
                $("#subTotal").val(sumAllTotales);
                
                var resultTotal = parseFloat($("#costEnvio").val()) + parseFloat($("#otherCost").val()) + sumAllTotales;
                $("#totalPedido").val(resultTotal);     
     
        
    }


    
</script>
{/literal}
