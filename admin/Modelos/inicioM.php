<?php

require_once "./Modelos/ConexionBD.php";

class InicioM extends ConexionBD{

    //Ver ajustes generales

	static public function VerGenerales1M($tablaBD){

		$pdo = ConexionBD::cBD()->prepare("SELECT favicon, titular FROM $tablaBD");

		$pdo -> execute();

		return $pdo -> fetch();

		$pdo -> close();
		$pdo = null;

	}

	static public function VerGenerales2M($tablaBD){

		$pdo = ConexionBD::cBD()->prepare("SELECT logotipo FROM $tablaBD");

		$pdo -> execute();

		return $pdo -> fetch();

		$pdo -> close();
		$pdo = null;

	}

	//Ver contactos

	static public function VerContactosM($tablaBD){

		$pdo = ConexionBD::cBD()->prepare("SELECT ubicacion, telefono, correo FROM $tablaBD");

		$pdo -> execute();

		return $pdo -> fetch();

		$pdo -> close();

		$pdo = null;

	}


	static public function VerRedesM($tablaBD){

		$pdo = ConexionBD::cBD()->prepare("SELECT icono FROM $tablaBD");

		$pdo -> execute();

		return $pdo -> fetchAll();

		$pdo -> close();
		$pdo = null;

	}


    //Editar ajustes generales

    static public function EditarGeneralesM($tablaBD, $id){

		$pdo = ConexionBD::cBD()->prepare("SELECT id, favicon, titular, logotipo FROM $tablaBD WHERE id = :id");

        $pdo -> bindParam(":id", $id, PDO::PARAM_INT);

		$pdo -> execute();

		return $pdo -> fetch();

		$pdo -> close();
		$pdo = null;
    }

    //Actualizar ajustes generales

    static public function ActualizarGeneralesM($tablaBD, $datosC){

        $pdo = ConexionBD::cBD()->prepare("UPDATE $tablaBD SET favicon = :favicon, titular = :titular,
         logotipo = :logotipo WHERE id = :id");

         $pdo -> bindParam(":id", $datosC["id"], PDO::PARAM_INT);
         $pdo -> bindParam(":favicon", $datosC["favicon"], PDO::PARAM_STR);
         $pdo -> bindParam(":titular", $datosC["titular"], PDO::PARAM_STR);
         $pdo -> bindParam(":logotipo", $datosC["logotipo"], PDO::PARAM_STR);

         if($pdo -> execute()){

            return true;
         }

         $pdo -> close();
         $pdo = null;
    }
}