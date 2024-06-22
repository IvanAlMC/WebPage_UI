<?php

CLASS MvcController{

#llamada a la plantilla
	public function plantilla (){
		
		include "views/template.php";
	}
	#interaccion usuario
	public function enlacesPaginasControler(){
		$enlacesController = $_GET [ "action"] ?? "nada";
	
		$respuesta = Enlacespaginas::enlacesPaguinasModel($enlacesController); 
		
		return $respuesta;

	}

}

?>
