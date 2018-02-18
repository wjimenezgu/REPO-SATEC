{$NAV_MENU}
<section id="main" >
 <h1></i>Documentos x Cliente</h1>
	<div class="box-content">
	
	<div class="control-group">
	 
        	<form class="form-horizontal">

		<div class="control-group" id="boxSelCliente" >
        <label class="control-label" for="selectCliente"> Cliente</label>
        <div class="controls">
          <select data-placeholder="Nombre (ID CLiente)" style="width:50%;"  id="selectCliente"    name ="selectCliente"  data-rel="chosen"  >
                      <option value="0"></option>
                        {section name=lP loop=$LISTA_CLIENTES}
                          <option value="{$LISTA_CLIENTES[lP].id}|{$LISTA_CLIENTES[lP].nombre}" >{$LISTA_CLIENTES[lP].nombre} ({$LISTA_CLIENTES[lP].id})</option>                         
                        {/section}
                    </select>
                </div>
            </div>
            
            </form>           
            
             <form class="form-horizontal">
                  
		  <div class="control-group" id="boxSelTipoDoc" >
               <label class="control-label" for="selectTipoDoc"> Tipo de Documento</label>
               <div class="controls">
          <select data-placeholder="Documento" style="width:50%;"  id="selectTipoDoc"    name ="selectTipoDoc"  data-rel="chosen"  >
                      <option value="0"></option>
                        {section name=I loop=$LISTA_CLIENTES}
                          <option value="{$LISTA_DOCS[I].id}" >{$LISTA_DOCS[I].descripcion}</option>                          
                        {/section}
                    </select>
                </div>
          </div>
                  </form>
                	
		  <form class="form-horizontal">
		  
		   <div class="control-group " id="boxSelectCriterio">
            <label class="control-label"  for="selectCriterio">Incluir</label>
              <div class="controls ">                                             
                  <select id="selectCriterio"  name="selectCriterio">
                    <option  value="S">Solo con saldo</option>                                         
                      <option  value="N">Todos</option>
                  </select>
              </div>
           </div>            	
		  </form>
		 <form class="form-horizontal">
            <div class="control-group" id="boxdateFechaI">	
            	<label class="control-label" for="dateFechaI">Fecha Inicial</label>                                           
                <div class="controls" id="input-dateFechaI">
                	<input type="text" class="datepicker" id="dateFechaI" name="dateFechaI" placeholder="Indicar Fecha Inicio" value="{$CURRENT_DATE}"> 
                </div>                       
            </div>                        
            <div class="control-group" id="boxdateFechaF">	
            	<label class="control-label" for="dateFechaF">Fecha Final</label>                                           
                <div class="controls" id="input-dateFechaF">
                	<input type="text" class="datepicker" id="dateFechaF" name="dateFechaF" placeholder="Indicar Fecha Final" value="{$CURRENT_DATE}"> 
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
	
	
{literal}
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

    
	selCliente   = $("#selectCliente").val(); 
	tipodoc     = $("#selectTipoDoc").val();
	criterio    = $("#selectCriterio").val(); 
    fechaI 		= $("#dateFechaI").val();
    fechaF 		= $("#dateFechaF").val();
    
   // window.open('buscar.php?fechaI='+fechaI+"&fechaF="+fechaF,'_blank');
    
    window.open('genDocumentos.php?selCliente='+selCliente+"&tipodoc="+tipodoc+"&criterio="+criterio+"&fechaI="+fechaI+"&fechaF="+fechaF,'_blank');
    
    
}



</script>
{/literal}
