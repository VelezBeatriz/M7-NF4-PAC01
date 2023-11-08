<?php require('connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <?php
    if(isset($_POST['enviar'])):
        // print_r($_POST);
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];
        $operadocion = $_POST['operacion'];
        $operador = strtolower($operadocion);

        switch($operador){
            case 'sumar':
                echo "<p>El resultado de $operador es " . ( $num1 + $num2 + $num3);
                break;
            case 'restar':
                echo "<p>El resultado de $operador es " . ( $num1 - $num2 - $num3);
                break;
            case 'multiplicar':
                echo "<p>El resultado de $operador es " . ( $num1 * $num2 * $num3);
                break;
            case 'dividir':
                echo "<p>El resultado de $operador es " . ( $num1 / $num2 / $num3);
                break;
                default:
                echo "Error no contemplado...";
        }

    else:
        ?>
            <h2>Esto es una calculadora que suma, resta, divide y multiplica</h2>
            <form method="POST" action="<?php echo URL_SITE; ?>calculadora.php">
            <p><b>AVISO:</b> Esta calculadora hará (num1 + num2 + num3), con el operador correspondiente...</p>
            <label for="num1">Escribe un número:</label>
            <input type="number" name="num1" id="num1" required>
            </br>
            <label for="num2">Escribe un número:</label>
            <input type="number" name="num2" id="num2" required>
            </br>
            <label for="num3">Escribe un número:</label>
            <input type="number" name="num3" id="num3" required>
            </br>
            <label for="operacion"></label>
            <select name="operacion" id="operacion" required>
                    <option value="Sumar">Sumar</option>
                    <option value="Restar">Restar</option>
                    <option value="Multiplicar">Multiplicar</option>
                    <option value="Dividir">Dividir</option>
            </select>
            </br>
            <input type="submit" value="Enviar" name="enviar">
            </form>
        <?php
    endif;
    ?>
   
</body>
</html>