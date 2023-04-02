<?php include '../views/header.php'; ?>
<?php
// Establecer la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mvc";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Error al conectar a la base de datos: " . $conn->connect_error);
}

// Procesar los datos del formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Validar los datos del formulario
	$fecha = $_POST['fecha'];
	$hora = $_POST['hora'];
	$motivo = $_POST['motivo'];

	if (empty($fecha) || empty($hora) || empty($motivo)) {
		echo "<p>Por favor, complete todos los campos.</p>";
	} else {
		// Generar la cita
		$sql = "INSERT INTO citas (fecha, hora, motivo) VALUES ('$fecha', '$hora', '$motivo')";

		if ($conn->query($sql) === TRUE) {
			$cita = "Fecha: $fecha, Hora: $hora, Motivo: $motivo";
			echo "<p>Cita generada:</p>";
			echo "<p>$cita</p>";
		} else {
			echo "Error al generar la cita: " . $conn->error;
		}
	}
}

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Generar citas</title>
</head>
<body>
<div class="container">
            <div class="row">
                <div class="col-4">
	<h1>Generar citas</h1>
    </div>

	<form action="generar_citas.php" method="post">
		<label for="fecha">Fecha:</label>
		<input type="date" name="fecha" required><br>

		<label for="hora">Hora:</label>
		<input type="time" name="hora" required><br>

		<label for="motivo">Motivo:</label>
		<input type="text" name="motivo" required><br>

		<input type="submit" value="Generar cita">
	</form>
    </div>
    </div>
    </div>
</body>
</html