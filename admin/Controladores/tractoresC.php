<?php

class TractorC{

	public function CrearTractorC(){

		if(isset($_POST["tituloN"])){

			$rutaImg = "";

			if(isset($_FILES["imagenN"]["tmp_name"]) && !empty($_FILES["imagenN"]["tmp_name"])){

				if($_FILES["imagenN"]["type"] == "image/png"){

					$nombre = mt_rand(10,999);

					$rutaImg = "Vistas/img/tractores/TR".$nombre.".png";

					$imagen = imagecreatefrompng($_FILES["imagenN"]["tmp_name"]);

					imagepng($imagen, $rutaImg);

				}


				if($_FILES["imagenN"]["type"] == "image/jpeg"){

					$nombre = mt_rand(10,999);

					$rutaImg = "Vistas/img/tractores/TR".$nombre.".jpeg";

					$imagen = imagecreatefromjpeg($_FILES["imagenN"]["tmp_name"]);

					imagejpeg($imagen, $rutaImg);

				}

			}


			$tablaBD = "tractores";

			$datosC = array("titulo"=>$_POST["tituloN"], "precio_contado"=>$_POST["precio_contadoN"], 
			"precio_credito"=>$_POST["precio_creditoN"], "orden"=>$_POST["ordenN"], "imagen"=>$rutaImg);

			$respuesta = TractorM::CrearTractorM($tablaBD, $datosC);

			if($respuesta == true){

				echo '<script>

					window.location = "tractores";

				</script>';

			}else{

				echo 'ERROR AL CREAR IMAGEN';

			}

		}

	}

    //Ver catalogo tractores nuevos
	static public function VerTractorC($item, $valor){

		$respuesta = TractorM::VerTractorM("tractores", $item, $valor);

		return $respuesta;
    }

    //Borrar tractor de catalogo
	public function BorrarTractorC(){

		if(isset($_GET["Tid"])){

			$tablaBD = "tractores";
			$id = $_GET["Tid"];

			if($_GET["Timagen"] != ""){

				unlink($_GET["Timagen"]);

			}

			$respuesta = TractorM::BorrarTractorm($tablaBD, $id);

			if($respuesta == true){

				echo '<script>

					window.location = "tractores";

				</script>';

			}else{

				echo 'ERROR AL BORRAR IMAGEN';

			}
        }

    }

    //Actualizar tractores en catalogo
	public function ActualizarTractorC(){

		if(isset($_POST["Tid"])){

			$rutaImg = $_POST["imagenA"];

			if(isset($_FILES["imagenE"]["tmp_name"]) && !empty($_FILES["imagenE"]["tmp_name"])){

				if(!empty($_POST["imagenA"])){

					unlink($_POST["imagenA"]);

				}else{

					mkdir($direc, 0755);

				}


				if($_FILES["imagenE"]["type"] == "image/png"){

					$nombre = mt_rand(10, 999);

					$rutaImg = "Vistas/img/tractores/TR".$nombre.".png";

					$imagen = imagecreatefrompng($_FILES["imagenE"]["tmp_name"]);

					imagepng($imagen, $rutaImg);

				}

				if($_FILES["imagenE"]["type"] == "image/jpeg"){

					$nombre = mt_rand(10, 999);

					$rutaImg = "Vistas/img/tractores/TR".$nombre.".jpg";

					$imagen = imagecreatefromjpeg($_FILES["imagenE"]["tmp_name"]);

					imagejpeg($imagen, $rutaImg);

				}

			}


			$tablaBD = "tractores";

			$datosC = array("id"=>$_POST["Tid"], "titulo"=>$_POST["tituloE"], "precio_contado"=>$_POST["precio_contadoE"],
            "precio_credito"=>$_POST["precio_creditoE"], "orden"=>$_POST["ordenE"], "imagen"=>$rutaImg);

			$respuesta = TractorM::ActualizarTractorM($tablaBD, $datosC);

			if($respuesta == true){
			
				echo '<script>

					window.location = "tractores";

				</script>';

			}else{

				echo 'ERROR AL ACTUALIZAR IMAGEN';

			}
        }
    }

}