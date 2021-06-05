<?php

require_once "conexion.php";

class ModeloRegistro{

    static public function mdlGuardarRegistro($tabla, $item1, $valor1, $item2, $valor2){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla($item1, $item2) VALUES (:nombre, :apellido)");

		$stmt->bindParam(":nombre", $valor1, PDO::PARAM_STR);
		$stmt->bindParam(":apellido", $valor2, PDO::PARAM_STR);


		if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}
		
		$stmt = null;

	}

}