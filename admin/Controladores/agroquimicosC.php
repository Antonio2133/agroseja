<?php

class AgroquimicoC{

	public function CrearAgroquimicoC(){

		if(isset($_POST["tituloN"])){

			$rutaImg = "";

			if(isset($_FILES["imagenN"]["tmp_name"]) && !empty($_FILES["imagenN"]["tmp_name"])){

				if($_FILES["imagenN"]["type"] == "image/png"){

					$nombre = mt_rand(10,999);

					$rutaImg = "Vistas/img/agroquimicos/AQ".$nombre.".png";

					$imagen = imagecreatefrompng($_FILES["imagenN"]["tmp_name"]);

					imagepng($imagen, $rutaImg);

				}


				if($_FILES["imagenN"]["type"] == "image/jpeg"){

					$nombre = mt_rand(10,999);

					$rutaImg = "Vistas/img/agroquimicos/AQ".$nombre.".jpeg";

					$imagen = imagecreatefromjpeg($_FILES["imagenN"]["tmp_name"]);

					imagejpeg($imagen, $rutaImg);

				}

			}


			$tablaBD = "agroquimicos";

			$datosC = array("titulo"=>$_POST["tituloN"], "precio_contado"=>$_POST["precio_contadoN"], 
			"precio_credito"=>$_POST["precio_creditoN"], "orden"=>$_POST["ordenN"], "imagen"=>$rutaImg);

			$respuesta = AgroquimicoM::CrearAgroquimicoM($tablaBD, $datosC);

			if($respuesta == true){

				echo '<script>

					window.location = "agroquimicos";

				</script>';

			}else{

				echo 'ERROR AL CREAR IMAGEN';

			}

		}

	}

    //Ver catalogo agroquimicos nuevos
	static public function VerAgroquimicoC($item, $valor){

		$respuesta = AgroquimicoM::VerAgroquimicoM("agroquimicos", $item, $valor);

		return $respuesta;
    }

    //Borrar agroquimico de catalogo
	public function BorrarAgroquimicoC(){

		if(isset($_GET["AQid"])){

			$tablaBD = "agroquimicos";
			$id = $_GET["AQid"];

			if($_GET["AQimagen"] != ""){

				unlink($_GET["AQimagen"]);

			}

			$respuesta = AgroquimicoM::BorrarAgroquimicom($tablaBD, $id);

			if($respuesta == true){

				echo '<script>

					window.location = "agroquimicos";

				</script>';

			}else{

				echo 'ERROR AL BORRAR IMAGEN';

			}
        }

    }

    //Actualizar tractores en catalogo
	public function ActualizarAgroquimicoC(){

		if(isset($_POST["AQid"])){

			$rutaImg = $_POST["imagenA"];

			if(isset($_FILES["imagenE"]["tmp_name"]) && !empty($_FILES["imagenE"]["tmp_name"])){

				if(!empty($_POST["imagenA"])){

					unlink($_POST["imagenA"]);

				}else{

					mkdir($direc, 0755);

				}


				if($_FILES["imagenE"]["type"] == "image/png"){

					$nombre = mt_rand(10, 999);

					$rutaImg = "Vistas/img/agroquimicos/AQ".$nombre.".png";

					$imagen = imagecreatefrompng($_FILES["imagenE"]["tmp_name"]);

					imagepng($imagen, $rutaImg);

				}

				if($_FILES["imagenE"]["type"] == "image/jpeg"){

					$nombre = mt_rand(10, 999);

					$rutaImg = "Vistas/img/agroquimicos/AQ".$nombre.".jpg";

					$imagen = imagecreatefromjpeg($_FILES["imagenE"]["tmp_name"]);

					imagejpeg($imagen, $rutaImg);

				}

			}


			$tablaBD = "agroquimicos";

			$datosC = array("id"=>$_POST["AQid"], "titulo"=>$_POST["tituloE"], "titulo_contado"=>$_POST["titulo_contadoE"],
            "titulo_credito"=>$_POST["titulo_creditoE"], "orden"=>$_POST["ordenE"], "imagen"=>$rutaImg);

			$respuesta = AgroquimicoM::ActualizarAgroquimicoM($tablaBD, $datosC);

			if($respuesta == true){
			
				echo '<script>

					window.location = "agroquimicos";

				</script>';

			}else{

				echo 'ERROR AL ACTUALIZAR IMAGEN';

			}
        }
    }

}