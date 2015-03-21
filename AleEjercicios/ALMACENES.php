<html>
<head>
</head>
<title>
</title>
<body>

<?php
@$nombre= $_post["nombre"];
@$edad= $_post["edad"];
@$municipio= $_post["munic"];
@$telefono= $_post["tel"];
@$casa= $_post["casa"];
@$cel= $_post["cel"];
$resultado=$nombre+$edad+$munic+$tel+$casa+$cel;
?>

<form method "post" name "registro" action "almacen.php"><br></P>
	<P>Ingrese Nombre: <input type "text"  name="nombre"><br></P>
	<P>Ingrese Edad: <input type "text" name= "edad"><br></P>
	<P>Ingrese Municipio: <input type "text" name ="munic"><br></P>
	<P>Ingrese Telfono: <input type "text" name ="tel"><br></P>
	<P>Ingrese Casa: <input type "text" name = "casa"><br></P>
	<P>Ingrese Celular:<input type "text" name= "cel"><br></P>
   <input type = "submit"  value= 'Enviar'>
 <input type = "submit"  value= 'Borrar'>

    </form>
    <p><?php if ($nombre && $edad && $munic && $tel &&  $casa && $cel)
                    echo "LOS DATOS INGRESADOS SON=$resultado";
                    else
                    	if (!$nombre && !$edad && !$muni && !$tel &&  !$casa && !$cel )
                                  echo " INGRESAR DATOS POR FAVOR";
    ?></p>                  
</body>
</html>