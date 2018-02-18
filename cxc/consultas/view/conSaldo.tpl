{$NAV_MENU}
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
                {section name=I loop=$LISTA_DOCS}
                  <option value="{$LISTA_DOCS[I].id}" >{$LISTA_DOCS[I].descripcion}</option>                          
                {/section}
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
    
   // window.open('buscar.php?fechaI='+fechaI+"&fechaF="+fechaF,'_blank');
    
    window.open('genConSaldo.php?tipodoc='+tipodoc,'_blank');
    
    
}



</script>
{/literal}
