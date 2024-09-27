<?php

// Inicializar el resultado
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los números del formulario
    $num1 = isset($_POST['num1']) ? floatval($_POST['num1']) : 0;
    $num2 = isset($_POST['num2']) ? floatval($_POST['num2']) : 0;
    $resultado = "";

    // Determinar la operación a realizar
    if (isset($_POST['operacion'])) {
        $operacion = $_POST['operacion'];

        switch ($operacion) {
            case 'suma':
                $resultado = $num1 + $num2;
                break;
            case 'resta':
                $resultado = $num1 - $num2;
                break;
            // Puedes agregar más casos para multiplicación y división aquí
            default:
                $resultado = "Operación no válida.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la Calculadora</title>
</head>
<body>
    <h1>Resultado de la Calculadora</h1>
    <p>El resultado es: <?php echo $resultado; ?></p>
    <a href="index.html">Volver a la calculadora</a>
</body>
</html>

