{$NAV_MENU}
<section id="main" >
 
	<div class="box-content">
	
	<div class="control-group">
	 
          
           <div class="control-label" >
                <h2 style="margin-left:50px; "></i>Reporte de Cierre</h2>      
           </div>
         <form class="form-horizontal">
		  <div class="control-group" id="boxSelTipoDoc" >
               <label class="control-label" for="selectTipoDoc"> Documento</label>
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

    
	
	tipodoc     = $("#selectTipoDoc").val();
    fechaI 		= $("#dateFechaI").val();
    fechaF 		= $("#dateFechaF").val();
    
   // window.open('buscar.php?fechaI='+fechaI+"&fechaF="+fechaF,'_blank');
    
    window.open('genCierre.php?tipodoc='+tipodoc+"&fechaI="+fechaI+"&fechaF="+fechaF,'_blank');
    
    
}



</script>
{/literal}
