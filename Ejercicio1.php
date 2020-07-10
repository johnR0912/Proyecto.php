<?php
    $resultado = "";

    if (isset($_POST["txtssueldo"])) {

        $proceso = ($_POST["txtVenta"] * $_POST["txtTotal"]);
        $proceso2 = (($proceso * 10) /100);
        $resultado = $proceso2 + $_POST["txtssueldo"];
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
    <h2>Mostrar cuanto obtendrá de comosion el vendedor si realiza 3, 10 0 15 ventas en el mes. Se mostrara sueldo base, total de la comision y el sueldo con la comision</h2><hr>

    <form action="Ejercicio1.php" method="post">
        <label for="txtssueldo"> Sueldo: </label>
        <input type="text" name="txtssueldo" id="txtssueldo" required>
        <hr>
        <label for="txtVenta"> Ventas: </label>
        <input type="text" name="txtVenta" id="txtVenta" required>
       <hr>
        <label for="txtTotal"> Total de cada venta: </label>
        <input type="text" name="txtTotal" id="txtTotal" required>
        <hr>
        <input type="submit" value="Calcular">
    </form>

    <?php
    echo "El sueldo es : $resultado";
    ?>
 
</body>
</html>