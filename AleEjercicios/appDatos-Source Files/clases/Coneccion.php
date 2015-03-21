<?php
class Coneccion{
	private $usuario = 'root';
	private $clave = 'prueba';
	private $host = 'localhost' ;
}

public function conectar(){
		error_reporting(0);
		$Coneccion = mysql_connect($this->host, $this->usuario, $this->clave);

		if ($Coneccion) {
			return '1';
		}else{
			return "Error al Conectar # de Error: ".\mysql_errno();

		}