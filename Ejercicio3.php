<?php
    $resultado1 = "";
    $resultado2 = "";

    if (isset($_POST["txtbase"])) {

        $proceso = ($_POST["txtbase"]);
        $proceso2= ($_POST["txtaltu"]);
        $resultado1 = ($proceso * 2)+ ($proceso2 * 2);

        $resultado2 = ($_POST["txtbase"]) * ($_POST["txtaltu"]);

       
      
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Mostrar el área y perimetro de un rectángulo</h1><hr>

    <form action="Ejercicio3.php" method="post">
    <label for="txtbase"> Ingrese la base: </label>
        <input type="text" name="txtbase" id="txtbase" required>
        <hr>
        <label for="txtaltu"> Ingrese la altura: </label>
        <input type="text" name="txtaltu" id="txtaltu" required>
        <hr>
        <input type="submit" value="Calcular">
    </form>

    <?php

    echo "El perimetro es : $resultado1 <hr>"; 
    echo "El área es : $resultado2 cm <sup>2</sup>";

    ?>
    
</body>
</html>