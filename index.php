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
        <form method="post" name="form" id="form" action="resultado.php">
            <div class="form-group">
                <label for="formGroupExampleInput">ENERO</label>
                <input type="text" class="form-control" id="formula" name="formula1" placeholder="Ingrese Formula">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">FEBRERO</label>
                <input type="text" class="form-control" id="formula" name="formula2" placeholder="Ingrese Formula">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">MARZO</label>
                <input type="text" class="form-control" id="formula" name="formula3" placeholder="Ingrese Formula">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">ABRIL</label>
                <input type="text" class="form-control" id="formula" name="formula4" placeholder="Ingrese Formula">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">MAYO</label>
                <input type="text" class="form-control" id="formula" name="formula5" placeholder="Ingrese Formula">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">JUNIO</label>
                <input type="text" class="form-control" id="formula" name="formula6" placeholder="Ingrese Formula">
            </div>
            <button type="submit" name="button" class="btn btn-primary">Calcular</button>
        </form>

    </div>
</body>
</html>


