<!doctype html>

<html>

<head>
	<meta charset="utf-8">
	<title>Formulario de captura de datos</title>
</head>

<body>

	<p>Datos Personales</p>

	
		<form action="manejadorAlumno.php" method="post" text align="right">
			<tr><br>
				<td>
					Carnet:
				</td>
				<td>
					<input type="text" name="carnet">
				</td>
			</tr></br>

			<tr><br>
				<td>
					Nombre:
			    </td>

			    <td>
			    	<input type="text" name="nombre">
			    </td>
			</tr></br>

			<tr><br>

				<td>
					Apellido:
				</td>

				<td>
					<input type="text" name="apellido">
				</td>

			</tr></br>

			<tr><br>

				<td>
					Fecha de Nacimiento:
				</td>

				<td>
					<input type="text" name="fecha de nacimiento">
				</td>
			</tr></br>

			<tr><br>
				<td>
					Dirección
			    </td>

			    <td>
			    	<input type="text" name="direccion">
			    </td>
			</tr></br>

			<tr><br>
				<td>
					Sección
				</td>

				<td>

					<select name='seccion'>
						<option value=""></option>
					    <option value="sistemas">Sistemas</option>
					    <option value="mato">Mantenimiento</option>
					</select>
				</td>
			</tr></br>

			<tr><br>

				<td colspan="2">
					<input type="submit" name='bot' value='Enviar'>
					<button type="reset" class="btn">Restaurar</button>
				</td>
			</tr></br>
		</form>
</body>

</html>