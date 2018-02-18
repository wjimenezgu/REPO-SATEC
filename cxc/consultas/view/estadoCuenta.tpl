{$NAV_MENU}
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
                        {section name=lP loop=$LISTA_CLIENTES}
                        	<option value="{$LISTA_CLIENTES[lP].id}|{$LISTA_CLIENTES[lP].nombre}" >{$LISTA_CLIENTES[lP].nombre}</option>                        	
                        {/section}
                    </select>
                </div>
            </div>
<!--
    		<div class="control-group " id="boxSelectCriterio">
        		<label class="control-label"  for="selectCriterio">Incluir</label>
            	<div class="controls ">                                             
            		<select id="selectCriterio"  name="selectCriterio">
                		<option  value="S">Solo con saldo</option>                                         
                    	<option  value="N">Todos</option>
                	</select>
                </div>
         	</div>            
-->
			<form>
				<div class="form-actions">
					<input type="button" id="btn_buscarMovi" onclick="findMovi()" value="Generar" class="btn btn-primary">
				</div>
			</form>		
		</form>
    </div>
</section>
	
	
{literal}
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
{/literal}
