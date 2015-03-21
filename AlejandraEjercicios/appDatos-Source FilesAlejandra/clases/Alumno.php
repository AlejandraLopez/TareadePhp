<?php
class Alumno{
	private $id;
	private $nombre;
	private $apellido;
	private $fechaNaci;
	private $carnet;
	private $dir;
	private $seccion;
}

public function getId(){
	return $this->id;
}
public function setId($id){
	$this->id = $id;
}

public function getNombre(){
	return $this->nombre;
}
public function setNombre($nombre){
	$this->id = $nombre
}

public function getApellido(){
	return $this->apellido;
}
public function setApellido($apellido){
	$this->id = $apellido
}

public function getFechaNac(){
	return $this->fechaNaci;
}
public function setFechaNac($fechaNaci){
	$this->id = $fechaNaci
}

public function getCarnet(){
	return $this->carnet;
}
public function setCarnet($carnet){
	$this->id = $carnet
}

public function getDir(){
	return $this->dir;
}
public function setDir($dir){
	$this->id = $dir
}

public function getSeccion(){
	return $this->seccion;
}
public function setSeccion($seccion){
	$this->id = $seccion
}