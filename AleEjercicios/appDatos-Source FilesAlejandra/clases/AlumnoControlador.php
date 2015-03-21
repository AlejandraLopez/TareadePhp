<?php
class AlumnoControlador extends Alumno{

}

public function guardarDatos($obj Alumno){
	$variableSql = "INSERT INTO alumno.alumno ";
	$variableSql .= "(id, nombre, apellido, fecha_nacimiento, ";
	$variableSql .= "dereccion,carnet) ";
    $variableSql .= "VALUES (";
    $variableSql.="'".$objAlumno[0]."',";
    $variableSql.="'".$objAlumno[1]."',";
    $variableSql.="'".$objAlumno[2]."',";
    $variableSql.="'".$objAlumno[3]."',";
    $variableSql.="'".$objAlumno[4]."',";
    $variableSql.="'".$objAlumno[5]."');";

$bandera = mysql_query($variableSql);
if ($bandera) {
	$msg ="Datos Almacenados";
}else{
	$msg =" Error al almacenar los Datos # de error: ";
	$msg .=mysql_errno();
	$msg .="<br>";
	$msg .=mysql_error;
}

return $msg;
