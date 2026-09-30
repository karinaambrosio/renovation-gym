<?php
// Conexión a la base de datos
include("conexion.php");

// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fecha = $_POST["fecha"];
    $descripcion = $_POST["descripcion"];
    $monto = $_POST["monto"];

    // Insertar datos en la tabla pagos
    $sql = "INSERT INTO pagos (fecha, descripcion, monto) VALUES ('$fecha', '$descripcion', '$monto')";
    if ($conexion->query($sql) === TRUE) {
        echo "<p style='color:green;'>Pago registrado correctamente</p>";
    } else {
        echo "<p style='color:red;'>Error: " . $conexion->error . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Renovation Gym - Registro de Pagos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f7f7f7;
        }
        h2 {
            color: #333;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 300px;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input, button {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
        }
        button {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <h2>Registrar Pago</h2>
    <form method="POST" action="">
        <label>Fecha:</label>
        <input type="date" name="fecha" required>

        <label>Descripción:</label>
        <input type="text" name="descripcion" required>

        <label>Monto (Q):</label>
        <input type="number" name="monto" step="0.01" required>

        <button type="submit">Registrar Pago</button>
    </form>

</body>
</html>
