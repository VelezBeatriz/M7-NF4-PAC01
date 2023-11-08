<?php require('connect.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crea tu formulario</title>
</head>
<body>
    <?php
    if(isset($_POST['enviar'])):
        echo "<p>Este es tu formulario personalizad:</p><br/>";
        //print_r($_POST);
        ?>
        <select name="formperson">
            <option value=<?php echo $_POST['value1']?>><?php echo $_POST['value1']?></option>
            <option value=<?php echo $_POST['value2']?>><?php echo $_POST['value2']?></option>
            <option value=<?php echo $_POST['value3']?>><?php echo $_POST['value3']?></option>
            <option value=<?php echo $_POST['value4']?>><?php echo $_POST['value4']?></option>
            <option value=<?php echo $_POST['value5']?>><?php echo $_POST['value5']?></option>
        </select>
        </br>
        <a href="<?php echo URL_SITE; ?>index.php">Volver al menú principal</a>
        <?php
        
    else:
    ?>
        <form method="POST" action="<?php echo URL_SITE; ?>form.php">
        <label>Crea una lista desplegable para tu formulario:</label>
        <br/>
        <input type="text" name="value1" required>
        <br/>
        <input type="text" name="value2" required>
        <br/>
        <input type="text" name="value3" required>
        <br/>
        <input type="text" name="value4" required>
        <br/>
        <input type="text" name="value5" required>
        <br/>
        <input type="submit" value="Enviar" name="enviar">
        </form>
    <?php 
    endif;
    ?>
</body>
</html>