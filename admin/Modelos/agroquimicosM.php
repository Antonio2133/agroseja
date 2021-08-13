<?php

require_once "ConexionBD.php";

class AgroquimicoM extends ConexionBD{

	static public function CrearAgroquimicoM($tablaBD, $datosC){

		$pdo = ConexionBD::cBD()->prepare("INSERT INTO $tablaBD (titulo, precio_contado, precio_credito, orden, imagen) 
        VALUES (:titulo, :precio_contado, :precio_credito, :orden, :imagen)");

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

    //Ver catalogo agroquimicos
	static public function VerAgroquimicoM($tablaBD, $item, $valor){

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

    //Borrar agroquimico de catalogo
	static public function BorrarAgroquimicom($tablaBD, $id){

		$pdo = ConexionBD::cBD()->prepare("DELETE FROM $tablaBD WHERE id = :id");

		$pdo -> bindParam(":id", $id, PDO::PARAM_INT);

		if($pdo -> execute()){

			return true;

		}else{

			return false;
		}

		$pdo -> close();
    }

    //Actualizar catalogo de agroquimicos
	static public function ActualizarAgroquimicoM($tablaBD, $datosC){

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