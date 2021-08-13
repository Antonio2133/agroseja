<?php

class HerramientasC{

	static public function MostrarHerramientasC($item, $valor){

		$tablaBD = "herramientas";

		$respuesta = HerramientasM::MostrarHerramientasM($tablaBD, $item, $valor);

		return $respuesta;

	}

	public function actualizarHerramientasC(){

		if(isset($_POST["iconoE"])){

			$tablaBD = "herramientas";
			$datosC = array("id"=>$_POST["Hid"], "icono"=>$_POST["iconoE"], "titulo"=>$_POST["tituloE"], "descripcion"=>$_POST["descripcionE"]);

			$respuesta = HerramientasM::actualizarHerramientasM($tablaBD, $datosC);

			if($respuesta == true){

				echo '<script>
				
				window.location = "herramientas";
				</script>';
			}
		}
	}

}