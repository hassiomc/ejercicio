<?php
$formula1 = $_POST["formula1"];
eval("\$enero = $formula1;");

$formula2 = $_POST["formula2"];
eval("\$febrero = $formula2;");

$formula3 = $_POST["formula3"];
eval("\$marzo = $formula3;");

$formula4 = $_POST["formula4"];
eval("\$abril = $formula4;");

$formula5 = $_POST["formula5"];
eval("\$mayo = $formula5;");

$formula6 = $_POST["formula6"];
eval("\$junio = $formula6;");
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="Highcharts-6.2.0/code/js/highcharts.js"></script>
    <script src="Highcharts-6.2.0/code/js/modules/exporting.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="estilos/style.css">
    <link rel="stylesheet" href="estilos/graficos.css">
    <style type="text/css">
        @import 'estilos/graficos.css';

        #container {
            height: 400px;
            max-width: 800px;
            min-width: 320px;
            margin: 0 auto;
        }
        .highcharts-pie-series .highcharts-point {
            stroke: #EDE;
            stroke-width: 2px;
        }
        .highcharts-pie-series .highcharts-data-label-connector {
            stroke: silver;
            stroke-dasharray: 2, 2;
            stroke-width: 2px;
        }
    </style>
    <title>Dato Estadistico</title>
</head>
<body>
<h2 align="center">RESULTADO</h2><br>
<br>
<div class="container">
    <form>
        <input type="button" value="Calcular Otra Vez" name="volver atrás" class="btn btn-primary" onclick="history.back()" />
    </form>
</div>
<div id="grafico"></div>


<script type="text/javascript">
    var enero= '<?php echo$enero;?>';
    var febrero= '<?php echo$febrero;?>';
    var marzo= '<?php echo$marzo;?>';
    var abril= '<?php echo$abril;?>';
    var mayo= '<?php echo$mayo;?>';
    var junio= '<?php echo$junio;?>';
    Highcharts.chart('grafico', {

        title: {
            text: 'ROE por los 6 primeros meses'
        },

        series: [{
            type: 'pie',
            allowPointSelect: true,
            keys: ['name', 'y', 'selected', 'sliced'],
            data: [
                ['Enero', parseInt(enero) , false],
                ['Febrero', parseInt(febrero) , false],
                ['Marzo', parseInt(marzo) , false],
                ['Abril', parseInt(abril) , false],
                ['Mayo', parseInt(mayo) , false],
                ['Junio', parseInt(junio) , false]

            ],
            showInLegend: true
        }]
    });
</script>
</body>
</html>

