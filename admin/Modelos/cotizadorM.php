<?php

require_once "ConexionBD.php";

class CotizadorM extends ConexionBD{

	static public function CrearCotizadorM($tablaBD, $datosC){

		$pdo = ConexionBD::cBD()->prepare("INSERT INTO $tablaBD (nombre_producto, nombre_marca, cantidad, precio_contado, precio_credito, orden, imagen) 
        VALUES (:nombre_producto, :nombre_marca, :cantidad, :precio_contado, :precio_credito, :orden, :imagen)");

		$pdo -> bindParam(":nombre_producto", $datosC["nombre_producto"], PDO::PARAM_STR);
		$pdo -> bindParam(":nombre_marca", $datosC["nombre_marca"], PDO::PARAM_STR);
		$pdo -> bindParam(":cantidad", $datosC["cantidad"], PDO::PARAM_STR);
		$pdo -> bindParam(":precio_contado", $datosC["precio_contado"], PDO::PARAM_STR);
		$pdo -> bindParam(":precio_credito", $datosC["precio_credito"], PDO::PARAM_STR);
		$pdo -> bindParam(":orden", $datosC["orden"], PDO::PARAM_STR);
		$pdo -> bindParam(":imagen", $datosC["imagen"], PDO::PARAM_STR);

		if($pdo -> execute()){
			return true;
		}else{
			return false;
		}

		$pdo -> close();

	}

    //Ver catalogo tractores
	static public function VerCotizadorM($tablaBD, $item, $valor){

		if($item != null){

			$pdo = ConexionBD::cBD()->prepare("SELECT * FROM $tablaBD WHERE $item = :$item");

			$pdo -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$pdo -> execute();

			return $pdo -> fetch();

		}else{

			$pdo = ConexionBD::cBD()->prepare("SELECT * FROM $tablaBD ORDER BY orden ASC");

			$pdo -> execute();

			return $pdo -> fetchAll();

		}

		$pdo -> close();

	}

    //Borrar tractor de catalogo
	static public function BorrarCotizadorm($tablaBD, $id){

		$pdo = ConexionBD::cBD()->prepare("DELETE FROM $tablaBD WHERE id_producto = :id_producto");

		$pdo -> bindParam(":id_producto", $id, PDO::PARAM_INT);

		if($pdo -> execute()){

			return true;

		}else{

			return false;
		}

		$pdo -> close();
    }

    //Actualizar catalogo tractores
	static public function ActualizarCotizadorM($tablaBD, $datosC){

		$pdo = ConexionBD::cBD()->prepare("UPDATE $tablaBD SET titulo = :titulo, precio_contado = :precio_contado, precio_credito = :precio_credito, 
        orden = :orden, imagen = :imagen WHERE id = :id");

		$pdo -> bindParam(":id", $datosC["id"], PDO::PARAM_INT);
		$pdo -> bindParam(":titulo", $datosC["titulo"], PDO::PARAM_STR);
		$pdo -> bindParam(":precio_contado", $datosC["precio_contado"], PDO::PARAM_STR);
		$pdo -> bindParam(":precio_credito", $datosC["precio_credito"], PDO::PARAM_STR);
		$pdo -> bindParam(":orden", $datosC["orden"], PDO::PARAM_STR);
		$pdo -> bindParam(":imagen", $datosC["imagen"], PDO::PARAM_STR);

		if($pdo -> execute()){
			return true;
		}else{
			return false;
		}

		$pdo -> close();


	} 

}