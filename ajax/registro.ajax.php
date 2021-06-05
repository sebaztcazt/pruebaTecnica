<?php

require_once "../modelos/registro.modelo.php";

class AjaxRegistro{

    /* GUARDAR REGISTRO */

    public $nombre;
	public $apellido;

    public function ajaxGuardarRegistro(){

        $tabla = "tb_personas";

        $item1 = "nombre";
		$valor1 = $this->nombre;

		$item2 = "apellido";
		$valor2 = $this->apellido;

        $respuesta = ModeloRegistro::mdlGuardarRegistro($tabla, $item1, $valor1, $item2, $valor2);

		echo json_encode($respuesta);
    }

}
/* OBJETO GUARDAR REGISTRO */

if(isset($_POST["nombre"])){

	$registro = new AjaxRegistro();
	$registro -> nombre = $_POST["nombre"];
	$registro -> apellido = $_POST["apellido"];
	$registro -> ajaxGuardarRegistro();
}
