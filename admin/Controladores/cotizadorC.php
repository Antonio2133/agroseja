<?php

class CotizadorC{

	public function CrearCotizadorC(){

		if(isset($_POST["tituloN"])){

			$rutaImg = "";

			if(isset($_FILES["imagenN"]["tmp_name"]) && !empty($_FILES["imagenN"]["tmp_name"])){

				if($_FILES["imagenN"]["type"] == "image/png"){

					$nombre = mt_rand(10,999);

					$rutaImg = "Vistas/img/cotizaciones/CZ".$nombre.".png";

					$imagen = imagecreatefrompng($_FILES["imagenN"]["tmp_name"]);

					imagepng($imagen, $rutaImg);

				}


				if($_FILES["imagenN"]["type"] == "image/jpeg"){

					$nombre = mt_rand(10,999);

					$rutaImg = "Vistas/img/cotizaciones/CZ".$nombre.".jpeg";

					$imagen = imagecreatefromjpeg($_FILES["imagenN"]["tmp_name"]);

					imagejpeg($imagen, $rutaImg);

				}

			}


			$tablaBD = "cotizacion";

			$datosC = array("nombre_producto"=>$_POST["nombre_productoN"], "nombre_marca"=>$_POST["nombre_marcaN"], 
			"cantidad"=>$_POST["cantidadN"], "precio_contado"=>$_POST["precio_contadoN"], "precio_credito"=>$_POST["precio_creditoN"], 
			"orden"=>$_POST["ordenN"], "imagen"=>$rutaImg);

			$respuesta = CotizadorM::CrearCotizadorM($tablaBD, $datosC);

			if($respuesta == true){

				echo '<script>

					window.location = "cotizador";

				</script>';

			}else{

				echo 'ERROR AL CREAR IMAGEN';

			}

		}

	}

    //Ver catalogo tractores nuevos
	static public function VerCotizadorC($item, $valor){

		$respuesta = CotizadorM::VerCotizadorM("cotizacion", $item, $valor);

		return $respuesta;
    }

    //Borrar tractor de catalogo
	public function BorrarCotizadorC(){

		if(isset($_GET["Cid"])){

			$tablaBD = "cotizacion";
			$id = $_GET["Cid"];

			if($_GET["Cimagen"] != ""){

				unlink($_GET["Cimagen"]);

			}

			$respuesta = CotizadorM::BorrarCotizadorm($tablaBD, $id);

			if($respuesta == true){

				echo '<script>

					window.location = "cotizador";

				</script>';

			}else{

				echo 'ERROR AL BORRAR IMAGEN';

			}
        }

    }

    //Actualizar tractores en catalogo
	public function ActualizarCotizadorC(){

		if(isset($_POST["Cid"])){

			$rutaImg = $_POST["imagenA"];

			if(isset($_FILES["imagenE"]["tmp_name"]) && !empty($_FILES["imagenE"]["tmp_name"])){

				if(!empty($_POST["imagenA"])){

					unlink($_POST["imagenA"]);

				}else{

					mkdir($direc, 0755);

				}


				if($_FILES["imagenE"]["type"] == "image/png"){

					$nombre = mt_rand(10, 999);

					$rutaImg = "Vistas/img/cotizaciones/CZ".$nombre.".png";

					$imagen = imagecreatefrompng($_FILES["imagenE"]["tmp_name"]);

					imagepng($imagen, $rutaImg);

				}

				if($_FILES["imagenE"]["type"] == "image/jpeg"){

					$nombre = mt_rand(10, 999);

					$rutaImg = "Vistas/img/cotizaciones/CZ".$nombre.".jpg";

					$imagen = imagecreatefromjpeg($_FILES["imagenE"]["tmp_name"]);

					imagejpeg($imagen, $rutaImg);

				}

			}


			$tablaBD = "cotizacion";

			$datosC = array("id"=>$_POST["Cid"], "nombre_producto"=>$_POST["nombre_productoE"], 
			"nombre_marca"=>$_POST["nombre_marcaE"], "cantidad"=>$_POST["cantidadE"], "precio_contado"=>$_POST["precio_contadoE"],
            "precio_credito"=>$_POST["precio_creditoE"], "orden"=>$_POST["ordenE"], "imagen"=>$rutaImg);

			$respuesta = CotizadorM::ActualizarCotizadorM($tablaBD, $datosC);

			if($respuesta == true){
			
				echo '<script>

					window.location = "cotizador";

				</script>';

			}else{

				echo 'ERROR AL ACTUALIZAR IMAGEN';

			}
        }
    }

}