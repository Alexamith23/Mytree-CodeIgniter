<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    $myArr = $this->session->arbolesRegistrados->cantidad;
    $myJSON = json_encode($myArr);
    $myArrP = $this->session->cantPersonas->cantidad;
    $myJSONP = json_encode($myArrP);
    $myArrPA = $this->session->arboles_clientes->cantidad;
    $myJSONPA = json_encode($myArrPA);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <canvas id ="myChart" class="Hola"></canvas>
    </div>
</body>
</html>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var o = JSON.parse(<?php echo $myJSONP?>);
    var oA = JSON.parse(<?php echo $myJSONPA?>);
    var oAB = JSON.parse(<?php echo $myJSON?>);
    var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Árboles', 'Personas', 'Árbol cliente'],
        datasets: [{
            label: 'Estadísticas',
            data: [oAB, o, oA],
            backgroundColor: [
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(153, 102, 255, 0.2)'
            ],
            borderColor: [
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(153, 102, 255, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
    });
</script>