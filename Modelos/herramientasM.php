<?php

require_once "admin/Modelos/ConexionBD.php";

class HerramientasM extends ConexionBD{

	static public function VerHerramientasM($tablaBD){

		$pdo = ConexionBD::cBD()->prepare("SELECT id, icono, titulo, descripcion, imagen FROM $tablaBD");

		$pdo -> execute();

		return $pdo->fetchAll();

		$pdo -> close();

	}

}