{$NAV_MENU}
<section id="main" >
	<div class="box-content">
	<div class="control-group">
            <h2></i>Reporte de Antigüedad Saldos</h2>
       
        	<form class="form-horizontal">

		<div class="control-group" id="boxSelCliente" >
<!--        <label class="control-label" for="selectEstCliente"> Estado Cliente</label>
        <div class="controls">
          <select data-placeholder="Estado" style="width:50%;"  id="selectEstCliente"    name ="selectEstCliente"  data-rel="chosen"  >
                      <option value="0">Todos</option>
                        {section name=lP loop=$LISTA_CLIENTES}
                          <option value="{$LISTA_CLIENTES[lP].id}" >{$LISTA_CLIENTES[lP].descripcion}</option>                         
                        {/section}
                    </select>
                </div>
            </div>
   -->         
            </form>           
            
             <form class="form-horizontal">
                  
		  <div class="control-group" id="boxSelTipoCli" >
               <label class="control-label" for="selectTipoCli"> Tipo Cliente</label>
               <div class="controls">
          <select data-placeholder="Documento" style="width:50%;"  id="selectTipoCli"    name ="selectTipoCli"  data-rel="chosen"  >
                      <option value="0">Todos</option>
                        {section name=I loop=$LISTA_TIPOS}
                          <option value="{$LISTA_TIPOS[I].id}" >{$LISTA_TIPOS[I].descripcion}</option>                          
                        {/section}
                    </select>
                </div>
          </div>
                  </form>
                	
		
		 <form class="form-horizontal">
            <div class="control-group" id="boxdateFechaI">	
            	<label class="control-label" for="dateFechaI">Fecha Corte</label>                                           
                <div class="controls" id="input-dateFechaI">
                	<input type="text" class="datepicker" id="dateFechaI" name="dateFechaI" placeholder="Indicar Fecha Inicio" value="{$CURRENT_DATE}"> 
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

    
	// selCliente  = $("#selectEstCliente").val(); 
        selCliente = '0';
	tipocli     = $("#selectTipoCli").val();
    fechaI 		= $("#dateFechaI").val();
    
    
   // window.open('buscar.php?fechaI='+fechaI+"&fechaF="+fechaF,'_blank');
    
    window.open('genAntigSaldos.php?selCliente='+selCliente+"&tipocli="+tipocli+"&fechaI="+fechaI,'_blank');
    
    
}



</script>
{/literal}
