<?php

require_once "admin/Modelos/ConexionBD.php";

class AgroquimicoM extends ConexionBD{

	static public function MostrarAgroquimicoM($tablaBD){

		$pdo = ConexionBD::cBD()->prepare("SELECT imagen, titulo, precio_credito, precio_contado FROM $tablaBD ORDER BY orden ASC");

		$pdo -> execute();

		return $pdo -> fetchAll();

		$pdo -> close();

	}

}