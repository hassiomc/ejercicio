<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="estilos/style.css">
    <title>Dato Estadistico</title>
</head>
<body>
    <h2 align="center">EJERCICIO ESTADISTICO</h2><br>
    <div class="container">
        <h4>Formula = [(Utilidad / Patrimonio)*100]+[(Ventas/Patrimonio)*100]</h4>
    </div>
    <br>
    <div class="container">
        <form>
            <div class="form-group">
                <label for="formGroupExampleInput">Forumla ROE</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Ingrese Formula">
            </div>
        </form>
    </div>
</body>
</html>
<?php
$cadena = "El 10 y el número 20 con menores que el 30";

$resultado = intval(preg_replace('/[^0-9]+/', '', $cadena), 10);

echo $resultado; // resultado: 102030

$texto = 'OLHHH12563';
eregi('^([a-z]+)([0-9]+)$', $texto, $arreglo);
echo $arreglo[1] . '<br />';
echo $arreglo[2] . '<br />';
?>