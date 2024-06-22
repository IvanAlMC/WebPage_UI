<?php


class Enlacespaginas{

	public function enlacesPaguinasModel($enlacesModel){

			if ($enlacesModel == "inicio" ||
				$enlacesModel == "proyecto" || 
				$enlacesModel == "contactenos" )	{

				$module = "views/modules/".$enlacesModel.".php";
				include $module;
			}


			
		}

	}





?>