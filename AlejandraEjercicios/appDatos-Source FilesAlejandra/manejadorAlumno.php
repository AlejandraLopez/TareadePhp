<?php
include './clases/coneccion.php';
include './clases/AlumnoControlador.php';

$con = new Coneccion();
$AlumnoA = new AlumnoControlador();

if ($con->conectar()){

	if (isset($_REQUEST['bot'])) {

		$AlumnoA->setId('NULL');
		$AlumnoA->setNombres($_REQUEST['nombre']);
		$AlumnoA->setApellido($_REQUEST['apellido']);
		$AlumnoA->setCarnet($_REQUEST['carnet']);
		$AlumnoA->setDir($_REQUEST['dir']);
		$AlumnoA->setFechaNac($_REQUEST['fecha_nac']);
		$AlumnoA->setSeccion($_REQUEST['seccion']);
	}else{
		print'No se a enviado datos';
	}

}else{
	print $con->conectar();
}

$datosObj=array($alumnoA->getId(),
	            $alumnoA->getNombre(),
	            $alumnoA->getApellido(),
                $alumnoA->getFechaNac(),
                $alumnoA->getDir(),
                $alumnoA->getCarnet()
                );

print $alumnoA->guardarDatos($datosObj);