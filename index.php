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
        <h4>Formula = (Utilidad / Patrimonio)*100+(Ventas/Patrimonio)*100</h4>
    </div>
    <br>
    <div class="container">
        <form method="post" name="form" id="form" action="conexion.php">
            <div class="form-group">
                <label for="formGroupExampleInput">Forumla ROE</label>
                <input type="text" class="form-control" id="formula" name="formula" placeholder="Ingrese Formula">
            </div>
            <button type="submit" name="button" class="btn btn-primary">Calcular</button>
        </form>
        <?php
        $cadena = '$var ='.' 100+100+100;';
        eval($cadena);
        //echo  ($var);
        ?>
            <label for="formGroupExampleInput">Resultado</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="ROE" value="<?php echo($var);?>">
    </div>
</body>
</html>


