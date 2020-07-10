<?php
    $resultado="";

    if (isset($_POST["txtahorro"])) {

        $proceso = ($_POST["txtahorro"] * $_POST["txttotal"]);
        $resultado = (($proceso * 3.5) /100);
       
    }

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>Calcular ganancia del usuario</h1><hr>

    <form action="Ejercicio2.php" method="post">
        <label for="txtahorro"> Ahorro : </label>
        <input type="textahorro" name="txtahorro" id="txtahorro" required>
        <label for="txtmes"> Meses : </label>
        <input type="radio" name="txttotal" id="" value="3"> 3 meses
        <input type="radio" name="txttotal" id="" value="6"> 6 meses
        <input type="radio" name="txttotal" id="" value="12"> 12 meses
        <hr>
        <input type="submit" value="Calcular">
    </form>

<?php

    echo "La ganancia es : $resultado ";

?>
    
</body>
</html>