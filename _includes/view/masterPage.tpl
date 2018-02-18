{$HEADER_PAGE}
{$OPT_HIDE}
    {$PAGE}
{$FOOTER_PAGE}
<script type="text/javascript">
$(document).ready(function(){
	// Lista de Opciones que se deben apagar
	var optHideNodeList = document.getElementById("listOptHide").getElementsByTagName("li");
	// Se verifica a nivel de modulos cuales hay que apagar
	for (var j = 0; j < optHideNodeList.length; ++j) {
		var itemOptHide = optHideNodeList[j];
		if (itemOptHide.id == "SIST_INVENTARIO"){
		  item = document.getElementById("SIST_INVENTARIO");
		  item.style.display = "none";
		  item = document.getElementById("divREP_INVENTARIO");
		  item.style.display = "none"; 
		}
		if (itemOptHide.id == "SIST_IMPORTACION"){
			item = document.getElementById("SIST_IMPORTACION");
			item.style.display = "none";
			item = document.getElementById("divSIST_IMPORTACION");
			item.style.display = "none"; 
				 
		}
		if (itemOptHide.id == "SIST_MANAGMENT"){
			item = document.getElementById("SIST_MANAGMENT");
			item.style.display = "none";
			item = document.getElementById("divSIST_MANAGMENT");
			item.style.display = "none";  
		}
		if (itemOptHide.id == "SIST_CONSULTAS"){
			item = document.getElementById("SIST_CONSULTAS");
			item.style.display = "none";
			item = document.getElementById("divSIST_CONSULTAS");
			item.style.display = "none";  
		}
        if (itemOptHide.id == "SIST_CXC"){
			item = document.getElementById("SIST_CXC");
			item.style.display = "none";
			item = document.getElementById("divREP_CXC");
			item.style.display = "none";  
		}
        if (itemOptHide.id == "SIST_CXP"){
			item = document.getElementById("SIST_CXP");
			item.style.display = "none";
			item = document.getElementById("divREP_CXP");
			item.style.display = "none";  
		}
        if (itemOptHide.id == "SIST_FACTURACION"){
			item = document.getElementById("SIST_FACTURACION");
			item.style.display = "none";
			item = document.getElementById("divREP_FACTURACION");
			item.style.display = "none";  
		}
		if (itemOptHide.id == "REP_CXP"){
			item = document.getElementById("divREP_CXP");
			item.style.display = "none";
			 
		}
		if (itemOptHide.id == "REP_CXC"){
			item = document.getElementById("divREP_CXC");
			item.style.display = "none";
			 
		}
		if (itemOptHide.id == "REP_INVENTARIO"){
			item = document.getElementById("divREP_INVENTARIO");
			item.style.display = "none";
			 
		}
		if (itemOptHide.id == "REP_FACTURACION"){
			item = document.getElementById("divREP_FACTURACION");
			item.style.display = "none";
			 
		}
		if (itemOptHide.id == "APLI_CXC"){
			item = document.getElementById("divRECI_CXC");
			item.style.display = "none";
			 
		}
		if (itemOptHide.id == "APLI_CXP"){
			item = document.getElementById("divPAGO_CXP");
			item.style.display = "none";
			 
		}								
	}  	
	
	
	var myNodeList      = document.getElementById("SIST_INVENTARIO").getElementsByTagName("li");	
	for (var i = 0; i < myNodeList.length; ++i) {
		  var item = myNodeList[i];
		  for (var j = 0; j < optHideNodeList.length; ++j) {
			   var itemOptHide = optHideNodeList[j];
		  	   if (item.id == itemOptHide.id){
			   	  item.style.display = "none"; 
			   }
		  }  
		}

	var myNodeList      = document.getElementById("SIST_IMPORTACION").getElementsByTagName("li");	
	for (var i = 0; i < myNodeList.length; ++i) {
		  var item = myNodeList[i];
		  for (var j = 0; j < optHideNodeList.length; ++j) {
			   var itemOptHide = optHideNodeList[j];
		  	   if (item.id == itemOptHide.id){
			   	  item.style.display = "none"; 
			   }
		  }  
		}
	
	var myNodeList      = document.getElementById("SIST_CONSULTAS").getElementsByTagName("li");	
	for (var i = 0; i < myNodeList.length; ++i) {
		  var item = myNodeList[i];
		  for (var j = 0; j < optHideNodeList.length; ++j) {
			   var itemOptHide = optHideNodeList[j];
		  	   if (item.id == itemOptHide.id){
			   	  item.style.display = "none"; 
			   }
		  }  
		}
	  
}); 
</script>
