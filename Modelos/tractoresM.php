<?php

require_once "admin/Modelos/ConexionBD.php";

class TractorM extends ConexionBD{

	static public function MostrarTractorM($tablaBD){

		$pdo = ConexionBD::cBD()->prepare("SELECT imagen, titulo, precio_credito, precio_contado FROM $tablaBD ORDER BY orden ASC");

		$pdo -> execute();

		return $pdo -> fetchAll();

		$pdo -> close();

	}

}

