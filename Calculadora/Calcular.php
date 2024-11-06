<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="styles.css"> <!-- Enlazamos el archivo CSS -->
</head>
<body>
    <div class="form-container">
        <h2>Resultado de la operación</h2>
        <?php
        // Verificamos si los valores y la operación han sido enviados
        if (isset($_REQUEST['radio1']) && isset($_REQUEST['valor1']) && isset($_REQUEST['valor2'])) {
            $valor1 = $_REQUEST['valor1'];
            $valor2 = $_REQUEST['valor2'];

            // Verificamos que los valores ingresados sean numéricos
            if (is_numeric($valor1) && is_numeric($valor2)) {
                switch ($_REQUEST['radio1']) {
                    case "suma":
                        $suma = $valor1 + $valor2;
                        echo "<p class='resultado'>La suma es: <strong>" . $suma . "</strong></p>";
                        break;

                    case "restar":
                        $resta = $valor1 - $valor2;
                        echo "<p class='resultado'>La resta es: <strong>" . $resta . "</strong></p>";
                        break;

                    case "multiplicar":
                        $multiplicacion = $valor1 * $valor2;
                        echo "<p class='resultado'>La multiplicación es: <strong>" . $multiplicacion . "</strong></p>";
                        break;

                    case "dividir":
                        // Comprobamos que no se divida entre 0
                        if ($valor2 == 0) {
                            echo "<p class='error'>Error: No se puede dividir entre 0.</p>";
                        } else {
                            $division = $valor1 / $valor2;
                            echo "<p class='resultado'>La división es: <strong>" . $division . "</strong></p>";
                        }
                        break;

                    default:
                        echo "<p class='error'>Por favor, selecciona una operación.</p>";
                        break;
                }
            } else {
                echo "<p class='error'>Por favor, ingresa valores numéricos válidos.</p>";
            }
        } else {
            echo "<p class='error'>Por favor, completa todos los campos.</p>";
        }
        ?>
        <br><br>
        <a href="index.html" class="volver">Volver al inicio</a>
    </div>
    <div class="footer">
        <p>Creado por Juan Bernardo Rosas Torres, TecNM</p>
    </div>
</body>
</html>
